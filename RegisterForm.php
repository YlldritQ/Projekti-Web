<?php
include_once 'userRepository.php';
include_once 'user.php';

if (isset($_POST["RegSubmit"])) {
    $user = new User(null, $_POST["emri"], $_POST["mbiemri"], $_POST["email"], $_POST["username"], $_POST["password"]);
    $userRepo = new UserRepository;
    $userTestUsername = $userRepo->getUserByUsername($_POST["username"]);
    $userTestEmail = $userRepo->getUserByEmail($_POST["email"]);

    if ($userTestUsername != null) {
        echo "<script>alert('Nuk u insertua!'); window.location.href='LogInForm.php';</script>";
    }elseif($userTestEmail != null){
        echo "<script>alert('Nuk u insertua!'); window.location.href='LogInForm.php';</script>";
    }
     else {
        $userRepo->insertUser($user);
        echo "<script>
                if (window.confirm('Success!')) {
                    window.location.href='LogInForm.php';
                }
            </script>";
    }
}
?>

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
                <li onclick="openLink('LogInForm.php')"><a href="#">Sign In</a></li>
            </ul>
            <ul>
                <li class="largo"><a href="index.php"><strong>Ylldrit & Leutrim</strong></a></li>
                <li class="hideOnMobile" onclick="openLink('index.php')"><a href="#">lajme</a></li>
                <li class="hideOnMobile" onclick="openLink('kronike.php')"><a href="#">kronikë</a></li>
                <li class="hideOnMobile" onclick="openLink('shendetesi.php')"><a href="#">shëndetësi</a></li>
                <li class="hideOnMobile" onclick="openLink('ekonomi.php')"><a href="#">ekonomi</a></li>
                <li class="hideOnMobile" onclick="openLink('kulture.php')"><a href="#">kulture</a></li>
                <li class="hideOnMobile" onclick="openLink('sport.php')"><a href="#">sport</a></li>
                <li class="hideOnMobile" onclick="openLink('LogInForm.php')"><a href="#">Sign In</a></li>
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
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" onsubmit="return validateRegister()">
            <h1>Register</h1>
            <input type="text" placeholder="Emri" id="emri" name="emri" required>
            <div class="error" id="emriError"></div>
            <input type="text" placeholder="Mbiemri" id="mbiemri" name="mbiemri" required>
            <div class="error" id="mbiemriError"></div>
            <input type="text" placeholder="Username" id="username" name="username" required>
            <div class="error" id="usernameError"></div>
            <input type="email" placeholder="E-mail" id="email" name="email" required>
            <div class="error" id="emailError"></div>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <div class="error" id="passwordError"></div>
            <input type="password" placeholder="Confirm Password" id="conPass" required>
            <div class="error" id="conPasswordError"></div>
            <button type="submit" name="RegSubmit">Submit</button>
        </form>
        <script>
            function validateRegister() {
                let emriInput = document.getElementById('emri');
                let emriError = document.getElementById('emriError');
                let mbiemriInput = document.getElementById('mbiemri');
                let mbiemriError = document.getElementById('mbiemriError');
                let usernameInput = document.getElementById('username');
                let usernameError = document.getElementById('usernameError');
                let emailInput = document.getElementById('email');
                let emailError = document.getElementById('emailError');
                let passInput = document.getElementById('password');
                let passError = document.getElementById('passwordError');
                let conPassInput = document.getElementById('conPass');
                let conPassError = document.getElementById('conPasswordError');

                emriError.innerText = '';
                mbiemriError.innerText = '';
                usernameError.innerText = '';
                emailError.innerText = '';
                passError.innerText = '';
                conPassError.innerText = '';

                let emriRegex = /^[A-Z][a-z]+$/;
                if (!emriRegex.test(emriInput.value)) {
                    emriError.innerText = 'Emri jovalid';
                    return false;
                }
                if (!emriRegex.test(mbiemriInput.value)) {
                    mbiemriError.innerText = 'mbiemri jovalid';
                    return false;
                }

                let usernameRegex = /^[\w]{2,15}$/;
                if (!usernameRegex.test(usernameInput.value)) {
                    usernameError.innerText = 'username jovalid (gjatesia 2-15, vetem shkronja dhe numra)';
                    return false;
                }

                let emailRegex = /^[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
                if (!emailRegex.test(emailInput.value)) {
                    emailError.innerText = 'E-mail jovalid';
                    return false;
                }

                let passwordRegex = /^[\w]{8,20}$/;
                if (!passwordRegex.test(passInput.value)) {
                    passError.innerText = 'Password jovalid (gjatesia 8-20, vetem shkronja dhe numra)';
                    return false;
                }

                if (passInput.value !== conPassInput.value) {
                    conPassError.innerText = 'Confirm Password jovalid';
                    return false;
                }
                return true;
            }
        </script>
    </div>


</body>
</html>