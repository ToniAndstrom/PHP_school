<?php


/*Task 1: The basic case of looping through numbers

Make a program that prints all positive numbers that are odd and smaller than 100 starting from 1. (1 3 5 7 9 11...)*/

$oddNumbers = 1;
while ( $oddNumbers < 100 ){
    
    print $oddNumbers . " ";
    $oddNumbers +=2;
}


