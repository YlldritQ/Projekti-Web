<?php
include_once 'lajmiRepository.php';
session_start();

if (isset($_POST['newsId'])) {
    $lajmiRepo = new LajmiRepository();

    $lajmi = $lajmiRepo->getLajmetById($_POST['newsId']);

    echo
    '
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            ' . $lajmi['Titulli'] . '
        </title>
        <link rel="stylesheet" href="Stilizimi.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
            rel="stylesheet">
    </head>
    
    <body>
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
        <p>' . $lajmi['Video_Link'] . '</p>
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
?>