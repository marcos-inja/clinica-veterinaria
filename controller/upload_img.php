<?php
    session_start();
    include('../model/conexao1.php'); // Tire o '1' deixe apenas coneção.

    $msg = false;

    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'],-4)); //retira o nome e deixa só a extenção do arquivo
        $nameNovo = md5(time()).$extensao; // define o nome do arquivo e adiciona a entenção
        $diretorio = "../views/img_upload/"; // Define o diretorio onde sera salvo a imagem
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$nameNovo);
        // $mysqlImg = addslashes(fread(fopen($nameNovo, "r"), $tamanhoImg));
        $sgl_code = "INSERT INTO animal (id, img, name,idade, especie, raca, descricao, data_cadastro) VALUES(null,'$nameNovo', 'dog', 2, 'cachorro', 'pastor', 'doente pra carai', NOW())";
        
        if($conexao->query($sgl_code))
            $_SESSION['sucesso'] = true;
        else
            $_SESSION['erro'] = true;
        header('Location: ../views/user/panel_user.php');
        exit();
    }

?> 
