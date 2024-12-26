<?php
$a = [5, 6, 3, 4, 3, 7, 9, 9, 12];
$b = $a;
//$c is always true
$c = sort($b);

print var_dump($b);

print var_dump($c);