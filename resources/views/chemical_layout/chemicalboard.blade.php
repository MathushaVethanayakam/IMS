@extends('chemical_layout.layout')

@section('content')
<head>
    <style>
        .container {
            max-width: 850px; /* Increase the width */
            height: 430px; /* Increase the height */
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f5f5f5;
            margin: 0 auto;
            margin-top:50px;
            position: relative;
            text-align: center; /* Center align content */
        }

        .header {
            padding: 20px;
            text-align: center;
        }

        .heading {
            color: #0066CC;
            font-size: 20px;
            margin-bottom: 10px; /* Add some space below the heading */

        }

        .part {
            display: flex;
            flex-direction:row;
            justify-content: center;
            margin-top:50px;
        }
        .part a {
            margin: 0 10px; /* Add space between the anchor tags */
        }

        .part img {
            width: 300px; /* Adjust image size */
            height: 180px;
            border-radius:20px;
            margin:10px;
            transition: transform 0.3s ease; /* Add smooth transition on hover */
        }

        .part img:hover {
            transform: scale(1.1); /* Increase size on hover */
        }
    </style>
</head>
<body>
    
<div class="container">
    <div class="header">
        <h3>Chemical Details of Laboratory</h3>
    </div>
    <div class="heading">Department of Chemistry UOJ<br></div>
    <div class="part">
        
        <a href="{{ route('organic_chemicals.index') }}">
            <img src="image/org.png" alt="image" /> 
        </a>
        <a href="{{ route('inorganic_chemicals.index') }}">
            <img src="image/ing.png" alt="image" />
        </a>
    </div>
</div>
</body>
@endsection
