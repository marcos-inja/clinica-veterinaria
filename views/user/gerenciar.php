<?php
session_start();
include_once('../../controller/verifica_login.php');
include_once ('../../controller/user/exibir_animal.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/pata2.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Gerenciar</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../assets/pata2.png" width="30" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="./panel_user.php">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./consultas.php">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../controller/sair.php">Sair</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-5" type="submit">Pesquisar</button>
            </form>
            <a href="novo_animal.php"><button class="ml-5 btn btn-primary my-2 my-sm-0" type="submit">Cadastrar novo pet</button></a>
        </div>
    </nav>


    <?php
    if ($result->num_rows > 0) {
        while ($linha = $result->fetch_assoc()) {
            $id = $linha['id'];
    ?>
            <div class="container p-5 mt-3 mb-3" style="display:flex; justify-content: space-between;border: 2px solid black; border-radius: 20px;">
                <div class="card-img-top" style="text-align: center;width:auto;">
                    <img style="height: 25rem; border-radius:20px; max-width: 30rem; object-fit: cover;" src="<?= '../img_upload/' . $linha['img']; ?>" alt="Imagem de capa do card">
                </div>
                <div class="card-body">
                    <p class="card-text">Nome: <?= $linha['name']; ?></p>
                    <p class="card-text">Idade: <?= $linha['idade']; ?></p>
                    <p class="card-text">Especie: <?= $linha['especie']; ?></p>
                    <p class="card-text">Raça: <?= $linha['raca']; ?></p>
                    <p class="card-text">Descrição: <?= $linha['descricao']; ?></p>
                    <p class="card-text">Data de cadastro: <?= $linha['data_cadastro']; ?></p>
                    <div>
                    <button class="btn btn-outline-warning my-2 my-sm-0 mr-5" type="submit">Editar</button>
                    <button class="btn btn-outline-success my-2 my-sm-0 mr-5" type="submit">Consulta</button>
                    <a href="../../controller/user/gerenciar.php?animal=<?= $linha['id']; ?>"><button class="btn btn-outline-danger my-2 my-sm-0 mr-5" type="submit">Apagar</button></a>
                    </div>
                </div>
            </div>

    <?php
        }
    } else {
        echo "<h4>Erro!</h4>";
    }
    ?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>