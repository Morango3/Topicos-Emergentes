<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$banco= "agenda";

$conexao = mysqli_connect($servidor, $user, $senha, $banco);
if (!$conexao){
    echo "erro de conexão";
}
?>