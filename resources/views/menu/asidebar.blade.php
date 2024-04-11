<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400&family=Poppins:wght@300;500&display=swap');

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav>ul,
        nav>ul>li {
            outline: 0;
        }

        nav>ul>li>a {
            text-decoration: none;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(90deg, #4b6cb7, #182848);
        }

        .main-menu {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 70px;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.63);
            transition: all .2s linear;
            z-index: 10;
            padding-top: 30px;
           
        }
        .logo {
        /* Center the logo horizontally */
            text-align: center;
            margin-bottom: 20px; /* Add some space below the logo */
        }

        .logo-img {
            /* Adjust the size of the logo image */
            width: 60px; /* Adjust according to your logo size */
            height: auto; /* Maintain aspect ratio */
            border-radius:50%;
        }
        .main-menu:hover {
           
            width: 220px;
            overflow: visible;
        }

        .main-menu>ul>li {
            position: relative;
            display: block;
            width: 180px;
            margin-right:30px;
        }

        .main-menu>ul>li>a {
            display: flex;
            flex-direction: row;
            align-items: left;
            justify-content: left;
            color: #eee;
            font-size: 1rem;
            transition: all .2s ease-in;
            padding: 10px  0px;
            /*padding-right:60px;*/

        }

        .nav-icon {
            width: 60px;
            height: 20px;
            font-size: 20px;
            text-align: left;
        }

        .nav-text {
            width: 120px;
            height: 20px;
            font-family: "mulish", sans-serif;
          
        }

        .logout {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .main-menu li:hover>a,
        .main-menu li.active>a,
        .main-menu li>a:focus {
            text-decoration: none;
            color: #000;
            background-color: rgba(255, 255, 255, 0.9);
        }
        .container1{
            display: flex;
            flex-direction: row;
            color :white;
            padding-top:10px;
            padding-left:80px;
            height:80px;
            width:100%;
            
            border-radius: 5px;
            border: 1px solid gray;
          
        
        }
        .container1 .part1{
            width:75%;
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }
        .container1 .part2{
            width:25%;
            
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .modal1 {
            display: none;
            position: fixed;
            z-index: 1000;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            overflow: auto;
           
        }
        .modal-content1 {
            background-color: #fefefe;
            margin: 12% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
@php
    $user = Auth::user();
@endphp
<div class="container1">

    <div class="part1"><h4><b>Inventory Management System</b></h4><p><b>Department of Chemistry UOJ</b></p></div>

    <div class="part2">   
    <span style="color: white; font-size: 16px;">{{ $user->fullname }}</span> 
        <a href="#" onclick="openProfileModal()">
            <i class="fa fa-user-circle " style="color:white; font-size: 35px; margin-top:20px; margin-left:20px;"></i></a>
           
        
    </div>    
        
</div>
    <nav class="main-menu">
         <div class="logo">
            <!-- Add your logo image or text here -->
            <img src="/image/1.png" alt="Logo" class="logo-img">
            <!-- <h1>Logo Text</h1> -->
        </div>
        <ul>
            <li>
                <a href="{{url('/ahome')}}" onclick="loadSection('home')">
                    <i class="fa fa-home nav-icon"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>

            <li>
                <a href="{{url('/chemical1')}}" onclick="loadSection('chemical1')">
                    <i class="fas fa-vial nav-icon"></i>
                    <span class="nav-text">Chemicals</span>
                </a>
            </li>
            <li>
                <a href="{{url('/ins-index2')}}" onclick="loadSection('instruments')">
                    <i class="fa fa-flask nav-icon"></i>
                    <span class="nav-text">Equipments</span>
                </a>
            </li>
            <li>
                <a href="{{url('/br-index2')}}"onclick="loadSection('broken')">
                    <i class="fa fa-chain-broken nav-icon"></i>
                    <span class="nav-text">Broken Glasses</span>
                </a>
            </li>
            <li>
                <a href="{{url('/users')}}"onclick="loadSection('broken')">
                    <i class='fa fa-user nav-icon'></i></i>
                    <span class="nav-text">Users</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="showNotifications(['Notification 1', 'Notification 2', 'Notification 3'])">
                    <i class="fas fa-bell nav-icon"></i>
                    <span class="nav-text">Notifications</span>
                    <span id="notificationCount" class="notification-count"></span>
                </a>
            </li>

        </ul>
        <ul class="logout">
             <li>
                <a href="#" onclick="openHelpModal()">
                    <i class="fas fa-question-circle nav-icon"></i>
                    <span class="nav-text">Help</span>
                </a>

            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <!-- CSRF protection token -->
            <button type="submit">Logout</button>
        </form>

        <!-- Trigger the logout action -->
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <span class="nav-text">
                    Logout
                </span>
            </a>
        </li>

        </ul>
    </nav>
    <div id="helpModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeHelpModal()">&times;</span>
            <!-- Include the help.blade.php content here -->
            <iframe src="{{ route('help') }}" frameborder="0" style="height: 400px; width: 100%;"></iframe>
        </div>
    </div>
    <div id="profileModal" class="modal1">
        <div class="modal-content1">
            <span class="close" onclick="closeProfileModal()">&times;</span>
            <i class="fa fa-user-circle " style="color:#16013B; font-size: 70px; margin-top:15px; margin-left:42%;"></i></a>
            <h5 style="text-align:center;  margin-left:10px;"><br>{{ $user->fullname }}</h5>
            <br>
            <p style="text-align:center;">Username : {{$user->username}}</p>
            <p style="text-align:center;">Email : {{ $user->email }}</p>
            <p style="text-align:center;">Role : {{$user->role}}</p>
            
        </div>
    </div>

    <script>
        function loadSection(section) {
            const contentSection = document.getElementById('content');
            const xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    contentSection.innerHTML = this.responseText;
                }
            };

            xhttp.open("GET", section + ".html", true);
            xhttp.send();
        }
        function openHelpModal() {
            document.getElementById('helpModal').style.display = 'block';
        }

        function closeHelpModal() {
            document.getElementById('helpModal').style.display = 'none';
        }
        function openProfileModal() {
            document.getElementById('profileModal').style.display = 'block';
        }

        function closeProfileModal() {
            document.getElementById('profileModal').style.display = 'none';
        }
        

        
        
    </script>
</body>

</html>