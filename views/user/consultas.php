<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/pata2.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Consultas</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../assets/pata2.png" width="30" alt="">
        </a>
        <a class="navbar-brand" href="#">Pet Feliz</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./panel_user.php">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./consultas.php">Consultas</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-5" type="submit">Pesquisar</button>
            </form>
            <a href="novo_animal.php"><button class="ml-5 btn btn-primary my-2 my-sm-0" type="submit">Cadastrar novo pet</button></a>
        </div>
    </nav>
    <div class="container">
        <div class="card text-white bg-info mb-3 mt-3">
            <div class="card-header">Consulta</div>
            <div class="card-body">
                <a style="color: white;" href="">
                    <h5 class="card-title">Consulta do pet <strong>Helbert Richard</strong></h5>
                </a>
                <p class="card-text">Resumo: consulta sobre a caganeira braba que o pet tá tendo essa semana.</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3">
            <div class="card-header">Vascina</div>
            <div class="card-body">
                <a style="color: white;" href="">
                    <h5 class="card-title">Vascina do pet <strong>Pega Rexx</strong></h5>
                </a>
                <p class="card-text">Resumo: Vascina da doença febre ti fodi.</p>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>