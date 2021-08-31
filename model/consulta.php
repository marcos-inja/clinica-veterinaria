<?php
    include '../../model/conexao1.php';
    class Consulta{

        private $id;
        private $tipo;
        private $banco;
        private $nomeImg;
        private $nome;
        private $idade;
        private $especie;
        private $raca;
        private $descricao;

        function __construct(){
            $this->banco = new Banco();
        }

        public function cadastrarConsulta(){
            $sql = '';
            $id = $this->getId();
            $tipo = $this->getTipo();
            $descricao = $this->getDescricao();

            $sql = "INSERT INTO consulta (id, tipo, descricao, data_cadastro)
            VALUES ($id,'$tipo','$descricao', NOW());";

            $this->banco->executarSql($sql);
            return true;
        }

        public function deletarConsulta(){
            $sql = '';
            $id = $this->getId();

            $sql = "DELETE FROM consulta where id = '$id'";
            $this->banco->executarSql($sql);
            return 'Deletado!';
        }

        //Só depois
        // public function atualizarAnimal(){
        //     $id = $this->getId();
        //     $nome = $this->getNome();
        //     $img = $this->getNomeImg();
        //     $idade = $this->getIdade();
        //     $especie = $this->getEspecie();
        //     $raca = $this->getRaca();
        //     $descricao = $this->getDescricao();

        //     $sql = "UPDATE animal SET 
        //     name = '$nome', img = '$img', idade = '$idade', especie = '$especie', raca= '$raca', descricao = '$descricao' 
        //     where id = $id";
        //     $this->banco->executarSql($sql);
        //     return true;
        // }

        public function exibirConsulta(){
            $sql = "select * from consulta";
            $result = $this->banco->executarSql($sql);
            return $result;
        }

        public function exibirConsultaId(){
            $id = $this->getId();
            $sql = "select * from consulta where id=$id";
            $result = $this->banco->executarSql($sql);
            return $result;
        }

        // Getters
        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getNomeImg(){
            return $this->nomeImg;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getEspecie(){
            return $this->especie;
        }

        public function getRaca(){
            return $this->raca;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        //Seterrs
        public function setId($novoValor){
            return $this->id = $novoValor;
        }

        public function setTipo($novoValor){
            return $this->tipo = $novoValor;
        }

        public function setNome($novoValor){
            return $this->nome = $novoValor;
        }

        public function setNomeImg($novoValor){
            return $this->nomeImg = $novoValor;
        }

        public function setIdade($novoValor){
            return $this->idade = $novoValor;
        }

        public function setEspecie($novoValor){
            return $this->especie = $novoValor;
        }

        public function setRaca($novoValor){
            return $this->raca = $novoValor;
        }

        public function setDescricao($novoValor){
            return $this->descricao = $novoValor;
        }
    }

?>