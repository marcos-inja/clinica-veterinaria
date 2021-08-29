<?php

    include('');//conexão

    $msg = false;

    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'],-4)); //retira o nome e deixa só a extenção do arquivo
        $name_novo = md5(time()) .$extensao; // define o nome do arquivo e adiciona a entenção
        $diretorio = "../views/img_upload"; // Define o diretorio onde sera salvo a imagem

        move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$name_novo);

        $sgl_code = "INSERT INTO arquivo (codigo, arquivo, data) values(null, '$name_novo', NOW())";
        if($mysqli->query($sgl_code))
            $msg = "Arquivo enviado com sucesso!";
        else 
            $msg = "Falha ao enviar arquivo.";

    }

?>