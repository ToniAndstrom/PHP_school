<?php

/* Task 2: Sum of the series

Make a program that calculates and prints the sum of the series from $number1 to $number2. Give values of your choosing to these variables (in real-life case they’d most likely come from a form in web page). E.g. if the values are 1 and 5, the program should calculate 1+2+3+4+5 and print the value 15.

Extra challenge: Print the calculation too. You may need a conditional statement (if) to avoid printing an extra plus sign to the end. */


$number1 = 1;
$number2 = 5;
$sum = 0;
$result = "";


for ($number1; $number1 <= $number2; $number1++) {
    $sum += $number1;
    if ($number1 == 5) {
        $result .= $number1;
    } else {
        $result .= $number1 . "+";
    }

}
print $sum . "\n";
print $result;