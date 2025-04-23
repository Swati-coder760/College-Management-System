<html>
<body>
<?php
include 'db_connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST") {
    //Collect from Data
    $course = $_POST["Course"];
    $fees = $_POST["Fees"];
    $eligibility = $_POST["Eligibility"];
    $action = $_POST["Action"];

     echo"<h2>Submitted data</h2>";
     echo"<p><strong>course:</strong>  $course</p>";
     echo "<p><strong>fees:</strong> $fees</p>";
    echo "<p><strong>eligibility:</strong> $eligibility</p>";
    echo "<p><strong>action:</strong> $action </p>";

    $sql = "INSERT INTO course (Course, Fees, Eligibility,Action)
  VALUES ('$course', '$fees', '$eligibility','$action')";
  
  if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $sql = "SELECT * FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1" cellspacing="2" cellpadding="2"> 
    <tr> 
        <th> <font face="Arial">id</font> </th> 
        <th> <font face="Arial">course</font> </th> 
        <th> <font face="Arial">fees</font> </th> 
        <th> <font face="Arial">eligibility</font> </th> 
        <th> <font face="Arial">action</font> </th>

    </tr>';
  
    // output data of each row
  while($row = $result->fetch_assoc()) {

   
 //   echo "id: " . $row["id"]. " - Name: " . $row["username"]. "age " . $row["age"]. "<br>";




 echo '<tr><td> <font face="Arial">'.$row["id"].'</font> </td>';
 echo '<td> <font face="Arial">'.$row["Course"].'</font> </td>';
 echo '<td> <font face="Arial">'.$row["Fees"].'</font> </td>';
 echo '<td> <font face="Arial">'.$row["Eligibility"].'</font> </td>';
 echo '<td> <font face="Arial">'.$row["Action"].'</font> </td>';
  }



  echo '</tr><br></table>';
} else {
  echo "0 results";
}
  $conn->close();
    
}
?>
</body>
</html>