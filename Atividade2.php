<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
<?php 
echo "<br><h1>V1</h1>";
$v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
foreach ($v1 as $chave => $valor) {
    echo "Chave: [$chave] - Valor: [$valor] <br>";
}
echo "<br><h1>V2</h1>";
$v2 = array('a' => 8, 'b' => 9, 'd' => 6, 'c' => 2, 'e' => 5);
foreach ($v2 as $chave => $valor) {
    echo "Chave: [$chave]- Valor:[$valor] <br>";
}
echo "<br><h1>V3</h1>";
$v3 = array(
    "rg" => "00.000.00- -X",
    "cpf" => "000.000.000- -00",
    "cartao de credito" => 12345
);
foreach ($v3 as $chave => $valor) {
    echo "Chave:[$chave]- Valor:[$valor]<br>";
}

echo "<br><h1>chamada</h1>";
$chamada = array(
    "aluno1" => "alberto",
    "aluno3" => "bianca",
    "aluno5" => "carlos",
    "aluno24" => "maria"
);
foreach ($chamada as $chave => $valor) {
    echo "Chave:[$chave]- Valor:[$valor]<br>";
}
?>
</body>
</html>