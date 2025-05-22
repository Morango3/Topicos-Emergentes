<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = mysqli_prepare($conexao, "SELECT * FROM contatos WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) == 1) {
        $contato = mysqli_fetch_assoc($resultado);
    } else {
        echo "<p>Contato não encontrado.</p><a href='index.php'>Voltar</a>";
        exit;
    }
} else {
    echo "<p>ID não especificado.</p><a href='index.php'>Voltar</a>";
    exit;
}

if (isset($_POST['Excluir'])) {
    $id = intval($_POST['id']);

    $stmtDel = mysqli_prepare($conexao, "DELETE FROM contatos WHERE id = ?");
    mysqli_stmt_bind_param($stmtDel, "i", $id);

    if (mysqli_stmt_execute($stmtDel)) {
        echo "<p>Contato excluído com sucesso!</p><a href='index.php'>Voltar à lista</a>";
        exit;
    } else {
        echo "<p>Erro ao excluir: " . mysqli_error($conexao) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Excluir Contato</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.4;
        }
        strong {
            color: #007BFF;
        }
        form {
            text-align: center;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 15px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a.cancel-link {
            color: #5bc0de;
            text-decoration: none;
            font-size: 16px;
            vertical-align: middle;
        }
        a.cancel-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Excluir Contato</h2>
        <p>Tem certeza que deseja excluir o contato?<br>
        <strong>
            Nome: <?php echo htmlspecialchars($contato['nome']); ?><br>
            Endereço: <?php echo htmlspecialchars($contato['endereco']); ?><br>
            Telefone: <?php echo htmlspecialchars($contato['telefone']); ?>
        </strong></p>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
            <input type="submit" name="Excluir" value="Excluir">
            <a class="cancel-link" href="index.php">Cancelar</a>
        </form>
    </div>
</body>
</html>
