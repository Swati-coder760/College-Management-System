<?php
// Include database connection
include 'db_connection.php';

// Check if the sim ID is provided via GET parameter
if (isset($_GET['id'])) {
    // Get the sim ID from GET parameter
    $id = $_GET['id'];

    // Delete the sim from the database
    $sql = "DELETE FROM sim WHERE id = $id";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "User ID not provided.";
}

// Close connection
$conn->close();
?>



