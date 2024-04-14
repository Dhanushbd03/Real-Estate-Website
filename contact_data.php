<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
$fetchQuery = "SELECT * FROM properties";
$result = mysqli_query($con, $fetchQuery);
$properties = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Include the config file
include 'config.php';

if (session_status() == PHP_SESSION_ACTIVE) {
    // Check if the user is logged in
    if (isset($_SESSION['uid'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sender = $_POST["sender"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Insert data into the database
            $sql = "INSERT INTO contact_data (sender, email, message) VALUES ('$sender', '$email', '$message')";

            if ($con->query($sql) === TRUE) {
                echo '<script>alert("Thank You for Contacting us. We will be in touch soon.");';
                echo 'window.location.href = "index.php";</script>';
                exit; // Add exit to prevent further execution of PHP code
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    } else {
        // Redirect to the login page if the user is not logged in
        echo '<script>alert("You need to log in first.");';
        echo 'window.location.href = "login.php";</script>';
        exit; // Add exit to prevent further execution of PHP code
    }
}

// Close the database connection
$con->close();
?>