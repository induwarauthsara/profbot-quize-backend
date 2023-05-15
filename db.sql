CREATE DATABASE quiz_app;

USE quiz_app;

CREATE TABLE quiz_questions (
    id INT(11) NOT NULL AUTO_INCREMENT,
    question TEXT NOT NULL,
    correct_answer TEXT NOT NULL,
    wrong_answer_1 TEXT NOT NULL,
    wrong_answer_2 TEXT NOT NULL,
    wrong_answer_3 TEXT NOT NULL,
    time_limit INT(11) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE quiz_results (
    id INT(11) NOT NULL AUTO_INCREMENT,
    user_answer TEXT NOT NULL,
    PRIMARY KEY (id)
);
