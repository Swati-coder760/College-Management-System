<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Management</title>
</head>
<body>
    <h2>Edit Student Information Management</h2>
    <?php
      //Include database connection
      include 'db_connection.php';
      //check if the sim ID is provided via GET parameter
      if(isset($_GET['id'])){
        //Get the use ID from GET parameter
        $id = $_GET['id'];
        //Retrieve sim information from the database based on ID
        $sql = "SELECT * FROM sim WHERE id = $id";
        $result =$conn->query($sql);
        
        if ($result->num_rows > 0){
            //Fetch ecam data
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $address = $row['address'];
            $currentcourse = $row['currentcourse'];
            $previouscourse = $row['previouscourse'];
            $phoneno = $row['phoneno'];
            $email = $row['email'];
            $document = $row['document'];

          

?>
      <form action="update_sim.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="<?php echo $address; ?>" required><br><br>

        <label for="currentcourse">Current Course:</label><br>
        <input type="text" id="currentcourse" name="currentcourse" value="<?php echo $currentcourse; ?>"required><br><br>

        <label for="previouscourse">Previous Course:</label><br>
        <input type="text" id="previouscourse" name="previouscourse" value="<?php echo $previouscourse; ?>"required><br><br>
        
        <label for="phoneno">Phone NO:</label><br>
        <input type="text" id="phoneno" name="phoneno" value="<?php echo $phoneno; ?>"required><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>"required><br><br>

        <label for="document">Document:</label><br>
        <input type="text" id="document" name="document" value="<?php echo $document; ?>"required><br><br>

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