<?php
$servername = "localhost";
$db_username = "root";
$password = "";
$dbname = "wellness";

// Create connection
$conn = new mysqli($servername, $db_username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
