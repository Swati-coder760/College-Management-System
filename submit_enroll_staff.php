<?php
     
    include 'db_connection.php';
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Collect form data
    $faculty_name = $_POST["faculty_name"];
    $usertype = $_POST["usertype"];
    $class_name = $_POST["class_name"];
    $subject_name = $_POST["subject_name"];
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
    
    $sql = "UPDATE faculty
    SET register_no = '$registrationNumber',class_name='$class_name',subject_name='$subject_name'
    WHERE faculty_name = '$faculty_name' AND usertype = '$usertype';
    ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: enroll_staff.php");
exit;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
   }

?>











