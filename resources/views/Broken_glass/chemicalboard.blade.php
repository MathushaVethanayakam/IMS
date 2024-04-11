
<head>
    <style>
        .container {
            max-width: 800px; /* Increased width */
            height: 700px; /* Increased height */
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #e0e0e0; /* Changed background color */
            margin: 0 auto;
            position: relative;
        }

        .header {
            padding: 20px;
            text-align: center;
        }

        .heading {
            position: absolute;
            top: 20px; /* Adjusted top position */
            left: 50%; /* Centered horizontally */
            transform: translateX(-50%); /* Centered horizontally */
            color: #333; /* Changed text color */
            font-size: 24px; /* Increased font size */
        }

        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 60px; /* Increased margin */
        }

        .card {
            width: 180px; /* Increased width */
            height: 320px; /* Increased height */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            margin: 20px;
            transition: transform 0.2s;
            text-align: center;
            background-color: #009688; /* Changed background color */
            color: white;
            text-decoration: none;
        }

        .card a:hover {
            color: white;
        }

        .card-zoom:hover {
            transform: scale(1.05);
            background-color: #00796b; /* Changed hover background color */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h3 class="heading">Chemical Details of Laboratory</h3>
    </div>
    <div class="cards">
        <div class="heading">Department of Chemistry UOJ</div>
        <a class="card card-zoom" href="{{ route('organic_chemicals.index') }}">
            Organic Chemicals
        </a>
        <a class="card card-zoom" href="{{ route('inorganic_chemicals.index') }}">
            Inorganic Chemicals
        </a>
        <!-- Add more cards if needed -->
    </div>
</div>
</body>

