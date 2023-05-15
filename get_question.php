<?php
// Include database connection
include 'db_connect.php';

// Get the question number from the AJAX request
$questionNumber = $_GET['question_number'];

// Retrieve the question and answer options from the database
$query = "SELECT * FROM questions WHERE question_number = $questionNumber";
$result = mysqli_query($connection, $query);
$question = mysqli_fetch_assoc($result);

// Encode the question and answer options as JSON and return it to the AJAX request
echo json_encode($question);
