<?php
include('db_connect.php');

if (isset($_POST['submit'])) {
    $question = $_POST['question'];
    $correct_answer = $_POST['correct_answer'];
    $wrong_answer_1 = $_POST['wrong_answer_1'];
    $wrong_answer_2 = $_POST['wrong_answer_2'];
    $wrong_answer_3 = $_POST['wrong_answer_3'];

    $query = "INSERT INTO questions (question, correct_answer, wrong_answer_1, wrong_answer_2, wrong_answer_3) VALUES ('$question', '$correct_answer', '$wrong_answer_1', '$wrong_answer_2', '$wrong_answer_3')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header('Location: dashboard.php?status=success');
    } else {
        header('Location: dashboard.php?status=error');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question - Quiz App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center">Add Question</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="question">Question:</label>
                        <input type="text" class="form-control" id="question" name="question" required>
                    </div>
                    <div class="form-group">
                        <label for="correct_answer">Correct Answer:</label>
                        <input type="text" class="form-control" id="correct_answer" name="correct_answer" required>
                    </div>
                    <div class="form-group">
                        <label for="wrong_answer_1">Wrong Answer 1:</label>
                        <input type="text" class="form-control" id="wrong_answer_1" name="wrong_answer_1" required>
                    </div>
                    <div class="form-group">
                        <label for="wrong_answer_2">Wrong Answer 2:</label>
                        <input type="text" class="form-control" id="wrong_answer_2" name="wrong_answer_2" required>
                    </div>
                    <div class="form-group">
                        <label for="wrong_answer_3">Wrong Answer 3:</label>
                        <input type="text" class="form-control" id="wrong_answer_3" name="wrong_answer_3" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Add Question</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>