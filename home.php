<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Include Font Awesome CSS -->
    <style>
        /* CSS for styling the login form */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('image/b2.png'); /* Replace 'background.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            width: 300px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .login-container h2 {
            text-align: center;
        }
        .login-form input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .login-form input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }
        .center {
            text-align: center;
            margin-top: 50px; /* Adjust as needed */
        }
        .signup-form input[type="submit"] {
            width: 30%;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .top-right-button {
            position: fixed;
            width: 30%;
            top: 10px; /* Adjust as needed */
            right: 10px; /* Adjust as needed */
        }
        .button_reg {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Congratulate</h2>
        <form class="login-form" action="submit_login.php" method="POST">
            <label for="username"> </label><br><label>Now You are a registered Member</label><br><br><br>
            <label for="password">Go To Our LOGIN Page:</label>
           
    <!-- You can add more social media icons and links here -->
    <div class="col-md-10" style="text-align: right; ">
   <a href="index.php" class="button_reg">Login Here</a>
    </div>
        </form>
    </div>
</body>
</html>
