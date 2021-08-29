<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/pata2.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Novo pet</title>
</head>

<body>
   
    <div class="container card p-4 mt-4" style="width: 35rem;">
    <h3>Novo animal</h3>
        <form action="../../controller/upload_img.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInput">Nome</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Nome do pet">
            </div>
            <div class="form-group">
                <label for="exampleInput">Foto do pet</label>
                <input type="file" class="form-control" id="exampleInput" required name="arquivo">
            </div>
            <div class="form-group">
                <label for="exampleInput">idade</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Idade do pet">
            </div>

            <div class="form-group">
                <label for="exampleInput">Especie</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Especie do pet">
            </div>

            <div class="form-group">
                <label for="exampleInput">Raça</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Raça do pet">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição do pet</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Descreva doeças, qualquer coisa..."></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success btn-block">Cadastrar</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>