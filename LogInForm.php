<?php
session_start();
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST["LgInSubmit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $userRepo = new UserRepository;
    $user = $userRepo->getUserByUsername($username);
    if($user != null){
        if($user["password"] == $password){
            $_SESSION['isAdmin'] = $user["IsAdmin"];
            $_SESSION['ID'] = $user["ID"];
            $_SESSION['Username'] = $user["username"];
            echo "<script>alert('Log in u krye me sukses!'); window.location.href='index.php';</script>";
        }else{
            echo "<script>alert('Passwordi eshte gabim!');</script>";
        }
    }else{
        echo "<script>alert('Username nuk ekziston!');</script>";
    }
}
?>
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

<body>
    <header>
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg></a></li>
                <li onclick="openLink('index.php')"><a href="#">lajme</a></li>
                <li onclick="openLink('kronike.php')"><a href="#">kronikë</a></li>
                <li onclick="openLink('shendetesi.php')"><a href="#">shëndetësi</a></li>
                <li onclick="openLink('ekonomi.php')"><a href="#">ekonomi</a></li>
                <li onclick="openLink('kulture.php')"><a href="#">kulture</a></li>
                <li onclick="openLink('sport.php')"><a href="#">sport</a></li>
            </ul>
            <ul>
                <li class="largo"><a href="index.php"><strong>Ylldrit & Leutrim</strong></a></li>
                <li class="hideOnMobile" onclick="openLink('index.php')"><a href="#">lajme</a></li>
                <li class="hideOnMobile" onclick="openLink('kronike.php')"><a href="#">kronikë</a></li>
                <li class="hideOnMobile" onclick="openLink('shendetesi.php')"><a href="#">shëndetësi</a></li>
                <li class="hideOnMobile" onclick="openLink('ekonomi.php')"><a href="#">ekonomi</a></li>
                <li class="hideOnMobile" onclick="openLink('kulture.php')"><a href="#">kulture</a></li>
                <li class="hideOnMobile" onclick="openLink('sport.php')"><a href="#">sport</a></li>
                <li class="butoni" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg></a></li>
            </ul>
        </nav>
        <script>
            function showSidebar() {
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display = 'flex'
            }

            function hideSidebar() {
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display = 'none'
            }
        </script>
    </header>
    <div class="LogIn-Register">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" onsubmit="return validateLogIn()">
            <h1>Log In</h1>
            <input type="text" placeholder="Username" id="username" name="username" required>
            <div class="error" id="usernameError"></div>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <div class="error" id="passwordError"></div>
            <div class="forgot">
                <p onclick="openLink('RegisterForm.php')">Register</p>
            </div>
            <button type="submit" name="LgInSubmit">Log In</button>
        </form>
        <script>
            function validateLogIn() {
                let usernameInput = document.getElementById('username');
                let usernameError = document.getElementById('usernameError');
                let passInput = document.getElementById('password');
                let passError = document.getElementById('passwordError');

                usernameError.innerText = '';
                passError.innerText = '';

                let usernameRegex = /^[\w]{2,15}$/;
                if (!usernameRegex.test(usernameInput.value)) {
                    usernameError.innerText = 'username jovalid (gjatesia 2-15, vetem shkronja dhe numra)';
                    return false;
                }

                let passwordRegex = /^[\w]{8,20}$/;
                if (!passwordRegex.test(passInput.value)) {
                    passError.innerText = 'Password jovalid (gjatesia 8-20, vetem shkronja dhe numra)';
                    return false;
                }
                
                return true;
            }
        </script>
        <script src="script.js"></script>
    </div>
</body>

</html>