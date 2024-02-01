<?php
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if the uploaded file is an image
if (isset($_POST["submit"])) {
    try {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $_SESSION["isUploaded"] = true;
                header("Location: insertNews.php");
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    } catch (ValueError $e) {
        echo "No image inserted!";
    }
}
