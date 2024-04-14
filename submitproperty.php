<?php
include("config.php");

// Start or resume the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['uid'])) {
    // Redirect to the login page if the user is not logged in
    echo '<script>alert("You need to log in first.");';
    echo 'window.location.href = "login.php";</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve property details from the form
    $title = $_POST["title"];
    $description = $_POST["description"];
    $status = $_POST["status"];

    // Handle file upload
    $image = file_get_contents($_FILES["image"]["tmp_name"]);
    $image = base64_encode($image);

    // Insert property into the database (modify the query based on your database structure)
    $insertQuery = "INSERT INTO properties (title, image, description, status) VALUES ('$title', '$image', '$description', '$status')";
    mysqli_query($con, $insertQuery);

    // Redirect to the main page after submission
    echo '<script>alert("Property uploaded successfully");';
                echo 'window.location.href = "index.php";</script>';
    exit();
}
?>