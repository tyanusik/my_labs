<?php

// Функция для вычисления НОК двух чисел
function leastCommonMultiple($number1, $number2) {
    return abs($number1 * $number2) / leastCommonDivision($number1, $number2);
}

// Функция для вычисления НОД двух чисел (используется в lcm)
function leastCommonDivision($number1, $number2) {
    while ($number2 != 0) {
        $temp = $number2;
        $number2 = $number1 % $number2;
        $number1 = $temp;
    }
    return $number1;
}

// Функция для вычисления НОК трех чисел
function leastCommonMultipleOfThree($number1, $number2, $number3) {
    return leastCommonMultiple(leastCommonMultiple($number1, $number2), $number3);
}

// Приветствие и получение имени пользователя
echo "Welcome to the Brain Games!\n";
echo "May I have your name? ";
$name = trim(fgets(STDIN));
echo "Hello, $name!\n";

// Основной цикл игры
for ($i = 0; $i < 3; $i++) {
    // Генерация трех случайных чисел
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $num3 = rand(1, 100);

    // Вычисление правильного ответа
    $correctAnswer = leastCommonMultipleOfThree($num1, $num2, $num3);

    // Вывод вопроса пользователю
    echo "Find the smallest common multiple of given numbers.\n";
    echo "Question: $num1 $num2 $num3\n";
    echo "Your answer: ";
    $userAnswer = trim(fgets(STDIN));

    // Проверка ответа пользователя
    if ($userAnswer == $correctAnswer) {
        echo "Correct!\n";
    } else {
        echo "$userAnswer is wrong! The correct answer is $correctAnswer.\n";
        echo "Let's try again, $name !";
        exit;
    }
}

// Поздравление пользователя с победой
echo "Congratulations, $name!\n";

?>


