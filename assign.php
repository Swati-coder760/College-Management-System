<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE);

include 'db_connection.php';

    $user=$_SESSION['username'];

    echo "user".$user;

    // Function to sanitize input data
    function sanitize($data) {
        return htmlspecialchars(strip_tags($data));
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize form data
        $course_name = sanitize($_POST['course_name']);
        $title = sanitize($_POST['title']);
        $description = sanitize($_POST['description']);
        $answer = sanitize($_POST['answer']);
        $submitted_date = sanitize($_POST['submitted_date']);
        $submit = "SUBMITTED"; // Corrected variable name
        
        // Perform database operation (insert or update)
        // Here, you would use prepared statements or other methods to prevent SQL injection
        // For demonstration purposes, I'll use a simple update query
        $query = "UPDATE assignment SET answer = '$answer', status = '$submit',student_name='$user' ,submitted_date='$submitted_date' WHERE course_name = '$course_name' AND title = '$title' AND description = '$description'"; // Corrected query
        
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            echo "Data saved successfully.";
            // Redirect to assign.php if necessary
            header("Location: assign.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignments</title>
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
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-links a {
            margin-right: 10px;
        }
        .data-div {
            margin-bottom: 10px;
        }
        #myDIV {
            display: none;
            height: auto;
        }
        .footer1 {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        // Include sidebar and header
        include 'sidebar.php';
        include 'header.php';
    ?>
        <div class="content">
            <div class="widget">

<!-- HTML/PHP to display table -->
<table border='1' width='80%' height='200px'>
    <tr>
        <th>Course Name</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php

    // Fetch data from database and populate the table
    $query = "SELECT * FROM assignment"; // Modify "your_table" to your actual table name
    $result = mysqli_query($conn, $query);
    

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $submit = ($row['answer'] == '') ? "SUBMIT" : "SUBMITTED";
    
            echo "<tr>";
            echo "<td>".$row['course_name']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['description']."</td>";
            
            // echo "<td><button id="submitBtn" onclick='myFunction(\"".$row['course_name']."\", \"".$row['title']."\", \"".$row['description']."\")'>$submit</button></td>";
            echo "<td><button id='submitBtn' onclick='myFunction(\"".$row['course_name']."\", \"".$row['title']."\", \"".$row['description']."\")'>$submit</button></td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No data available</td></tr>";
    }
    ?>
</table>

<!-- JavaScript to populate form fields -->
<script>
    function myFunction(courseName, title, description) {
        var x = document.getElementById("myDIV");
        var courseNameInput = document.getElementById("course_name");
        var titleInput = document.getElementById("title");
        var descriptionInput = document.getElementById("description");

       
        var submitBtn = document.getElementById("submitBtn");
if(submitBtn.innerHTML == 'SUBMITTED')
    alert("You already submitted");
else
   // alert("Please submit");
   if (x.style.display === "none") {
            x.style.display = "block";
            // Set values to the form fields
            courseNameInput.value = courseName;
            titleInput.value = title;
            descriptionInput.value = description;
        } else {
            x.style.display = "none";
        }

    }
</script>

<!-- HTML form for editing data -->
<div id="myDIV" style="display: none;  height: auto;">
<div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">

        <br>
        <label for="course_name">Course Name:</label>
        <input type="text" id="course_name" class="form-control" name="course_name">
        <br>
        <label for="title">Title:</label>
        <input type="text" id="title" class="form-control"name="title">
        <br>
        <label for="description">Description:</label>
        <input type="text" id="description" class="form-control" name="description">
        <br>
        <label for="answer">Answer:</label>
<textarea id="answer" class="form-control" name="answer" rows="4" cols="50"></textarea>
        <br>
        <label for="answer">Submitted Date:</label>
        <input type="date" id="date" class="form-control" name="submitted_date">
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
</div>
    </form>
</div>
<div class="col-md-3"></div>
</div></div>
</div>
</div>
</div> </div>
</body>

</html>
<div class="footer1">
        <!-- Footer content here -->
        <?php include 'footer.php'; ?>
    </div>

