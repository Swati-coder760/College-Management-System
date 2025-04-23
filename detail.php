<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>
<body>
    <h2>Courses offered by USBM </h2>
    <a href="course.php">Add new course</a>
    <br><br>

<?php

include 'db_connection.php';
$sql= "select * from course";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
     echo"<table border= '1'>";
     echo "<tr>
     <th> ID </th> <th> Course  </th> <th> Fees </th> <th> Eligibility </th> <th> Action </th>
     </tr>" ;
     while ($row = $result->fetch_assoc()){

echo "<tr>";
echo"<td>" . $row['course']. "</td>" ;
echo"<td>" . $row['Fees']. "</td>" ;
echo"<td>" . $row['Eligibility']. "</td>" ;
echo"<td>" . $row['Action']. "</td>" ;
echo "<td>";
echo "<a href='edit_user.php?id=" . $row["id "]. "'>Edit</a> | " ;
echo "<a href='delete_user.php?id=" . $row["id "]. "'onclick='return confirm(\"Are you sure you want to delete this course?\")'>Delete</a>";
echo "</td>";
echo "</tr>";
     }
     echo "</table>"
;
} else {
     echo " 0 results" ;

}

$conn->close();

 

    

?>
</body>
</html>