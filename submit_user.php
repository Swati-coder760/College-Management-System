<?php
     
    include 'db_connection.php';
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Collect form data
    $username = $_POST["username"];
    $usertype = $_POST["usertype"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $sql = "INSERT INTO user (username, password, firstname, lastname, email, phoneno, usertype) VALUES ('$username', '$password', '$firstname','$lastname', '$email', '$phoneno','$usertype')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: add_user.php");
exit;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

   $sql = "SELECT  * FROM user";
$result = $conn->query($sql);



if ($result->num_rows > 0) {

  echo '<table border = "1" cellspacing ="2" cellspacing="2">
  <tr> 
        <th> <font face="Arial">username</font> </th> <br>
        <th> <font face="Arial">password</font> </th> <br>
        <th> <font face="Arial">firstname</font> </th> <br>
        <th> <font face="Arial">lastname</font> </th> <br>
        <th> <font face="Arial">phoneno</font> </th> <br>
        <th> <font face="Arial">email</font> </th> <br>
        <th> <font face="Arial">usertype</font> </th> <br>
        

    </tr>';

  
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["id"]. " - Name: " . $row["username"]. " User Type:" . $row["usertype"]. "Email: " . $row["email"]. "<br>";

    // echo '<td> <font face="Arial">'.$row["id"].'</font> </td>';
 echo '<tr><td> <font face="Arial">'.$row["username"].'</font> </td><br>';
 echo '<td> <font face="Arial">'.$row["password"].'</font> </td><br>';
 echo '<td> <font face="Arial">'.$row["firstname"].'</font> </td></tr><br>';
 echo '<td> <font face="Arial">'.$row["lastname"].'</font> </td></tr><br>';
 echo '<td> <font face="Arial">'.$row["email"].'</font> </td></tr><br>';
 echo '<td> <font face="Arial">'.$row["phoneno"].'</font> </td></tr><br>';
 echo '<td> <font face="Arial">'.$row["usertype"].'</font> </td></tr><br>';


    }
} else {
  echo '</table>';
  echo "0 results";
}
$conn->close();
   }
?>











