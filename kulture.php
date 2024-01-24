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

<body>
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

    <main>
       
        <div class="box" onclick="openLink('Lajmi4.html')">
            <img src="foto4.png" />
            <h4>BE njofton për 125 milionë euro ndihmë humanitare për palestinezët</h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                BE njofton për 125 milionë euro ndihmë humanitare për palestinezët.
            </div>
        </div>
        
        <div class="box" onclick="openLink('Lajmi8.html')">
            <img src="foto8.png" />
            <h4>Pamje dramatike/ Momenti i ekzekutimit të 41-vjeçarit në Fier</h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Ky është momenti i ekzekutimit të Erjon Javorit mesditën e së enjtes në lagjen
                “16 Prilli” në Fier, disa metra larg banesës së tij.
            </div>
        </div>
       
        <div class="box" onclick="openLink('Lajmi18.html')">
            <img src="foto18.png" />
            <h4>
                Pse Netflix po anulon masivisht serialet e njohura?
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Muajin e kaluar, Netflix u kritikua për anulimin e pesë serialeve njëherësh, duke përfshirë një që
                shikuesit e pëlqyen veçanërisht, të cilin shumë nuk e kuptuan.
            </div>
        </div>
        <div class="box" onclick="openLink('Lajmi19.html')">
            <img src="foto19.png" />
            <h4>
                Ismail Kadare flet për mediat italiane: ‘Pallati i Ëndrrave’ më solli shumë telashe, s’kam theksuar
                admirimin për Enver Hoxhën
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Shkrimtari i madh, Ismail Kadare është rikthyer në libraritë italiane me “Pallatin e Ëndrrave”, një
                roman të 40 viteve më parë që ruan fuqinë dhe freskinë të ngjarjeve aktuale. Në një intervistë të dhënë
                për La Lettura të “Corriere della Sera”, shkrimtari gjirokastrit foli për kohën kur shkruajti romanin,
                marrëdhëniet e tij me Enver Hoxhën dhe për teknologjinë në kohën e sotme dhe frikën ekzistuese se kjo e
                fundit po na kontrollon mendjen.
            </div>
        </div>
        
        <div class="box" onclick="openLink('Lajmi23.html')">
            <img src="foto23.png" />
            <h4>
                “Hoti: Asnjë shenjë nuk e bëri në ekonomi qeveria e “punësimit dhe drejtësisë”
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Shkruan: Avdullah Hoti
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