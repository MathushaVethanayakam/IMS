<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Registration Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #16013B;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 300px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    h2 {
        text-align: center;
    }

    form {
        margin-top: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="submit"],
    input[type="reset"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #000099;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="reset"] {
        width: 100%;
        background-color: #b30000;
        color: white;
        cursor: pointer;
    }

    input[type="reset"]:hover {
        background-color: #003311;
    }

    .forgot-password {
        text-align: center;
        margin-top: 10px;
    }

    .forgot-password a {
        color: gray;
        text-decoration: none;
        font-size: 13px;
    }

    .forgot-password a:hover {
        text-decoration: underline;
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

    .container img {
        width: 80px;
        height: 80px;
        margin-top: 10px; /* Adjust as needed */
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
    <img src="image/1.png" alt="image">
    <h2>Login</h2>
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        <input type="reset" value="Reset">
    </form>
    <div class="forgot-password">
        <a href="forgot_password.html">Forgot Password?</a>
    </div>
    <div class="form-footer">
        <a href="{{ route('register') }}">Don't have an account? Register here</a>
    </div>
</div>

</body>
</html>
