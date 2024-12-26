<?php

/* Task 3: A real-world example

If we just want to loop through numbers, a for loop is a natural choice instead of a while loop. A much more common real-world example in PHP would be looping through input from a file or a database. Download the PHP file and data file below to your PHP folder and see if you can complete the program. (Don’t worry, it’s just one line you need to write.) */



// open the file - if it fails, terminate the program
$myfile = fopen("datafile.txt", "r") or die("Unable to open file!");

// "feof" means "file: end-of-file", so loop while we haven't reached the end of file yet
while(!feof($myfile)) {
    // let's get one line and put it into the variable $line
    $line = fgets($myfile);
    // YOUR TURN! Print that line to console.
    print $line;
}
fclose($myfile);

