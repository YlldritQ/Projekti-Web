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
        <div class="box" onclick="openLink('Lajmi1.html')">
            <img src="foto1.png" />
            <h4>Naim Murseli përballet me babanë për herë të parë pas arrestimit, akuzon Policinë për keqtrajtim</h4>
            <div class="date">
                <p>09-12-2023</p>
            </div>
            <div class="desc">
                Vrasja mizore e Liridona Admeajt, krim ky që tronditi vendin para disa javësh po vazhdon të hetohet,
                ndërkohë që pistat po zgjerohen dhe akoma nuk është konfirmuar motivi i rastit tragjik.
                Tre persona ndodhen në paraburgim, teksa i dyshuari i fundit u arrestua sot nga Policia.
                Naim Murseli – burri i të ndjerës ndodhet në Burgun e Sigurisë së Lartë, ku para disa ditësh e ka
                vizitua babai i tij, raporton Gazeta Sinjali.
            </div>
        </div>
        <div class="box" onclick="openLink('Lajmi3.html')">
            <img src="foto3.png" />
            <h4>Zbulohet plani anti-Sunak, Boris Johnson rikthehet si kryeministër në koalicion me “babain” e Brexit
            </h4>
            <div class="date">
                <p>07-12-2023</p>
            </div>
            <div class="desc">
                Mbi pjatat me ravioli dhe mëlçi viçi, të shoqëruara me verë të kuqe nga Italia e jugut, armiqtë politikë
                të
                Rishi Sunak kanë komplotuar lëvizjen e tyre të radhës kundër qeverisë.
            </div>
        </div>
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
        
       
        <div class="box" onclick="openLink('Lajmi9.html')">
            <img src="foto9.png" />
            <h4>Hill: Serbët në Veri duhet të kenë perspektivë për të ardhmen,
                Asociacioni është hap i qartë në këtë drejtim</h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Ambasadori amerikan në Serbi, Christopher Hill ka folur për normalizimin e marrëdhënieve
                mes Kosovës dhe Serbisë, e që si një kusht kyç konsiderohet njohja de facto e Kosovës.
            </div>
        </div>
        
        <div class="box" onclick="openLink('Lajmi12.html')">
            <img src="foto12.png" />
            <h4>
                Trondit vëllai i Liridonës: Naimi kishte shumë shpenzime, vrasësit kanë ngrënë bukën tonë
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Vëllai i Liridona Ademajt, 30-vjeçares që u vra me armë zjarri para disa ditësh
                në Prishtinë ka rrëfyer gjithçka lidhur me ngjarjen e rëndë,
                duke treguar se si nisën dyshimet te Naim Murseli, bashkëshorti i motrës së tij.
            </div>
        </div>
        <div class="box" onclick="openLink('Lajmi13.html')">
            <img src="foto13.png" />
            <h4>
                Fjalët e Naim Murselit në gjykatë: Nuk kam ikur nga vendi i ngjarjes, kam qenë edhe unë i rrezikuar
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Gjykata Themelore në Prishtinë sot ka caktuar masën e paraburgimit për një muaj ndaj Naim Murselit,
                Granit Plavës dhe Kushtrim Kokallës lidhur me dyshimet për vrasjen e Liridona Ademaj.
            </div>
        </div>
        <div class="box" onclick="openLink('Lajmi14.html')">
            <img src="foto14.png" />
            <h4>
                Vrasja e Liridona Ademajt – a e ka kontaktuar Naim Murseli, Behgjet Pacollin në natën e krimit?
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Lideri i Alenacës Kosova e Re, Behgjet Pacolli, ka folur për figurën e Naim Murselit,
                të dyshuarin për vrasjen e Liridona Ademajt.
            </div>
        </div>
        <div class="box" onclick="openLink('Lajmi15.html')">
            <img src="foto15.png" />
            <h4>
                Pacolli për rivarrimin e Liridonës: Fëmijët e saj që ishin aq shumë të lidhur me të,
                s’ishin të pranishëm
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Lideri i Aleancës Kosova e Re, Behgjet Pacolli, ka reaguar pas rivarrimit të Liridona Ademajt, e cila
                dyshohet se u vra
                nga ish-këshilltari i tij, bashkëshorti i saj, Naim Murseli, raporton Sinjali.
            </div>
        </div>
       
        <div class="box" onclick="openLink('Lajmi21.html')">
            <img src="foto21.png" />
            <h4>
                ‘Godet’ Blero: Secili sen që ndodh në këtë jetë ndodh që na ndodh neve, ndodh për neve
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Blero sërish ka lëshuar një mendim të thellë të tij teksa bisedonte me një pjesë të banorëve të Big
                Brother VIP Kosova.
            </div>
        </div>
        <div class="box" onclick="openLink('Lajmi22.html')">
            <img src="foto22.png" />
            <h4>
                “M’u desh të krijoja një bandë, u largova për jetesë më të mirë”, Noizy flet për vitet e para në Angli
            </h4>
            <div class="date">
                <p>10-12-2023</p>
            </div>
            <div class="desc">
                Rigels Rajku, reperi i njohur me emrin e artit Noizy, ka dhënë një intervistë për mediat angleze Daily
                Express, ku ka rrëfyer largimin e tij nga Shqipëria kur ka qenë fëmijë, jetën në Londër dhe karrierën e
                tij.
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