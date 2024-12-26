<?php
// if the form has been sent, add the new verse to the file
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["new-verse"])) {
        $text = $_POST["new-verse"];
        if (!empty($text)) {
            $writefile = fopen("poem.txt", "a");
            fwrite($writefile, $text);
            fclose($writefile);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a poem</title>
</head>

<body>
    <h3>Write a poem</h3>

    <div id="poem">
        <?php
        // read the poem from file and display here
        $poem = file_get_contents("poem.txt");
        print $poem;
        ?>
    </div>

    <form action="write_poem.php" method="post">
        <textarea name="new-verse" rows="3" cols="50"></textarea><br>
        <input type="submit" name="add-to-poem" value="Add verse">
    </form>

</body>

</html>