<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$rollno = $_POST['rollno'];

$sql = "UPDATE user SET name='$name', rollno='$rollno' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "User updated successfully";
} else {
    echo "Error updating user: " . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();
?>
