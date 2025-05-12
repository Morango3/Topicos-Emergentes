<?php
include('conexao.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM contatos WHERE id = $id"; //selecionar o contato id

  $resultado = mysqli_query($conexao, $sql); //apresentar os resultados do id

  if (mysqli_num_rows($resultado)==1){ 
    $contato = mysqli_fetch_assoc($resultado);
  } else{
    echo "Contato não foi encontrado";
    exit;
  }
}

if(isset($_POST['atualizar'])){ //ao clicar no botão atualizar, vai executar oq esta no if
   $nome = $_POST ['nome'];
   $endereco = $_POST ['endereco'];
   $telefone = $_POST ['telefone'];

   $sql2 = "UPDATE contatos SET nome='$nome', endereco='$endereco', telefone='$telefone' WHERE ID=$id";

   if (mysqli_query($conexao, $sql2)){
    echo "Contato atualizado com sucesso!";
    echo "<br> <a href='index.php'>Voltar</a>";
    exit;
   }else {
    echo "Erro ao atualizar." . mysqli_error($conexao);
   }
}

?>
<h1>Atualizando contatos</h1>
<form method= "post">

Nome:<input type="text" name="nome" value="<?php echo $contato['nome'];?>">
<br>
Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco'];?>">
<br>
Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone'];?>">
<br>
<input type="submit" name="atualizar" value="Atualizar">

</form>

