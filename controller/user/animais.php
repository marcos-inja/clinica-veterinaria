<?php
include("../../model/conexao1.php");
include("../../model/user/animal.php");

$animal = new Animal();
$result = $animal->exibirAnimal();
$row = mysqli_num_rows($result);
?>