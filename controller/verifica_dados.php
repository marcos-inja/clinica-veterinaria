<?php
if (isset($_POST["data_input"])) {
    $data = $_POST["data_input"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    if (empty($data)) {
        echo "Nome é obrigatório.";
    } else if (strlen($data) > 30) {
        echo "Somente 30 caracteres são permitidos.";
    } else {
        echo "ok!";
    }
}
