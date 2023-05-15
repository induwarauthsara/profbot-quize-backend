$(document).ready(function() {
    // Initialize variables
    var questionNumber = 1;
    var timeLimit = 300; // default time limit is 5 minutes
    var timer = setInterval(function() {
        timeLimit--;
        $("#timer").text(timeLimit + " seconds left");
        if (timeLimit <= 0) {
            clearInterval(timer);
            submitAnswer();
        }
    }, 1000);

    // Load the first question
    loadQuestion();

    // Handle the submission of the user's answer
    $("#submit-answer").click(function() {
        submitAnswer();
    });

    function loadQuestion() {
        $.ajax({
            type: "GET",
            url: "get_question.php",
            data: { question_number: questionNumber },
            success: function(data) {
                $("#question").html(data.question);
                $("#answer-1").html(data.answer_1);
                $("#answer-2").html(data.answer_2);
                $("#answer-3").html(data.answer_3);
                $("#answer-4").html(data.answer_4);
            },
            error: function() {
                alert("Error loading question.");
            }
        });
    }

    function submitAnswer() {
        var selectedAnswer = $("input[name='answer']:checked").val();
        if (selectedAnswer) {
            $.ajax({
                type: "POST",
                url: "submit_answer.php",
                data: { selected_answer: selectedAnswer },
                success: function(data) {
                    if (data == "correct") {
                        clearInterval(timer);
                        alert("Congratulations! You answered the question correctly.");
                        window.location.href = "results.php";
                    } else {
                        alert("Sorry, your answer is incorrect.");
                        questionNumber++;
                        loadQuestion();
                    }
                },
                error: function() {
                    alert("Error submitting answer.");
                }
            });
        } else {
            alert("Please select an answer.");
        }
    }
});