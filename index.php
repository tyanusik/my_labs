<?php

require_once 'main.php';

echo "Welcome to the Brain Games!\n";
echo "May I have your name? ";
$name = trim(fgets(STDIN));

echo "Hello, $name!\n";
echo "Which game would you like to play?\n";
echo "1. Greatest Common Divisor (GCD)\n";
echo "2. Geometric Progression\n";

$choice = trim(fgets(STDIN));

switch ($choice) {
    case '1':
        require_once 'games/leastCommonMultiple.php';
        runGame($name, 'generateLCDQuestion', 'checkLCDAnswer');
        break;
    case '2':
        require_once 'games/geomProgression.php';
        runGame($name, 'generateProgressionQuestion', 'checkProgressionAnswer');
        break;
    default:
        echo "Invalid choice. Please try again.\n";
        break;
}

?>