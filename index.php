<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="./views/panel_user.php" method="post">
        <input type="text" name="email">
        <input type="password" name="password">
        <button type="submit">Login</button>
        <a href="./views/log.php">Se cadastre</a>
    </form>
</body>
</html>