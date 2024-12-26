


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive numbers</title>
</head>
<body>

<!-- Maske a program which asks for a positive number from the user and prints all even positive numbers until to the number the user gave  -->

    <?php

    if (!is_numeric($_POST["number"])) {
        echo "It's not an number";
    }
    elseif ($_POST["number"] <= 0) {
        echo "It's not a postive integer";
    }
    else {
        for ($i = 0; $i < $_POST["number"]; $i = $i+ 2) {
            echo $i, "<br>";
            if($i > 100){
            break;
        }
        }
    }
    ?>
</body>
</html>
