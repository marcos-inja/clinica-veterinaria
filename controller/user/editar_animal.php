<?php
    session_start();
    require_once('../../model/conexao1.php'); // Tire o '1' deixe apenas conexao.
    require_once('../../model/user/animal.php');

    $animal = new Animal();
    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'],-4)); //retira o nome e deixa só a extenção do arquivo
        $nameNovo = md5(time()).$extensao; // define o nome do arquivo e adiciona a entenção
        $diretorio = "../../views/img_upload/"; // Define o diretorio onde sera salvo a imagem
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$nameNovo);
        $animal->setId($_POST['id']);
        $animal->setNome($_POST['nome']);
        $animal->setNomeImg($nameNovo);
        $animal->setIdade($_POST['idade']);
        $animal->setEspecie($_POST['especie']);
        $animal->setRaca($_POST['raca']);
        $animal->setDescricao($_POST['descricao']);
        
        $resultado = $animal->atualizarAnimal();

        // if($resultado)
        //     $_SESSION['sucesso'] = true;
        // else
        //     $_SESSION['erro'] = true;
        header('Location: ../../views/user/gerenciar.php?animal='.$_POST["id"]);
        exit();
    }
?> 
