<?php
    // Include database connection
    include'db_connection.php';
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

    <h2 style="text-align: center;">Welcome to ADMIN dashboard</h2>
    <div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_enroll_staff.php" method="post">
    <div class="form-group">

    <?php
// Assuming you have already established a database connection

// Query to retrieve class options from the database
$query = "SELECT * FROM faculty";
$result = mysqli_query($conn, $query);

// Check if query was successful
if ($result) {
    echo '<label for="firstname">Select your Name:</label>';
    echo '<select id="faculty_name" class="form-control"  name="faculty_name">';
    
    // Default option for the select field
    echo '<option value="">Select a Name</option>';

    // Loop through the results and generate option elements
    while ($row = mysqli_fetch_assoc($result)) {
        $faculty_name = $row['faculty_name'];
        echo "<option value=\"$faculty_name\">$faculty_name</option>";
    }

    echo '</select><br><br>';
} else {
    // Handle database query error
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>


        <label for="usertype">Usertype:</label><br>
        <input type="text" class="form-control" id="usertype" name="usertype" ><br><br>
        <label for="class">Select your Class:</label>
<select id="class_name"  class="form-control" name="class_name">
  <option value="MCA">MCA</option>
  <option value="BCA">BCA</option>
</select>
<br>
<br>

        <label for="class">Select your Subject:</label>
<select id="subject_name"  class="form-control" name="subject_name">
  <option value="DS">DS</option>
  <option value="DSA">DAA</option>
  <option value="PHP">PHP</option>
</select>
<br>
<div class="row"></div><br>

        <input type="submit" value="Enroll Staff">
    </div>
    </div>
    <div class="col-md-3"></div>
</div>
    </div>
    </form>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        
        $(document).ready(function(){
            $("#faculty_name").change(function(){
                var faculty_name = $(this).val();
                $.ajax({
                    url: 'get_faculty_info.php',
                    method: 'POST',
                    data: { faculty_name: faculty_name },
                    success: function(response){
                        var userData = JSON.parse(response);
                        $("#usertype").val(userData.usertype);
                    }
                });
            });
        });

    </script>

</body>

<?php
    // Include database connection
    include'footer.php';
?>
</html>    