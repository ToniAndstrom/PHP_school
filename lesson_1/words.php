<?php
$words = [];
$words[13] = 'Business';
$words["42"] = 'College';
$words["Helsinki"] = 'Helsinki';

$words[5] = 'Pasila';
unset($words[5]);
print var_dump($words);