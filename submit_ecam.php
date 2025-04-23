<?php
     
    include 'db_connection.php';
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Collect form data
    $indooractivity = $_POST["indooractivity"];
    $outdooractivity = $_POST["outdooractivity"];
    $ex_date = $_POST["ex_date"];

    $sql = "INSERT INTO ecam (indooractivity, outdooractivity, ex_date) VALUES ('$indooractivity', '$outdooractivity', '$ex_date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

   $sql = "SELECT  * FROM ecam";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  
  echo '<table border = "1" cellspacing ="2" cellspacing="2">
  <tr> 
        <th> <font face="Arial">indooractivity</font> </th> <br>
        <th> <font face="Arial">outdooractivity</font> </th> <br>
        <th> <font face="Arial">ex_date</font> </th> <br>
    </tr>';

  
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["id"]. " - Name: " . $row["username"]. " User Type:" . $row["usertype"]. "Email: " . $row["email"]. "<br>";

    // echo '<td> <font face="Arial">'.$row["id"].'</font> </td>';
 echo '<tr><td> <font face="Arial">'.$row["indooractivity"].'</font> </td>';
 echo '<td> <font face="Arial">'.$row["outdooractivity"].'</font> </td>';
 echo '<td> <font face="Arial">'.$row["ex_date"].'</font> </td></tr><br>';

    }
} else {
  echo '</table>';
  echo "0 results";
}
$conn->close();
   }
?>











