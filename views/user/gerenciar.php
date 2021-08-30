<?php
session_start();
include('../../controller/verifica_login.php');
include("../../model/conexao1.php");
$id = $_GET['animal'];
$sql = "select * from animal where id=$id";
$result = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);

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
    <h1>Gerenciar animal</h1>
    <?php
    if ($result->num_rows > 0) {
        while ($linha = $result->fetch_assoc()) {
            $id = $linha['id'];
    ?>
            <div class="card p-2 mt-3 mb-3">
                <img class="card-img-top" style="width: 50%" src="<?= '../img_upload/' . $linha['img']; ?>" alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text"><?= $linha['name']; ?></p>
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