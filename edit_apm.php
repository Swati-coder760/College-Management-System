<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission process management</title>
</head>
<body>
    <h2>Admission process management</h2>
    <?php
      //Include database connection
      include 'db_connection.php';
      //check if the ecam ID is provided via GET parameter
      if(isset($_GET['id'])){
        //Get the use ID from GET parameter
        $id = $_GET['id'];
        //Retrieve ecam information from the database based on ID
        $sql = "SELECT * FROM newproject WHERE id = $id";
        $result =$conn->query($sql);
        
        if ($result->num_rows > 0){
            //Fetch ecam data
            $row = $result->fetch_assoc();
            $studentname = $row['studentname'];
            $coursename = $row['coursename'];
            $chectcoursefees= $row['checkcoursefees'];
            $semester=$row['semester'];

?>
      <form action="update_apm.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="studentname">student name:</label><br>
        <input type="text" id="studentname" name="studentname" value="<?php echo $studentname; ?>" required><br><br>

        <label for="coursename">course name:</label><br>
        <input type="text" id="coursename" name="coursename" value="<?php echo $coursename; ?>" required><br><br>

        <label for="checkcoursefees">check course fees:</label><br>
        <input type="text" id="checkcoursefees" name="checkcoursefees" value="<?php echo $checkcoursefees; ?>"required><br><br>

        <label for="semester">semester:</label><br>
        <input type="text" id="semester" name="semester" value="<?php echo $semester; ?>"required><br><br>
       
        <input type="submit" value="Update">

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
      
</body>
</html>