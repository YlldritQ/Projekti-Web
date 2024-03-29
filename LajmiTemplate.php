<?php
include_once 'lajmiRepository.php';
session_start();
if (isset($_POST['newsId'])) {
    $lajmiRepo = new LajmiRepository();

    $lajmi = $lajmiRepo->getLajmetById($_POST['newsId']);

    echo '
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
        <li onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
              <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg></a></li>
        <li onclick="openLink(\'index.php\')"><a href="#">lajme</a></li>
        <li onclick="openLink(\'kronike.php\')"><a href="#">kronikë</a></li>
        <li onclick="openLink(\'shendetesi.php\')"><a href="#">shëndetësi</a></li>
        <li onclick="openLink(\'ekonomi.php\')"><a href="#">ekonomi</a></li>
        <li onclick="openLink(\'kulture.php\')"><a href="#">kulture</a></li>
        <li onclick="openLink(\'sport.php\')"><a href="#">sport</a></li>';

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

    echo '
      </ul>
      <ul>
        <li class="largo"><a href="index.php"><strong>Ylldrit & Leutrim</strong></a></li>
        <li class="hideOnMobile" onclick="openLink(\'index.php\')"><a href="#">lajme</a></li>
        <li class="hideOnMobile" onclick="openLink(\'kronike.php\')"><a href="#">kronikë</a></li>
        <li class="hideOnMobile" onclick="openLink(\'shendetesi.php\')"><a href="#">shëndetësi</a></li>
        <li class="hideOnMobile" onclick="openLink(\'ekonomi.php\')"><a href="#">ekonomi</a></li>
        <li class="hideOnMobile" onclick="openLink(\'kulture.php\')"><a href="#">kulture</a></li>
        <li class="hideOnMobile" onclick="openLink(\'sport.php\')"><a href="#">sport</a></li>';

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

    echo '
        <li class="butoni" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
              <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
            </svg></a></li>
      </ul>
    </nav>
    <script>
      function showSidebar() {
        const sidebar = document.querySelector(\'.sidebar\')
        sidebar.style.display = \'flex\'
      }

      function hideSidebar() {
        const sidebar = document.querySelector(\'.sidebar\')
        sidebar.style.display = \'none\'
      }
    </script>
  </header>

  <main class="NewsPage">
    <div class="title">
      <h1>' . $lajmi['Titulli'] . '</h1>
    </div>
    <div class="image">
      <img src="' . $lajmi['Img_Link'] . '" />
    </div>
    <div>
      <p>' . $lajmi['Description'] . '</p>
      <p>' . $lajmi['Permbajtja'] . '</p>
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
                        <li><a href="">home</a></li>
                        <li><a href="">news</a></li>
                        <li><a href="">about us</a></li>
                        <li><a href="">contact us</a></li>
                        <li><a href="">our team</a></li>
                    </ul>
                </div>
            </div>
            <div class="Copy">
                <p>Copyright ©2023; Designed by <strong>Leutrim & Ylldrit</strong> </p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
    
    </html>
    ';
} else {
    echo "<script> alert('Error!'); </script>";
    header('Location: index.php');
}
