<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='transfer.php' method='post'>
            <h1>Title: </h1>
            <br>
            <input type="text" name="title" required>
        <h1>Photo Gallery</h1>
        <div>
            <?php
            $files = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($files as $file) {
                echo "<a href='$file' target='_blank'><img src='$file' alt='Photo'></a>";
            }
            $_SESSION["imgLink"] = $files[0];
            ?>
        </div>
        <div>
            <h1>Description: </h1>
            <br>
            <input type="text" name="description" required>
        </div>
        <div>
            <h1>Permbajtja: </h1>
            <br>
            <input type="text" name="permbajtja" required>
        </div>
        <div>
            <h1>Video-Link: </h1>
            <br>
            <input type="text" placeholder="Can Be Empty" name="videoLink">
        </div>
        <div>
            <h1>Kategoria: </h1>
            <br>
            <input type="text" name="kategoria">
        </div>
        <input type="submit" name="Add">
    </form>
</body>

</html>