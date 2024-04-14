<?php
$servername = "localhost";
$username = "id21952159_root";
$password = "Dhanush@2024";
$database = "id21952159_realestate";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
?>