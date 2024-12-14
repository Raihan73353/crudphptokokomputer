<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 360px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .login-container h2 {
            color: #1877f2;
            font-weight: bold;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #dddfe2;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #1877f2;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-container button:hover {
            background-color: #155dbb;
        }
        .login-container .forgot-password {
            margin-top: 15px;
            font-size: 14px;
            color: #1877f2;
            text-decoration: none;
        }
        .login-container .forgot-password:hover {
            text-decoration: underline;
        }
        .login-container .divider {
            margin: 15px 0;
            border-top: 1px solid #dddfe2;
        }
        .login-container .create-account {
            color: #42b72a;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            font-weight: bold;
        }
        .login-container .create-account:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <input type="text" name="email" placeholder="Email or Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Log In</button>
    </form>
    <a href="#" class="forgot-password">Forgot Password?</a>
    <div class="divider"></div>
    <a href="#" class="create-account">Create New Account</a>
</div>

</body>
</html>
```
