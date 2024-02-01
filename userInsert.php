<?php
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST["RegSubmit"])){
    $user = new User(null, $_POST["emri"], $_POST["mbiemri"], $_POST["username"], $_POST["email"], $_POST["password"]);
    $userRepo = new UserRepository;

    $userRepo->insertUser($user);
    echo "<script>alert('Succes')</script>";
    header("Location: index.php");
}

?>