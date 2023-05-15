<?php
// Start session
session_start();

// Check if the user has answered the quiz
if (isset($_SESSION['user_answer'])) {
    $userAnswer = $_SESSION['user_answer'];

    // Connect to the database
    $connection = mysqli_connect("localhost", "username", "password", "quiz_app");

    // Insert the user's answer to the database
    $sql = "INSERT INTO quiz_results (user_answer) VALUES ('$userAnswer')";
    mysqli_query($connection, $sql);

    // Get the latest quiz question from the database
    $sql = "SELECT * FROM quiz_questions ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $correctAnswer = $row['correct_answer'];

    // Check if the user's answer is correct
    if ($userAnswer == $correctAnswer) {
        echo "<h1>Quiz Ended</h1>";
        echo "<h2>Correct Answer: " . $correctAnswer . "</h2>";
        echo "<h3>First Correctly Answered Person: " . $_SESSION['username'] . "</h3>";
    } else {
        echo "<h1>Quiz Ended</h1>";
        echo "<h2>Correct Answer: " . $correctAnswer . "</h2>";
        echo "<h3>Better luck next time, " . $_SESSION['username'] . "</h3>";
    }

    // Destroy the session
    session_destroy();
} else {
    header("Location: index.php");
}
