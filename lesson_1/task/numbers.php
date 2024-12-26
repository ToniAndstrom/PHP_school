<?php
$number = "45.7";
print is_numeric($number);
print "\n";
print is_int($number);
print "\n";
print $number + 5;
print "\n";
print (int) $number + 5;
print "\n";
$minutes = 63;
$hours = (int) ($minutes / 60);
$extra_minutes = $minutes % 60;
print "$hours h $extra_minutes mins";
