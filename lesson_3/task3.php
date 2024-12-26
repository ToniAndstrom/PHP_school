<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration</title>

</head>

<body>

    <?php

    $name = $email = $password1 = $password2 = $gender = '';


    // Handle the form submit

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];

        $email = $_POST['email'];

        $password1 = $_POST['password1'];

        $password2 = $_POST['password2'];

        $gender = $_POST['gender'];


        if ($name == '' or $email == '' or $password1 == '' or $password2 == '') {

            echo "Please fill all the fields.";
        } elseif ($_POST['password1'] != $_POST['password2']) {

            echo "Passwords don't match.";
        } elseif (!isset($_POST["gender"])) {
            echo "Please fill all the fields.";
        } else {
            if ($_POST["gender"] == "other") {
                $gender = $_POST["fillin"];
            } else {
                $gender = $_POST["gender"];
            }

            // Save the values to the database...

            echo "Welcome ", $_POST['name'];
            echo "gender is ", $gender;
            // To do: print the values of variables $name, $email, $password1 and $gender here on the page

        }
    }


    ?>

    <form action="task3.php" method="post">

        Name:

        <input name="name" value="<?php echo $name; ?>" /><br>

        Email:

        <input name="email" type="email" value="<?php echo $email; ?>" /><br>

        Password:

        <input name="password1" type="password" value="<?php echo $password1; ?>" /><br>

        Repeat password:

        <input name="password2" type="password" value="<?php echo $password2; ?>" /><br>


        Gender:<br>

        <input name="gender" type="radio" value="male" label="male">Male<br>
        <input name="gender" type="radio" value="female">Female<br>
        <input name="gender" type="radio" value="other">Other<br>
        <input name="fillin"><br>


        <br>
        <button type="submit">Register</button>

        <!--

            TODO:

            Add radio buttons for gender information

            male female other (+ fill in text field)

            if the user selected other handle the fill in field.

            In any case save the gender info to variable $gender as a string. 

        -->

    </form>
    <?php echo "name is : $name , email is : $email , password1 is : $password1 , password2 is : $password2 , gender is : $gender"; ?>
</body>

</html>