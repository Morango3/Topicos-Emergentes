<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
<?php
echo "<br><h1>V1</h1>";
$v1 = range(0, 12);
foreach ($v1 as $chave => $valor) {
    echo "vetor[$chave] = $valor  <br>";
}
echo "<br><h1>V2</h1>";
$v2 = range (0,100,10);
foreach ($v2 as $chave => $valor) {
    echo "vetor[$chave] = $valor  <br>";
}
echo "<br><h1>V3</h1>";
$v3 = range("a","i");
foreach ($v3 as $chave => $valor) {
    echo "vetor[$chave] = $valor  <br>";
}

echo "<br><h1>V4</h1>";
$v4 = range("e","a");
foreach ($v4 as $chave => $valor) {
    echo "vetor[$chave] = $valor  <br>";
}
?>


</body>
</html>