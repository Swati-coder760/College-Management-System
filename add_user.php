
<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

    <style>
    
body {
    background-image: url('image/s1.jpg'); /* Set the path to your background image */
    background-size: cover; /* Ensure the background image covers the entire viewport */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
}

                   .card-widget {
            border: 2px solid #007bff; /* Blue border color */
            border-radius: 5px;
            overflow: hidden; /* Ensure the border doesn't extend beyond the card */
        }
        .card-widget .card-header,
        .card-widget .card-body {
            padding: 20px; /* Add padding to the header and body */
        }

        .container1 {
            text-align: center; /* Center-align its children */
        }
        .container1 input[type="submit"] {
            margin: 10px; /* Add some space between inputs */
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
    <?php
    // Include database connection
?> 
<div class="container">
<div class="container-fluid">

    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card card-widget"> 
                        <div class="card-header">
                            <h5 class="card-title" style="text-align: center;">ADD STUDENT DETAILS HERE</h5>
                        </div>
                        <div class="card-body">
    <form action="submit_user.php" method="post">
            <div class="form-group">

            <label for="username">Username:</label>
            <input type="text"  class="form-control" id="username" name="username" required> </br></br>
            <label for="password">Password:</label>
            <input type="text" class="form-control" id="password" name="password" required> </br></br>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" class="form-control" name="firstname" required> </br></br>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" class="form-control"name="lastname" required> </br></br>
            <label for="phoneno">Phone no:</label>
            <input type="text" id="phoneno" class="form-control"name="phoneno" required> </br></br>
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control"name="email" required></br> </br>
            <label for="usertype">User Type:</label>
            <input type="text" id="usertype"class="form-control" name="usertype" value='student' readonly></br> </br>
            

            <div class="container1">

            <input type="submit" value="Register" class="btn btn-primary">
            <a href="index.php" class=" btn btn-secondary">Cancel</a>

            </div>
    </div>
            <div class="col-md-3"></div>

        </form>
  </div>
</div>



       
        </div>
        </div>
        </div>
        </div>
        </div>
    
</body>
</html>