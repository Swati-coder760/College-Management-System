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

    <h2>Welcome to ADMIN dashboard</h2></div>
    <div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_enroll_student.php" method="post">
    <div class="form-group">

    <?php
// Assuming you have already established a database connection

// Query to retrieve class options from the database
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

// Check if query was successful
if ($result) {
    echo '<label for="firstname">Select your Name:</label>';
    echo '<select id="firstname" class="form-control"  name="firstname">';
    
    // Default option for the select field
    echo '<option value="">Select a Name</option>';

    // Loop through the results and generate option elements
    while ($row = mysqli_fetch_assoc($result)) {
        $firstname = $row['firstname'];
        echo "<option value=\"$firstname\">$firstname</option>";
    }

    echo '</select><br><br>';
} else {
    // Handle database query error
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>


        <label for="lastname">Lastname:</label><br>
        <input type="text" class="form-control" id="lastname" name="lastname" ><br><br>
        <label for="usertype">Usertype:</label><br>
        <input type="text" class="form-control" id="usertype" name="usertype" ><br><br>

        <label for="class">Select your class:</label>
<select id="class_name"  class="form-control" name="class_name">
  <option value="MCA">MCA</option>
  <option value="BCA">BCA</option>
</select>
<div class="row"></div><br>

        <input type="submit" value="Enroll Student">
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
        // $(document).ready(function(){
        //     $("#firstname").change(function(){
        //         var selectedFirstName = $(this).val();
        //         $.ajax({
        //             url: 'get_lastname.php',
        //             method: 'POST',
        //             data: { firstname: selectedFirstName },
        //             success: function(response){
        //                 $("#lastname").val(response);
        //             }
        //         });
        //     });
        // });

        $(document).ready(function(){
            $("#firstname").change(function(){
                var selectedFirstName = $(this).val();
                $.ajax({
                    url: 'get_user_info.php',
                    method: 'POST',
                    data: { firstname: selectedFirstName },
                    success: function(response){
                        var userData = JSON.parse(response);
                        $("#lastname").val(userData.lastname);
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