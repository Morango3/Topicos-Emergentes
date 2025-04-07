<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Exame</title>
</head>
<body>
<form action="notaexame.php" method="post">
        <h2>Digite sua média:</h2>
        <br>
        <input type="number" id="nota" name="nota" step="0.1" min="0" max="10" required>
        <br>
        <input type="submit" name="enviar" value="Enviar">
        <br><br> 
        </form>

        <?php

if(isset($_POST["enviar"])){
    $nota = $_POST["nota"];

    if($nota <= 1.7){
        echo 'Você está reprovado!';
    }else if($nota >= 1.8 && $nota < 7){
        $nota_exame = (50-(6*$nota))/4;
        echo 'Você está em exame! Sua nota no exame deve ser: '.$nota_exame;
    }else if($nota >= 7){
        echo 'Você está aprovado!';
    }
}

?>
</body>
</html>