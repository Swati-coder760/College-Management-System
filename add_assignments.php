<?php
    include 'db_connection.php';

?>
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
    $username=$_SESSION['username'];

?> 
    <div class="dashboard">
    <div class="widget">

    <h2 style="text-align: center;">Add Assignment Details</h2>
    <div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_assignment.php" method="post">
    <div class="form-group">
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

<label for="semester">Semester:</label><br>
  <select id="semester" class="form-control"  name="semester">
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4th</option>
    
</select><br>
<input type="hidden" id="username" name="username" class="form-control" ><br><br>

<label for="title"> Details:</label><br>
<label for="title">Title Of Assignment:</label>
        <input type="text" id="title" name="title" class="form-control" required><br><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"class="form-control"></textarea><br><br>
        
    

        
        
        <label for="max_score">Max Score:</label>
        <input type="number" id="max_score" name="max_score" class="form-control"required><br><br>
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" class="form-control" required><br><br>
        
      
        <div class="submit-button-wrapper">

<input type="submit" class="btn btn-primary"value="Submit"></div>
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