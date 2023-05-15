const question = [{
        question: "Wich is large animal in the world?",
        answer: [
            { Text: "Shark", correct: false },
            { Text: "Blue whale", correct: true },
            { Text: "Elephant", correct: false },
            { Text: "Giraffe", correct: false },
        ],
    },
    {
        question: "wich is the largest desert in the world?",
        answer: [
            { Text: "Kalari", correct: false },
            { Text: "Gobi", correct: false },
            { Text: "Sahara", correct: false },
            { Text: "Antartica", correct: true },
        ],
    },
    {
        question: "oyata pissuda?",
        answer: [
            { Text: "na", correct: false },
            { Text: "wenna ba", correct: false },
            { Text: "ow", correct: true },
            { Text: "pissuda", correct: false },
        ],
    },
    {
        question: "Badaginida?",
        answer: [
            { Text: "ow", correct: false },
            { Text: "na", correct: false },
            { Text: "naaaaaaaaaa", correct: false },
            { Text: "owwwwwwwww", correct: true },
        ],
    },
];
const questionElement = document.getElementById("question");
const answerButton = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz() {
    currentQuestionIndex = 0;
    score - 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion() {
    resetState();
    let currentQuestion = question[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + "." + currentQuestion.question;

    currentQuestion.answers.forEach((answer) => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendchild(button);
    });
}

function resetState() {
    nextButton.style.display = "none";
    while (answerButtons.firstChild) {
        answerButtons.removeChild(answerButtons.firstChild);
    }
}
startQuiz();