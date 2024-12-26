<?php

/*Task 2: A bit more challenge

Make a program that prints all positive numbers that are smaller than 100 and even, in this order: 2 98 4 96 6 94... Print result in one line.

Hints: The counter you want to increase by two each round is added to 0 and subtracted from 100, so e.g. $counter . " " . (100 – $counter). In order to print everything in same line, build a string in the loop and print it after the loop.  */
$evenNumbers = 2;
$result = "";
while ( $evenNumbers <100 ) {
    $result.= $evenNumbers. " " . (100 -$evenNumbers) . " ";
    $evenNumbers +=2;
}
print $result;
