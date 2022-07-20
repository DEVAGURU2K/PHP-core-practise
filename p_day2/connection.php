<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "phplearning"; 

// Create connection
$conn = new  mysqli($host, $username, $password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connected successfully";
}
?>
