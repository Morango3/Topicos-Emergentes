<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form method="post" action="formulario.php">
        Digite o seu nome:
        <input type="text" size="80" name="txtnome">
        <br><br>

        Digite o seu endereço:
        <input type="text" size="80" name="txtendereco">
        <br><br>

        Digite a sua idade:
        <input type="text" size="80" name="txtidade">
        <br><br>

        Selecione o seu sexo:
        <input type="radio" name="opcao" value="Feminino">Feminino
        <input type="radio" name="opcao" value="Masculino">Masculino<br>
        <br><br>

        <input type="submit" name="enviar" value="Enviar">

        <?php
        if (isset($_POST["enviar"])) {
            $_txtnome = $_POST["txtnome"];
            $_txtendereco = $_POST["txtendereco"];
            $_txtsexo = $_POST["opcao"];
            $_txtidade = $_POST["txtidade"];


            if ($_txtidade >= 18) {
                echo "<h2> Meu nome é: $_txtnome, minha idade é: $_txtidade, meu sexo é: $_txtsexo e meu endereço é: $_txtendereco  </h2>";
            } else {
                echo "<h2> $_txtnome é: Menor de Idade </h2>";
            }
        }

        ?>

        <br><br>
        <form action="teste.php" method="post">
            <input type="submit" value="voltar">
        </form>
</body>

</html>