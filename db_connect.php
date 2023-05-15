<?php
// Database connection configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_app";

// Create a connection to the database
$connection = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    // If the connection failed, output the error message
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
