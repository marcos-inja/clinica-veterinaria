<?php
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];
if($email == 'm@gmail.com' && $senha== 'm123'){
    $_SESSION['autenticado'] = true;
    $_SESSION['email'] = 'm@gmail.com';
    header('Location: ../views/user/panel_user.php');
    exit();
} else {
    header('Location: ../index.php');
    exit();
}