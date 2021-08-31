<?php
session_start();
include_once('../../controller/verifica_login.php');
$id = $_GET['animal'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/pata2.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Marcar consulta</title>
</head>

<body>

    <div class="container card p-4 mt-4" style="width: 35rem;">
        <h3>Editar animal</h3>
        <form action="../../controller/user/marcar_consulta.php" method="post">
            <div class="form-group">
                <label for="exampleInput">id</label>
                <input readonly name="id" type="text" class="form-control" id="exampleInput" value="<?= $id ?>">
            </div>
            <div class="form-group">
                <label for="inputEstado">Tipo</label>
                <select name="tipo" id="inputEstado" class="form-control">
                    <option selected value="Consulta">Consulta</option>
                    <option value="Vacina">Vacina</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição do pet</label>
                <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Descreva..." required></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success btn-block">Cadastrar</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>