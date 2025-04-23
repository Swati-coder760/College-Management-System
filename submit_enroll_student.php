<?php
     
    include 'db_connection.php';
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Collect form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $usertype = $_POST["usertype"];
    $class_name = $_POST["class_name"];
    //echo $class_name;

    function generateRandomString($length = 6) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
    
    // Generate a unique registration number
    $registrationNumber = 'REG' . date('Ymd') . generateRandomString(4);
    
    //echo "Generated Registration Number: $registrationNumber";
    
    $sql = "UPDATE user
    SET register_no = '$registrationNumber',class_name='$class_name'
    WHERE firstname = '$firstname' AND lastname = '$lastname'AND usertype = '$usertype';
    ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: enroll_student.php");
exit;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
   }

?>











