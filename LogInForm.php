<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="Stilizimi.css">
</head>
<body class="LogIn-Register">
    <form onsubmit="event.preventDefault();">
        <h1>Log In</h1>
        <input type="text" placeholder="Username" id="username" required>
        <div class="error" id="usernameError"></div>
        <input type="password" placeholder="Password" id="password" required>
        <div class="error" id="passwordError"></div>
        <div class="forgot">
            <p onclick="openLink('RegisterForm.php')">Register</p>
        </div>
        <button type="submit" onclick="validateLogIn()">Log In</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
