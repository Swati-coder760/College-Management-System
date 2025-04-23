<?php
    // Include database connection
    include'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="style.css">
<style>
            .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 100px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .widget h2 {
            margin-top: 0;
        }

    </style>
</head>
<body>
<?php
    // Include database connection
    include'sidebar.php';
    include'header.php';
?> 
    <div class="dashboard">
    <div class="widget">

    <h2>Welcome to Student  Dahboard</h2></div>
    <div class="content">
    <div class="widget">
    <?php
    // Include database connection
    include 'db_connection.php';

    // Select data from the user table
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Department</th><th>Admission Year</th><th>Date Of Admission</th><th>G Contact No</th><th>Photo</th><th>Stream</th><th>Actions</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["first_name"]. "</td>";
            echo "<td>". $row["last_name"]. "</td>";
            echo "<td>". $row["email"]. "</td>";
            echo "<td>". $row["department"]. "</td>";
            echo "<td>". $row["admission_year"]. "</td>";
            echo "<td>". $row["date_of_admission"]. "</td>";
            echo "<td>". $row["guardian_contact_number"]. "</td>";
            echo "<td>". $row["student_photo"]. "</td>";
            echo "<td>". $row["department"]. "</td>";
            echo "<td>";
            echo "<a href='edit_user.php?id=". $row["id"]. "'>Edit</a> ";
            echo "<a href='delete_user.php?id=". $row["id"]. "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>

        </div>
    </div>
</div>
</body>

<?php
    // Include database connection
    include'footer.php';
?>
</html>    