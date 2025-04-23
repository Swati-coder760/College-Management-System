<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
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
        .submit-button-wrapper {
            text-align: center;
        }

    </style>
</head>
<body>
<?php
    // Include database connection
    include'sidebar.php';
    include'header.php';
?> 
    <div class="dashboard">
    <div class="widget">

    <h2 style="text-align: center;">Faculty Information Form</h2>
<div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_new_faculty.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="fullname">Full Name:</label><br>
    <input type="text" class="form-control"id="fullname" name="fullname" required><br>

    <label for="gender">Gender:</label><br>
    <select id="gender" class="form-control"name="gender" required>
      <option value=""class="form-control">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br>

    <label for="dob">Date of Birth:</label><br>
    <input type="date" class="form-control"id="dob" name="dob"><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" class="form-control"name="phone" pattern="[0-9]{10}" required><br>

    <label for="email">Email:</label><br>
    <input type="email" class="form-control"id="email"class="form-control" name="email" required><br>

    <label for="address">Address:</label><br>
    <textarea id="address" class="form-control"name="address" rows="4" required></textarea><br>

    <label for="degree">Highest Degree Earned:</label><br>
    <input type="text" class="form-control" id="degree" name="degree" required><br>

    <label for="institution">Institution Name:</label><br>
    <input type="text"class="form-control" id="institution" name="institution" required><br>

    <label for="major">Major/Field of Study:</label><br>
    <input type="text" class="form-control"id="major" name="major" required><br>

    <label for="experience">Previous Work Experience:</label><br>
    <textarea id="experience" class="form-control"name="experience" rows="4"></textarea><br>

    <label for="teaching">Teaching Specializations:</label><br>
    <textarea id="teaching"class="form-control" name="teaching" rows="4"></textarea><br>

    <label for="research">Research and Publications:</label><br>
    <textarea id="research"class="form-control" name="research" rows="4"></textarea><br>

    <label for="admin">Administrative Responsibilities:</label><br>
    <textarea id="admin"class="form-control" name="admin" rows="4"></textarea><br>

    <label for="memberships">Professional Memberships:</label><br>
    <textarea id="memberships" class="form-control"name="memberships" rows="4"></textarea><br>

    <label for="awards">Awards/Honors Received:</label><br>
    <textarea id="awards" class="form-control" name="awards" rows="4"></textarea><br>

    <!-- Additional fields can be added similarly -->
    <h3>Add Authentication Details:</h3><br>
  <label for="department">Username:</label><br>
  <input type="text" id="username" class="form-control" name="username"><br>

  <label for="admission_year">Password:</label><br>
  <input type="number" id="password" class="form-control" name="password"><br>

  <label for="batch">User Type:</label><br>
  <input type="text" id="usertype" class="form-control"  name="usertype" value="faculty"><br>



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