<?php
// include_once("../../model/conexao1.php");
include_once('../../model/consulta.php');
include_once('../../model/user/animal.php');

$consulta = new Consulta();
$animal = new Animal();

$consulta->setId($_GET['animal']);
$animal->setId($_GET['animal']);
$result = $consulta->exibirConsultaId();
$result_animal = $animal->exibirAnimalId();
?>