<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>