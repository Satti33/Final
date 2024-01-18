<?php
$sn = "localhost";
$un = "root";
$pwd = "";
$dbname = "student";

$conn = new mysqli($sn, $un, $pwd, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
