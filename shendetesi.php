<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font import from google font library  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="Stilizimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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

<body>
    <main>
        <div class="box" onclick="openLink('Lajmi2.html')">
            <img src="foto2.png" />
            <h4>A e dini se stina e dimrit dëmton baterinë e celularit tuaj? Arsyet do t’iu befasojnë</h4>
            <div class="date">
                <p>07-12-2023</p>
            </div>
            <div class="desc">
                Gjithçka që bëjnë telefonat tanë, është me të vërtetë e mrekullueshme.
                Por ka një gjë që nuk e bëjnë dot mirë: t’i rezistojnë motit të ftohtë.
            </div>
        </div>
        <div class="box" onclick="openLink('Lajmi27.html')">
            <img src="foto27.png" />
            <h4>
                Këto janë katër pijet që rekomandohet t’i konsumoni kur keni anemi
                <div class="date">
                    <p>10-12-2023</p>
                </div>
                <div class="desc">
                    Shkaktari më i shpeshtë i anemisë është mungesa e hekurit dhe pa të, organizmi nuk është në gjendje
                    ta prodhojë hemoglobinën që u nevojitet qelizave të kuqe të gjakut për ta transportuar oksigjenin.
                </div>
        </div>
        <div class="box" onclick="openLink('Lajmi28.html')">
            <img src="foto28.png" />
            <h4>
                Ushtrimet e rregullta ndikojnë që të bëni gjumë më të mirë
                <div class="date">
                    <p>10-12-2023</p>
                </div>
                <div class="desc">
                    Ushtrimet e rregullta kanë shumë përfitime, duke përfshirë këtu edhe gjumin e mirë.
                </div>
        </div>
        <div class="box" onclick="openLink('Lajmi29.html')">
            <img src="foto29.png" />
            <h4>
                Nuk mund ta duroni ndjesinë e ushqimit djegës, këta janë hapat që duhet të bëni pas ngrënies
                <div class="date">
                    <p>10-12-2023</p>
                </div>
                <div class="desc">
                    Ushqimet pikante për shumë njerëz janë të shijshme, por disa nuk mund ta durojnë ndjesinë që japin
                    ato.
                </div>
        </div>
        <div class="box" onclick="openLink('Lajmi30.html')">
            <img src="foto30.png" />
            <h4>
                Pjepri ndihmon në uljen e presionit të gjakut
                <div class="date">
                    <p>10-12-2023</p>
                </div>
                <div class="desc">
                    Pjepri e mbron trupin tuaj si nga brenda ashtu edhe jashtë, duke përfshirë shëndetin e kockave,
                    tretjen dhe shëndetin e lëkurës.
                </div>
        </div>
    </main>
    <footer>
        <div class="FooterC">
        <div class="logot">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="referencat">
            <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">news</a></li>
            <li onclick="openLink('about us.html')"><a href="#">about us</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">our team</a></li>
        </ul>
        </div>
        </div>
        <div class="Copy">
            <p>Copyright ©2023; Designed by <strong>Leutrim & Ylldrit</strong> </p>
        </div>
        <script src="script.js" ></script>
    </footer>
</body>
<script src="script.js" ></script>
</html>