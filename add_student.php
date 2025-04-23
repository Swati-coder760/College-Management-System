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

    <h2 style="text-align: center;">Student Admission Form</h2>
<div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_student.php" method="post" enctype="multipart/form-data">

<div class="form-group">
<h3>Add Personal Details:</h3><br>

  <label for="student_id">Student ID:</label><br>
  <input type="text" id="student_id" class="form-control" name="student_id"><br>

  <label for="first_name">First Name:</label><br>
  <input type="text" id="first_name" class="form-control" name="first_name"><br>

  <label for="last_name">Last Name:</label><br>
  <input type="text" id="last_name"class="form-control"  name="last_name"><br>

  <label for="date_of_birth">Date of Birth:</label><br>
  <input type="date" id="date_of_birth" class="form-control"  name="date_of_birth"><br>

  <label for="gender">Gender:</label><br>
  <select id="gender" class="form-control"  name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select><br>

  <label for="email">Email Address:</label><br>
  <input type="email" id="email" class="form-control" name="email"><br>

  <label for="contact_number">Contact Number:</label><br>
  <input type="text" id="contact_number" class="form-control" name="contact_number"><br>

  <label for="address">Address:</label><br>
  <textarea id="address" name="address"class="form-control" ></textarea><br>

  <label for="emergency_contact_person">Emergency Contact Person:</label><br>
  <input type="text" id="emergency_contact_person" class="form-control" name="emergency_contact_person"><br>

  <label for="emergency_contact_number">Emergency Contact Number:</label><br>
  <input type="text" id="emergency_contact_number" class="form-control" name="emergency_contact_number"><br>

  <label for="guardian_name">Guardian's Name:</label><br>
  <input type="text" id="guardian_name" class="form-control" name="guardian_name"><br>

  <label for="guardian_email">Guardian's Email:</label><br>
  <input type="email" id="guardian_email" class="form-control" name="guardian_email"><br>

  <label for="guardian_contact_number">Guardian's Contact Number:</label><br>
  <input type="text" id="guardian_contact_number" class="form-control" name="guardian_contact_number"><br>

  <label for="student_photo">Photo:</label><br>
  <input type="file" id="student_photo" accept="image/*" class="form-control"  name="student_photo"><br>
  
  <h3>Add Course Details:</h3><br>

  <?php
// Assuming you have already established a database connection

// Query to retrieve class options from the database
$query = "SELECT * FROM courses";
$result = mysqli_query($conn, $query);

// Check if query was successful
if ($result) {
    echo '<label for="firstname">Select your Course:</label>';
    echo '<select id="course_name" class="form-control"  name="course_name">';
    
    // Default option for the select field
    echo '<option value="">Select a Course</option>';

    // Loop through the results and generate option elements
    while ($row = mysqli_fetch_assoc($result)) {
        $course_name = $row['course_name'];
        echo "<option value=\"$course_name\">$course_name</option>";
    }

    echo '</select><br><br>';
} else {
    // Handle database query error
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
  <label for="admission_year">Admission Year:</label><br>
  <input type="number" id="admission_year" class="form-control" name="admission_year"><br>


  <label for="batch">Date Of Admission:</label><br>
  <input type="date" id="date_of_admission" class="form-control"  name="date_of_admission"><br>
  <h3>Add Authentication Details:</h3><br>
  <label for="department">Username:</label><br>
  <input type="text" id="username" class="form-control" name="username"><br>

  <label for="admission_year">Password:</label><br>
  <input type="number" id="password" class="form-control" name="password"><br>

  <label for="batch">User Type:</label><br>
  <input type="text" id="usertype" class="form-control"  name="usertype" value="student"><br>


  <div class="submit-button-wrapper">

<input type="submit" class="btn btn-primary"value="Submit"></div>
</div>
</div>
</div>
<div class="col-md-3"></div>
</div>
</div>
</form>

</div>
</div>
</div>

<?php
// Include database connection
include'footer.php';
?>
</html>    