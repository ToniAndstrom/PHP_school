<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome</title>

</head>

<body>
    <?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];


    if ((empty($name)) || (empty($email)) || (empty($password1)) || (empty($password2))) {

        echo "You need to fill in all the brackets";
        echo "<a href =index2.html>Back to the form</a>";
    } elseif ($password1 != $password2) {
        echo "The passwords don't match";
        echo "<a href =index2.html>Back to the form</a>";
    } else {
        echo "Welcome" . $name . "!";
    }





    // Check that all the fields are filled and that the passwords match
    
    // If everything is ok show a personalized Welcome message
    
    // If something is wrong show a link back to the form
    
    ?>

</body>

</html>
