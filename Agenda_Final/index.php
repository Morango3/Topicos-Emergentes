<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: rgb(76, 119, 175);
            margin: 20px 0;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: rgb(76, 119, 175);
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: rgb(60, 100, 150);
        }

        .lista-contatos {
            max-width: 700px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contato-item {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .contato-item:last-child {
            border-bottom: none;
        }

        .contato-item span {
            display: inline-block;
            margin-right: 10px;
        }

        .contato-item a {
            margin-left: 10px;
            color: rgb(76, 119, 175);
            text-decoration: none;
        }

        .contato-item a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>Cadastrar Contato</h2>

    <form method="post" action="salvar.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone">

        <input type="submit" value="Salvar">
    </form>

    <h2>Lista de Contatos</h2>
    <div class="lista-contatos">
        <?php
        include('conexao.php');

        $sql = "SELECT * FROM contatos ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='contato-item'>
                        <span><strong>Nome:</strong> " . htmlspecialchars($linha['nome']) . "</span>
                        <span><strong>Endereço:</strong> " . htmlspecialchars($linha['endereco']) . "</span>
                        <span><strong>Telefone:</strong> " . htmlspecialchars($linha['telefone']) . "</span>
                        <a href='editar.php?id=" . $linha["id"] . "'>Editar</a>
                        <a href='excluir.php?id=" . $linha["id"] . "'>Excluir</a>
                      </div>";
            }
        } else {
            echo "<p>Nenhum contato encontrado.</p>";
        }
        ?>
    </div>

</body>
</html>