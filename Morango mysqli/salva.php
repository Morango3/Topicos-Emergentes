<?php
include("conexao.php");
$nome = $_POST ["nome"];
$telefone = $_POST ["telefone"];
$endereco = $_POST ["endereco"];

$sql = "INSERT INTO contatos(nome,endereco,telefone)
        VALUES('$nome','$telefone','$endereco')";

mysqli_query($conexao, $sql);

?>