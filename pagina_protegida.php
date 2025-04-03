<?php
if (isset($_POST["enviar"])) {
    $_txtnome = $_POST["txtnome"];
    $_txtsenha = $_POST["txtsenha"];
}
if ($_txtsenha == "dorismaria") {
    echo  "<h2> Bem vindo!</h2>";
} else {
    echo "<h2> Senha Incorreta</h2>";
}

?>

<br><br>
<form action="teste.php" method="post">
    <input type="submit" value="voltar">