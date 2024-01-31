<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="Stilizimi.css">
</head>
<body >
    <header>
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li onclick="openLink('HomePage.php')"><a href="#">lajme</a></li>
                <li onclick="openLink('kronike.php')"><a href="#">kronikë</a></li>
                <li onclick="openLink('shendetesi.php')"><a href="#">shëndetësi</a></li>
                <li onclick="openLink('ekonomi.php')"><a href="#">ekonomi</a></li>
                <li onclick="openLink('kulture.php')"><a href="#">kulture</a></li>
                <li onclick="openLink('sport.php')"><a href="#">sport</a></li>
                <li onclick="openLink('LogInForm.php')"><a href="#">Sign In</a></li>
            </ul>
                <ul>
                    <li class="largo"><a href="HomePage.php"><strong>Ylldrit & Leutrim</strong></a></li>
                    <li class="hideOnMobile" onclick="openLink('HomePage.php')"><a href="#">lajme</a></li>
                    <li class="hideOnMobile" onclick="openLink('kronike.php')"><a href="#">kronikë</a></li>
                    <li class="hideOnMobile" onclick="openLink('shendetesi.php')"><a href="#">shëndetësi</a></li>
                    <li class="hideOnMobile" onclick="openLink('ekonomi.php')"><a href="#">ekonomi</a></li>
                    <li class="hideOnMobile" onclick="openLink('kulture.php')"><a href="#">kulture</a></li>
                    <li class="hideOnMobile" onclick="openLink('sport.php')"><a href="#">sport</a></li>
                    <li class="hideOnMobile" onclick="openLink('LogInForm.php')"><a href="#">Sign In</a></li>
                    <li class="butoni" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
        </nav>
        <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
                sidebar.style.display  = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
                sidebar.style.display  = 'none'
        }
        </script>
        <script src="script.js" ></script>
    </header>
    <div class="LogIn-Register">
        <form onsubmit="event.preventDefault();">
            <h1>Register</h1>
            <input type="text" placeholder="Emri" id="emri" required>
            <div class="error" id="emriError"></div>
            <input type="text" placeholder="Mbiemri" id="mbiemri" required>
            <div class="error" id="mbiemriError"></div>
            <input type="text" placeholder="Username" id="username" required>
            <div class="error" id="usernameError"></div>
            <input type="email" placeholder="E-mail" id="email" required>
            <div class="error" id="emailError"></div>
            <input type="password" placeholder="Password" id="password" required>
            <div class="error" id="passwordError"></div>
            <input type="password" placeholder="Confirm Password" id="conPass" required>
            <div class="error" id="conPasswordError"></div>
            <button type="submit" onclick="validateRegister()">Submit</button>
        </form>
        <script src="script.js"></script>
    </div>
</body>
</html>