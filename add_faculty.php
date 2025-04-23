<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD FACULTY INFORMATION</title>
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
<div class="container">
<div class="container-fluid">

    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card card-widget"> 
                        <div class="card-header">
                            <h5 class="card-title" style="text-align: center;">ADD FACULTY DETAILS HERE</h5>
                        </div>
                        <div class="card-body">

    <form action="submit_faculty.php"method="post">
    <div class="form-group">

    <label for="username">username:</label><br>
            <input type="text" id="faculty_name" class="form-control"  name="faculty_name"required><br><br>
            <label for="username">Password:</label><br>
            <input type="text" id="password" class="form-control"  name="password"required><br><br>
            <label for="email">email:</label><br>
            <input type="email" id="email" class="form-control"  name="email" required><br><br>
            <label for="phone">phone:</label><br>
            <input type="phone"id="phone"class="form-control"  name="phone"required><br><br>
            <label for="usertype">User Type:</label>
            <input type="text" id="usertype"class="form-control" name="usertype" value="faculty" readonly></br> </br>

            <div class="container1">
            <input type="submit" value="Register" class="btn btn-primary">
            <a href="index.php" class=" btn btn-secondary">Cancel</a>
 </div></div>

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