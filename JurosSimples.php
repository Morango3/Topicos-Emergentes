<?php
$valoresParcelas = [];
$montante = 0;
$media = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $divida = floatval($_POST['divida']);
    $juros = floatval($_POST['juros']) / 100;
    $parcelas = intval($_POST['parcelas']);
    $montante = $divida * (1 + $juros * $parcelas);
    $media = $montante / $parcelas;
    for ($i = 1; $i <= $parcelas; $i++) {
        $valoresParcelas[] = $media;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
<form method="post">
        <label>Dívida:</label>
        <input type="number" name="divida" step="0.01" required><br><br>

        <label>Juros (% a.m.):</label>
        <input type="number" name="juros" step="0.01" required><br><br>

        <label>Parcelas:</label>
        <input type="number" name="parcelas" required><br><br>

        <button type="submit">Processar</button>
    </form>
    <?php if (!empty($valoresParcelas)): ?>
        <h3>Resultado:</h3>
        <table border="1" cellpadding="5">
            <tr><th>Parcela</th><th>Valor</th></tr>
            <?php foreach ($valoresParcelas as $indice => $valor): ?>
                <tr>
                    <td><?= $indice + 1 ?></td>
                    <td><?= number_format($valor, 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td><strong>Montante</strong></td>
                <td><strong><?= number_format($montante, 2, ',', '.') ?></strong></td>
            </tr>
            <tr>
                <td><strong>Média</strong></td>
                <td><strong><?= number_format($media, 2, ',', '.') ?></strong></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>