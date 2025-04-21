<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Book Recommendation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url(logo.jpg);
            background-size: cover;
            background-position:center;
            background-repeat: no-repeat;


            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: transperent;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 20px;
            color: white;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .forgot-password {
            text-align: right;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .forgot-password a {
            text-decoration: none;
            color: #007BFF;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        button {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .signup-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .signup-link a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login2.php" method="POST">
            <div class="input-group">
                <label style="color:white;" for="email">Email:</label>
                <input type="email"  name="email" required>
            </div>
            
            <div class="input-group">
                <label style="color:white;" for="password">Password:</label>
                <input type="password"  name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
        <div class="signup-link">
            <p style="color:white;">Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </div>
</body>
</html>
