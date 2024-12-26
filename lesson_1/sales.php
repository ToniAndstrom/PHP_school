<?php
$sales2023 = [
    "Jan" => 123,
    "Fed" => 232,
    "Mar" => 132,
];

$sales2024 = [
    "Jan" => 10,
    "Feb" => null,
    "Mar" => null,
];

$sales = [2023 => $sales2023, 2024 => $sales2024];
var_dump($sales);
print $sales[2023]["Jan"];
print "\n";
$sales[2024]["Jan"] = $sales[2024]["Jan"] + 42;
print $sales[2024]["Jan"];


//Example 2

$gameboard = [['', '', ''], ['', '', ''], ['', '', '']];
$gameboard[0][0] = 'x';
$gameboard[0][1] = 'o';