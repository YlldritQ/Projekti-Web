<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font import from google font library  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Stilizimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <?php
                if (isset($_SESSION['ID'])) {
                    echo '<li><a href="#">Welcome ' . $_SESSION['Username'] . '</a></li>';
                    if ($_SESSION['isAdmin'] == 1) {
                        echo '<li onclick="openLink(\'MonitoroUsers.php\')"><a href="#">Users</a></li>';
                        echo '<li onclick="openLink(\'upload.php\')"><a href="#">InsertNews</a></li>';
                    }
                    echo '<li onclick="openLink(\'LogOut.php\')"><a href="#">Log Out</a></li>';
                } else {
                    echo '<li onclick="openLink(\'LogInForm.php\')"><a href="#">Log In</a></li>';
                }
                ?>
            </ul>
            <ul>
                <li class="largo"><a href="index.php"><strong>Ylldrit & Leutrim</strong></a></li>
                <li class="hideOnMobile" onclick="openLink('index.php')"><a href="#">lajme</a></li>
                <li class="hideOnMobile" onclick="openLink('kronike.php')"><a href="#">kronikë</a></li>
                <li class="hideOnMobile" onclick="openLink('shendetesi.php')"><a href="#">shëndetësi</a></li>
                <li class="hideOnMobile" onclick="openLink('ekonomi.php')"><a href="#">ekonomi</a></li>
                <li class="hideOnMobile" onclick="openLink('kulture.php')"><a href="#">kulture</a></li>
                <li class="hideOnMobile" onclick="openLink('sport.php')"><a href="#">sport</a></li>
                <?php
                if (isset($_SESSION['ID'])) {
                    echo '<li><a href="#">Welcome ' . $_SESSION['Username'] . '</a></li>';
                    if ($_SESSION['isAdmin'] == 1) {
                        echo '<li class="hideOnMobile" onclick="openLink(\'MonitoroUsers.php\')"><a href="#">User</a></li>';
                        echo '<li class="hideOnMobile" onclick="openLink(\'upload.php\')"><a href="#">InsertNews</a></li>';
                    }
                    echo '<li class="hideOnMobile" onclick="openLink(\'LogOut.php\')"><a href="#">Log Out</a></li>';
                } else {
                    echo '<li class="hideOnMobile" onclick="openLink(\'LogInForm.php\')"><a href="#">Log In</a></li>';
                }
                ?>

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

    <main>
        <div class="slideshow-container">


            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="Foto/foto3.png" style="width:100%">
                <div class="text">Zbulohet plani anti-Sunak, Boris Johnson rikthehet si kryeministër në koalicion me “babain” e Brexit</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="Foto/foto2.png" style="width:100%">
                <div class="text">A e dini se stina e dimrit dëmton baterinë e celularit tuaj? Arsyet do t’iu befasojnë</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="Foto/foto1.png" style="width:100%">
                <div class="text">Ekskluzive: Naim Murseli përballet me babanë për herë të parë pas arrestimit, akuzon Policinë për keqtrajtim</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="Foto/foto4.png" style="width:100%">
                <div class="text">BE njofton për 125 milionë euro ndihmë humanitare për palestinezët</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="Foto/foto5.png" style="width:100%">
                <div class="text">Kompletohen 16 ekipet e mbetura në garë për Kupën e Kosovës, caktohet edhe data e shortit</div>
            </div>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <button id="back-to-top-btn" onclick="scrollToTop()">Back to Top</button>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);


            function plusSlides(n) {
                showSlides(slideIndex += n);
            }


            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

        <button id="back-to-top-btn" onclick="scrollToTop()">Back to Top</button>
        <script>
            var mybutton = document.getElementById("back-to-top-btn");

            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.animation = "slideIn 0.3s forwards"; // play the slideIn animation
                } else {
                    mybutton.style.animation = ""; // reset the animation when not needed
                }
            }

            function scrollToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <?php
        include_once 'lajmiRepository.php';
        include_once 'lajmi.php';

        $lajmiRepo = new LajmiRepository();

        $lajmi  = $lajmiRepo->getLajmetByKategoria('Kulture');


        foreach (array_reverse($lajmi) as $lajmet) {
            echo "
            <div class=\"box\" onclick=\"openNews('LajmiTemplate.php', {$lajmet[0]})\">
                    <img src=\"" . $lajmet['Img_Link'] . "\" />
                    <h4>" . $lajmet['Titulli'] . "</h4>
                    <div class=\"date\">
                        <p>" . $lajmet['Data'] . "</p>
                    </div>
                    <div class=\"desc\">
                        " . $lajmet['Description'] . "
                    </div>
                </div>
            ";
        }


        ?>

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
                    <li onclick="openLink('about us.php')"><a href="#">about us</a></li>
                    <li><a href="#">contact us</a></li>
                    <li><a href="#">our team</a></li>
                </ul>
            </div>
        </div>
        <div class="Copy">
            <p>Copyright ©2023; Designed by <strong>Leutrim & Ylldrit</strong> </p>
        </div>
        <script src="script.js"></script>
    </footer>
</body>
<script src="script.js"></script>

</html>