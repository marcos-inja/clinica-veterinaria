<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'marcosv10');
define('DB', 'veterinaria');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');