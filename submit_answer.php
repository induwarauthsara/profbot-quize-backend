<?php
// Include database connection
include 'db_connect.php';

// Get the selected answer from the AJAX request
$selectedAnswer = $_POST['selected_answer'];

// Get the correct answer for the current question from the database
$questionNumber = $_COOKIE['question_number'];
$query = "SELECT correct_answer FROM questions WHERE question_number = $questionNumber";
$result = mysqli_query($connection, $query);
$question = mysqli_fetch_assoc($result);
$correctAnswer = $question['correct_answer'];

// Check if the selected answer is correct
if($selectedAnswer == $correctAnswer){
	// If the answer is correct, update the results table with the user's name and end the quiz
	$userName = $_COOKIE['user_name'];
	$query = "INSERT INTO results (question_number, user_name) VALUES ($questionNumber, '$userName')";
	mysqli_query($connection, $query);
	echo "correct";
} else {
	// If the answer is incorrect, increment the question number and continue the quiz
	$questionNumber++;
	setcookie('question_number', $questionNumber);
	echo "incorrect";
}
