<?php
session_start();

// Check if the uploaded file is an image
if (isset($_POST["submit"])) {
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
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
?>
<!DOCTYPE html>
<html>

<head>
	<title>Photo Gallery</title>
</head>

<body>
	<h1>Upload Photo</h1>
	<form action='<?php echo $_SERVER["PHP_SELF"]?>' method='post' enctype='multipart/form-data'>
		Select photo to upload:
		<input type='file' name='photo' id='photo' accept='image/*'>
		<input id='hideButton' type='submit' value='Upload Photo' name='submit'>
	</form>
</body>
</html>