<?php
session_start();
require_once('db_connect.php');

if (isset($_POST['submit'])) {
    $question = $_POST['question'];
    $correct_answer = $_POST['correct_answer'];
    $wrong_answer_1 = $_POST['wrong_answer_1'];
    $wrong_answer_2 = $_POST['wrong_answer_2'];
    $wrong_answer_3 = $_POST['wrong_answer_3'];
    $time_limit = $_POST['time_limit'];

    $query = "INSERT INTO questions (question, correct_answer, wrong_answer_1, wrong_answer_2, wrong_answer_3, time_limit) VALUES ('$question', '$correct_answer', '$wrong_answer_1', '$wrong_answer_2', '$wrong_answer_3', '$time_limit')";
    mysqli_query($connection, $query);

    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Start Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Start Quiz</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="question">Question:</label>
                <input type="text" class="form-control" id="question" placeholder="Enter question" name="question" required>
            </div>
            <div class="form-group">
                <label for="correct_answer">Correct Answer:</label>
                <input type="text" class="form-control" id="correct_answer" placeholder="Enter correct answer" name="correct_answer" required>
            </div>
            <div class="form-group">
                <label for="wrong_answer_1">Wrong Answer 1:</label>
                <input type="text" class="form-control" id="wrong_answer_1" placeholder="Enter wrong answer 1" name="wrong_answer_1" required>
            </div>
            <div class="form-group">
                <label for="wrong_answer_2">Wrong Answer 2:</label>
                <input type="text" class="form-control" id="wrong_answer_2" placeholder="Enter wrong answer 2" name="wrong_answer_2" required>
            </div>
            <div class="form-group">
                <label for="wrong_answer_3">Wrong Answer 3:</label>
                <input type="text" class="form-control" id="wrong_answer_3" placeholder="Enter wrong answer 3" name="wrong_answer_3" required>
            </div>
            <div class="form-group">
                <label for="time_limit">Time Limit (in minutes):</label>
                <input type="number" class="form-control" id="time_limit" placeholder="Enter time limit" name="time_limit" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Start Quiz</button>
        </form>
    </div>
</body>

</html>