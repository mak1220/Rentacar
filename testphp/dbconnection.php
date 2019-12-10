<?php
$servername = "localhost";
$username = "mak";
$password = "khan1220";
$dbname = 'classicmodels';

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "<script> window.alert('Connected successfully') </script>";
?>