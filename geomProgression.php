<?php


function generateProgressionQuestion() {
    $length = rand(5, 10);
    $start = rand(1, 10);
    $ratio = rand(2, 5);
    $progression = generateProgression($length, $start, $ratio);
    $hiddenIndex = rand(0, $length - 1);
    $hiddenValue = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';
    $question = implode(' ', $progression);
    return [$question, $hiddenValue];
}

function checkProgressionAnswer($userAnswer, $correctAnswer) {
    return (int)$userAnswer === $correctAnswer;
}

function generateProgression($length, $start, $ratio) {
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start * pow($ratio, $i);
    }
    return $progression;
}

?>