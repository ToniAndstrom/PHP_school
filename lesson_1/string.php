<?php
$foo = "This is a string";
$bar = "an another string";
print($bar);
print strtoupper($foo);
print strtolower($foo);
$baz = str_replace('This', 'That', $foo);
print($baz);