<?php

function generateLCDQuestion() {
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $num3 = rand(1, 100);
    $question = "$num1 $num2 $num3";
    $correctAnswer = leastCommonMultipleOfThree($num1, $num2, $num3);
    return [$question, $correctAnswer];
}

function leastCommonMultiple($number1, $number2) {
    return abs($number1 * $number2) / greatCommonDivision($number1, $number2);
}

function leastCommonMultipleOfThree($number1, $number2, $number3) {
    return leastCommonMultiple(leastCommonMultiple($number1, $number2), $number3);
}

function checkLCDAnswer($userAnswer, $correctAnswer) {
    return (int)$userAnswer === $correctAnswer;
}

function greatCommonDivision($number1, $number2) {
    return $number2 ? greatCommonDivision($number2, $number1 % $number2) : $number1;
}

?>


