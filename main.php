<?php

function runGame($name, $generateQuestion, $checkAnswer) {
    echo "Hello, $name!\n";

    for ($round = 1; $round <= 3; $round++) {
        list($question, $correctAnswer) = $generateQuestion();

        echo "Question: $question\n";
        echo "Your answer: ";
        $userAnswer = trim(fgets(STDIN));

        if ($checkAnswer($userAnswer, $correctAnswer)) {
            echo "Correct!\n";
        } else {
            echo "'$userAnswer' is wrong answer! ;(. Correct answer was '$correctAnswer'.\n";
            echo "Let's try again, $name!\n";
            return;
        }
    }

    echo "Congratulations, $name!\n";
}

?>