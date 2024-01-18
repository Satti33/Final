<?php
include 'db.php';

$name = $_POST['name'];
$rollno = $_POST['rollno'];

// Check if the roll number already exists
$checkIfExists = "SELECT * FROM user WHERE rollno = '$rollno'";
$result = $conn->query($checkIfExists);

if ($result->num_rows > 0) {
    // Roll number already exists, display an error message using JavaScript
    echo '<script>alert("Error: Roll number already exists in the database.");</script>';
} else {
    // Roll number doesn't exist, proceed with the insertion
    $sql = "INSERT INTO user (name, rollno) VALUES ('$name', '$rollno')";

    if ($conn->query($sql) === TRUE) {
        echo "User added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

// Redirect using JavaScript after displaying the message
echo '<script>window.location = "index.php";</script>';
exit();
?>
