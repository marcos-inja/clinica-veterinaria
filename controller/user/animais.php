<?php
include("../../model/conexao1.php");

$sql = "select * from animal";
$result = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);
?>