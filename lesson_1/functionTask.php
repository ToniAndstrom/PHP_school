<?php
/*
write a function called checkAge,
which will return true if the age is equal or over 18
Otherwise it returns false.
*/




function checkAge($age)
{
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}



/*TASK 2
write a function called booToString,
which returns string value "true" ot "false"
based on boolean input. */




function booToString($x)
{
    if ($x == true) {
        return "true";
    }
    return "false";

}



//examples:

print "Age 25" . booToString(checkAge(25)) . "\n"; // This should return true
print "Age -2" . booToString(checkAge(-2)) . "\n"; // This should return false
print "Age 12" . booToString(checkAge(12)) . "\n"; // This should return false
print "Age 12345678" . booToString(checkAge(12345678)) . "\n"; // This should return true

