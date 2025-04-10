<?php
session_start();
if (!isset($_SESSION['convidados'])) {
    $_SESSION['convidados'] = [];}
    function adicionarConvidado($nome) {
        if (!empty($nome)) {
            array_push($_SESSION['convidados'], $nome);
        }
    }
    function removerConvidado() {
        array_pop($_SESSION['convidados']);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['nome'])) {
            adicionarConvidado($_POST['nome']);
        }
    }
    if (isset($_POST['remover'])) {
        removerConvidado();
    }

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
<form method="POST">
        <label for="nome">Nome do Convidado:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Adicionar</button>
    </form>
    <form method="POST">
        <button type="submit" name="remover">Remover Último Convidado</button>
    </form>

    <h2>Convidados:</h2>

    <ul>
        <?php 
        foreach ($_SESSION['convidados'] as $convidado) {
            echo "<li>($convidado) </li>";
        }
        ?>
    </ul>
</body>
</html>