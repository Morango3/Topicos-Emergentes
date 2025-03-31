<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <form method="post" action="aula.php">
        Digite o seu nome:
        <input type="text" size="80" name="txtnome">
        <input type="submit" name="enviar" value="Vai!">
</form>
    <?php
    if (isset($_POST["enviar"])){
    $_txtnome=$_POST["txtnome"];
    echo "<h2>Seu nome é: $_txtnome</h2>";}
    ?>
</body>
</html>