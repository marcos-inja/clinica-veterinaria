<?php
session_start();
 // Tire o '1' deixe apenas conexao.
require_once('../../model/consulta.php');

$consulta = new Consulta();

$consulta->setId($_POST['id']);
$consulta->setTipo($_POST['tipo']);
$consulta->setDescricao($_POST['descricao']);

$resultado = $consulta->cadastrarConsulta();

// if($resultado)
//     $_SESSION['sucesso'] = true;
// else
//     $_SESSION['erro'] = true;
if ($resultado) {
    header('Location: ../../views/user/consultas.php');
    exit();
} else{
    echo "erro";
}
