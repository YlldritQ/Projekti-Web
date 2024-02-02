<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Photo Gallery</title>
</head>

<body>
	<h1>Upload Photo</h1>
	<form action='upload.php' method='post' enctype='multipart/form-data'>
		Select photo to upload:
		<input type='file' name='photo' id='photo' accept='image/*'>
		<input id='hideButton' type='submit' value='Upload Photo' name='submit'>
	</form>
</body>

</html>