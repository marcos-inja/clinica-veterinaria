<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
if($email == 'm@gmail.com' && $senha== 'm123'){
    header('Location: ../views/user/panel_user.php');
    exit();
} else {
    header('Location: ../index.php');
    exit();
}