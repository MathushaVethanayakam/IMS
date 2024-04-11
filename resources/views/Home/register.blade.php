<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #16013B;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        text-align: center; /* Center-align the content within the container */
    }

    h2 {
        text-align: center;
    }

    form {
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="submit"],
    input[type="reset"],
    select {
        width: calc(50% - 10px);
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"],
    input[type="reset"] {
        width: 45%;
        margin-top: 10px;
    }

    input[type="submit"] {
        background-color: #000099;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="reset"] {
        background-color: #b30000;
        color: white;
        cursor: pointer;
    }

    input[type="reset"]:hover {
        background-color: #003311;
    }

    .form-footer {
        margin-top: 20px;
        text-align: center;
    }

    .form-footer a {
        color: #000099;
        text-decoration: none;
        font-size: 13px;
    }

    .form-footer a:hover {
        text-decoration: underline;
    }

    select {
        width: calc(50% - 10px);
    }

    select option[disabled] {
        color: gray;
    }

    .registration-image {
        max-width: 30%;
        margin-bottom: 5px;
    }

    /* Tooltip style */
    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip input[type="text"] {
        width: calc(100% - 1px); /* Adjust the width to accommodate the tooltip */
        margin-right:2px;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 100%;
        background-color: #000;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 10px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>
</head>
<body>

<div class="container">
@if ($errors->any())
                <div class="alert alert-danger" style="padding: 6px; height: auto;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <img src="/image/1.png" alt="Registration Image" class="registration-image">
    <h2>Register</h2>
    <form action="{{route('register')}}" method="post">
        @csrf
        <input type="text" name="fullname" placeholder="Full Name" required>
        <div class="tooltip">
            <input type="text" name="username" placeholder="Username" required>
            <span class="tooltiptext">You can use your university reg no as username</span>
        </div>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <select id="role" name="role">
            <option disabled selected hidden>Role</option>
            <option value="lecturer">Lecturer</option>
            <option value="lab assistant">Lab Assistant</option>
        </select>
        <input type="submit" value="Register">
        <input type="reset" value="Reset">
    </form>
    <div class="form-footer">
        <a href="{{url('/lo')}}">Already have an account? Login here</a>
    </div>
</div>

</body>
</html>
