<?php
include("../../model/consulta.php");

$consulta = new Consulta();
$result = $consulta->exibirConsulta();
$row = mysqli_num_rows($result);
?>