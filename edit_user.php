<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
    <style>
            .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 100px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .widget h2 {
            margin-top: 0;
        }

    </style>
</head>

</head>
<?php
    // Include database connection
    include'sidebar.php';
    include'header.php';
?> 

<body>
    <h2>Edit User Information</h2>
    <div class="dashboard">
    <div class="content">
    <div class="widget">
          

    <?php
      //Include database connection
      include 'db_connection.php';
      //check if thr user ID is provided via GET parameter
      if(isset($_GET['id'])){
        //Get the use ID from GET parameter
        $id = $_GET['id'];
        //Retrieve user information from the database based on ID
        $sql = "SELECT * FROM user WHERE id = $id";
        $result =$conn->query($sql);
        
        if ($result->num_rows > 0){
            //Fetch user data
            $row = $result->fetch_assoc();
            $username = $row['username'];
            $password = $row['password'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $phoneno = $row['phoneno'];
            $email = $row['email'];
            $usertype = $row['usertype'];
?>
      <form action="update_user.php" method="post">
      <div class="form-group">
      <div class="row">
      <div class="widget">

<h2 style="  text-align: center; " >Welcome to dashboard</h2></div>

      <div class="col-md-3"></div>
      <div class="col-md-6">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" class="form-control" name="username" value="<?php echo $username; ?>" required><br><br>

        <label for="password">Password:</label><br>
        <input type="text" id="password" class="form-control" name="password" value="<?php echo $password; ?>" required><br><br>

        <label for="firstname">Firstname:</label><br>
        <input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $firstname; ?>"required><br><br>

        <label for="lastname">Lastname:</label><br>
        <input type="text" id="lastname" class="form-control" name="lastname" value="<?php echo $lastname; ?>"required><br><br>

        <label for="phoneno">Phoneno:</label><br>
        <input type="text" id="phoneno" name="phoneno" class="form-control" value="<?php echo $phoneno; ?>"required><br><br>


        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" class="form-control"value="<?php echo $email; ?>"required><br><br>

        <label for="usertype">Usertype:</label><br>
        <input type="text" id="usertype" name="usertype" class="form-control" value="<?php echo $usertype; ?>"required><br><br>
        <input type="submit" value="Update">
        </div>
        </div>

<?php
        }else{
            echo"User not found.";

        }
    }else{
        echo "User ID not provided.";
    }
        //Close connection
        $conn->close();
        ?>
        </div>
        <div class="col-md-3"></div>

    </div>
    </div>
    </div>
    </div>  
</body>
<?php
    // Include database connection
    include'footer.php';
?> 

</html>