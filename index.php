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
            background-image: url('image/c2.jpg'); /* Replace 'background.jpg' with the path to your background image */
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
        <h2>Login</h2>
        <form class="login-form" action="submit_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            <label for="">User Type:</label>
            <input type="text" id="usertype" name="usertype" >
            <div class="center">
                <input type="submit" value="Login"><br>
            </div>
                <!-- Facebook Icon --><div class="row">
                    <div class="col-md-4" style="text-align: left; >
                <a href="#" style="text-decoration: none; color: #385185;"><i class="fab fa-facebook-f fa-lg" style="margin-right: 10px;"></i></a>
                <!-- Instagram Icon -->
                <a href="#" style="text-decoration: none; color: #E1306C;"><i class="fab fa-instagram fa-lg" style="margin-right: 10px;"></i></a>
    </div>
    <!-- You can add more social media icons and links here -->
    <div class="col-md-10" style="text-align: right; ">
   <a href="add_admin.php" class="button_reg">Register As Admin</a>
    </div>
        </form>
    </div>
</body>
</html>
