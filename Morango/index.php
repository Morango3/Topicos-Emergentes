<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contatos</h1>
        <form action=salva.php method= "post">

         Nome:<input type="text" name="nome">
        <br>
         Endereço: <input type="text" name="endereco">
        <br>
         Telefone: <input type="text" name="telefone">
        <br>
         <input type="submit" value=Cadastrar>

         </form>

    <?php
include ("conexao.php"); 


$sql = "SELECT * FROM contatos"; //procurar e mostrar o que tem em contatos *

$res = mysqli_query($conexao, $sql); //executando

if (mysqli_num_rows($res) > 0) {
    while ($linha = mysqli_fetch_assoc($res)) { 
        echo $linha['nome'] . " - " . $linha['endereco'] . " - " . $linha['telefone'] ."-
         <a href ='editar.php?id=".$linha["id"]. "'>Editar</a> <br>";
        
        
      
    }
} else {
    echo "Nenhum contato encontrado.";
}
?>
