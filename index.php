<?php
// Database configuration
$servername = "my-mysql";
$username = "root"; // Change this if your MySQL user is different
$password = "root";     // Change this to your MySQL password
$dbname = "BookReview";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My MySQL Connection Test</
