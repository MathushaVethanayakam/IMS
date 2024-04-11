<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content goes here -->
</head>
<body>
    <!-- Your existing HTML code goes here -->

    <!-- Notification modal -->
    <div id="notificationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeNotificationModal()">&times;</span>
            <h2>Notifications</h2>
            <ul id="notificationList">
                <!-- Notification items will be added dynamically here -->
            </ul>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Your existing JavaScript code goes here

        // Function to open the notification modal
        function openNotificationModal() {
            document.getElementById('notificationModal').style.display = 'block';
        }

        // Function to close the notification modal
        function closeNotificationModal() {
            document.getElementById('notificationModal').style.display = 'none';
        }

        // Function to show notifications in the modal
        function showNotifications(notifications) {
            const notificationList = document.getElementById('notificationList');
            notificationList.innerHTML = ''; // Clear existing notifications

            notifications.forEach(notification => {
                const listItem = document.createElement('li');
                listItem.textContent = notification;
                notificationList.appendChild(listItem);
            });

            openNotificationModal(); // Open the modal to display notifications
        }
    </script>
</body>
</html>
