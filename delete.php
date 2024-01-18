<?php
include 'db.php';

$id = $_GET['id'];

// Get the current maximum ID in the table
$getMaxIdQuery = "SELECT MAX(id) AS max_id FROM user";
$result = $conn->query($getMaxIdQuery);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $maxId = $row['max_id'];
} else {
    $maxId = 0;
}

// Delete the user by ID
$sql = "DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully";

    // Reset the auto-increment counter if the deleted user had the highest ID
    if ($id == $maxId) {
        $resetAutoIncrement = "ALTER TABLE user AUTO_INCREMENT = 1";
        if ($conn->query($resetAutoIncrement) === TRUE) {
            echo "Auto-increment counter reset successfully";
        } else {
            echo "Error resetting auto-increment counter: " . $conn->error;
        }
    }
} else {
    echo "Error deleting user: " . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();
?>
