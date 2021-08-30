<?php
session_start();
include_once("../../model/conexao1.php");
include_once('../../model/user/animal.php');


$animal = new Animal();
$animal->setId($_GET['animal']);
$animal->deletarAnimal();
header('Location: ../../views/user/panel_user.php');
exit();
