<?php
     
    include 'db_connection.php';
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Collect form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $currentcourse = $_POST["currentcourse"];
    $previouscourse = $_POST["previouscourse"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $document = $_POST["document"];

    $sql = "INSERT INTO sim (name, address, currentcourse, previouscourse, phoneno, email, document) VALUES ('$name', '$address', '$currentcourse','$previouscourse', '$phoneno', '$email','$document')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

   $sql = "SELECT  * FROM sim";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo '<table border = "1" cellspacing ="2" cellspacing="2">
  <tr> 
        <th> <font face="Arial">name</font> </th> <br>
        <th> <font face="Arial">address</font> </th> <br>
        <th> <font face="Arial">currentcourse</font> </th> <br>
        <th> <font face="Arial">previouscourse</font> </th> <br>
        <th> <font face="Arial">phoneno</font> </th> <br>
        <th> <font face="Arial">email</font> </th> <br>
        <th> <font face="Arial">document</font> </th> <br>
        
    </tr>';

  
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " User Type:" . $row["usertype"]. "Email: " . $row["email"]. "<br>";

    // echo '<td> <font face="Arial">'.$row["id"].'</font> </td>';
    echo '<tr>';
    echo '<td> <font face="Arial">'.$row["name"].'</font> </td>';
    echo '<td> <font face="Arial">'.$row["address"].'</font> </td>';
    echo '<td> <font face="Arial">'.$row["currentcourse"].'</font> </td>';
    echo '<td> <font face="Arial">'.$row["previouscourse"].'</font> </td>';
    echo '<td> <font face="Arial">'.$row["phoneno"].'</font> </td>';
    echo '<td> <font face="Arial">'.$row["email"].'</font> </td>';
    echo '<td> <font face="Arial">'.$row["document"].'</font> </td>';
    echo '</tr>';
    }
} else {
  echo '</table>';
  echo "0 results";
}
$conn->close();
   }
?>











