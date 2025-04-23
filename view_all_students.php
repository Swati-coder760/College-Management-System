<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Students</title>
</head>
<body>

<h2>View Students</h2>

<?php
include 'db_connection.php';
// SQL query to retrieve student information
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h3>Student ID: " . $row["student_id"] . "</h3>";
        echo "<p>Full Name: " . $row["first_name"] . " " . $row["last_name"] . "</p>";
        echo "<p>Date of Birth: " . $row["date_of_birth"] . "</p>";
        echo "<p>Gender: " . $row["gender"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Contact Number: " . $row["contact_number"] . "</p>";
        echo "<p>Address: " . $row["address"] . "</p>";
        echo "<p>Department: " . $row["department"] . "</p>";
        echo "<p>Admission Year: " . $row["admission_year"] . "</p>";
        echo "<p>Batch: " . $row["batch"] . "</p>";
        echo "<p>Emergency Contact Person: " . $row["emergency_contact_person"] . "</p>";
        echo "<p>Emergency Contact Number: " . $row["emergency_contact_number"] . "</p>";
        echo "<p>Guardian's Name: " . $row["guardian_name"] . "</p>";
        echo "<p>Guardian's Email: " . $row["guardian_email"] . "</p>";
        echo "<p>Guardian's Contact Number: " . $row["guardian_contact_number"] . "</p>";
        echo "<p>Student Photo: <img src='" . $row["student_photo"] . "' alt='Student Photo'></p>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
