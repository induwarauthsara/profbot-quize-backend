<!DOCTYPE html>
<html>

<head>
    <title>Quiz App - Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-5">Quiz App - Dashboard</h2>

        <!-- Add Question Form -->
        <div class="card">
            <div class="card-header">
                Add Question
            </div>
            <div class="card-body">
                <form method="post" action="add_question.php">
                    <div class="form-group">
                        <label for="question_text">Question Text:</label>
                        <textarea class="form-control" name="question_text" id="question_text" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="correct_answer">Correct Answer:</label>
                        <input type="text" class="form-control" name="correct_answer" id="correct_answer" required>
                    </div>
                    <div class="form-group">
                        <label for="wrong_answer_1">Wrong Answer 1:</label>
                        <input type="text" class="form-control" name="wrong_answer_1" id="wrong_answer_1" required>
                    </div>
                    <div class="form-group">
                        <label for="wrong_answer_2">Wrong Answer 2:</label>
                        <input type="text" class="form-control" name="wrong_answer_2" id="wrong_answer_2" required>
                    </div>
                    <div class="form-group">
                        <label for="wrong_answer_3">Wrong Answer 3:</label>
                        <input type="text" class="form-control" name="wrong_answer_3" id="wrong_answer_3" required>
                    </div>
                    <div class="form-group">
                        <label for="time_limit">Time Limit (in minutes):</label>
                        <input type="number" class="form-control" name="time_limit" id="time_limit" value="5" min="1" max="30" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Question</button>
                </form>
            </div>
        </div>

        <!-- Start Quiz Button -->
        <div class="card mt-5">
            <div class="card-body">
                <form method="post" action="start_quiz.php">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Start Quiz</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>