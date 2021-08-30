<?php
    include 'conexao1.php';
    class Animal{

        private $id;
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

        public function cadastrarAnimal(){
            $sql = '';
            $nome = $this->getNome();
            $nomeImg = $this->getNomeImg();
            $idade = $this->getIdade();
            $especie = $this->getEspecie();
            $raca = $this->getRaca();
            $descricao = $this->getDescricao();

            $sql = "INSERT INTO animal (id, img, name, idade, especie, raca, descricao, data_cadastro)
            VALUES (null,'$nomeImg', '$nome', $idade, '$especie', '$raca', '$descricao', NOW())";
            $this->banco->executarSql($sql);
            return true;
        }

        public function deletarAnimal(){
            $sql = '';
            $id = $this->getId();

            $sql = "DELETE FROM animal where id = '$id'";
            $this->banco->executarSql($sql);
            return 'Deletado!';
        }

        public function atualizarAnimal(){

            $nome = $this->getNome();
            $idade = $this->getIdade();
            $especie = $this->getEspecie();
            $raca = $this->getRaca();
            $descricao = $this->getDescricao();

            $sql = "UPDATE animal SET 
            nome = '$nome', idade = '$idade', especie = '$especie', raca= '$raca', descricao = '$descricao' 
            where id = id";
            $this->banco->executarSql($sql);
            return 'sucesso';
        }

        public function exibirAnimal(){
            $sql = "select * from animal";
            $result = $this->banco->executarSql($sql);
            return $result;
        }

        public function exibirAnimalId(){
            $id = $this->getId();
            $sql = "select * from animal where id=$id";
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