<?php
//include database connection
  include'db_connection.php';

//Process form data
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $studentname=$_POST["studentname"];
    $coursename=$_POST["coursename"];
    $checkcoursefees=$_POST["checkcoursefees"];
    $semester=$_POST["semester"];

    //SQL statement to insert data into user table
    $sql="INSERT INTO newproject(studentname,coursename,checkcoursefees,semester)VALUES('$studentname','$coursename','$checkcoursefees','$semester')";
    //Execute the query
    if($conn->query($sql)===TRUE){
        echo"New record created successfully";
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }

$sql="SELECT* FROM newproject";
$result=$conn->query($sql);
//check if there are any rows returned
if($result->num_rows > 0){
    //Output data of each row
    echo '<table border="1" cellspacing ="2" cellspacing="2">
    <tr>
       <th> <font face ="Arial">studentname</font> </th> <br>
       <th> <font face ="Arial">coursname</font> </th> <br>
       <th> <font face ="Arial">checkcoursefees</font> </th> <br>
       <th> <font face ="Arial">semester</font> </th> <br>
       </tr>';

    while($row=$result->fetch_assoc()){
        echo '<tr><td> <font face="Arial">'.$row["studentname"].'</font> </td>';
        echo '<td> <font face="Arial">'.$row["coursename"].'</font> </td>';
        echo '<td> <font face="Arial">'.$row["checkcoursefees"].'</font> </td>';
        echo '<td> <font face="Arial">'.$row["semester"].'</font> </td></tr><br>';
    }


}else{
    echo"</table>";
    echo"0 results";
}
//close connection
$conn->close();
}
?>