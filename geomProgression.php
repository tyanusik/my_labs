<?php

function generateProgression($length, $start, $ratio) {
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start * pow($ratio, $i);
    }
    return $progression;
}

function hideElement($progression) {
    $hiddenIndex = rand(0, count($progression) - 1);
    $hiddenValue = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';
    return [$progression, $hiddenValue, $hiddenIndex];
}

function playGame($name) {
    echo "Hello, $name!\n";
    echo "What number is missing in the progression?\n";

    for ($round = 1; $round <= 3; $round++) {
        $length = rand(5, 10);
        $start = rand(1, 10);
        $ratio = rand(2, 5);

        $progression = generateProgression($length, $start, $ratio);
        list($question, $correctAnswer, $hiddenIndex) = hideElement($progression);

        echo "Question: " . implode(' ', $question) . "\n";
        echo "Your answer: ";
        $userAnswer = (int)trim(fgets(STDIN));

        if ($userAnswer === $correctAnswer) {
            echo "Correct!\n";
        } else {
            echo "'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n";
            echo "Let's try again, $name!\n";
            return;
        }
    }

    echo "Congratulations, $name!\n";
}

echo "Welcome to the Brain Games!\n";
echo "May I have your name? ";
$name = trim(fgets(STDIN));

playGame($name);

?>