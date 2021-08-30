<?php

    class Banco{
        private $endereco = '127.0.0.1';
        private $usuario = 'root';
        private $senha = 'senha';
        private $nomeBanco = 'veterinaria';
        public $con;

        function __construct(){
            $this->con = mysqli_connect($this->endereco, $this->usuario, $this->senha, $this->nomeBanco);
        }

        public function executarSql($sql){
            $resultado = mysqli_query($this->con, $sql);
            return $resultado;
        }
    }
?>