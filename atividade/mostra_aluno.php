
<?php
include 'header.php';
include 'db.php';
$matricula = $_POST['matricula'];

$query ="SELECT * FROM alunos WHERE matricula=$matricula";
$consulta = mysqli_query($conexao,$query);

if (mysqli_num_rows($consulta) == 0) {
      header('location:index.php?pagina=falha');
}
else {
        // the query returned ATLEAST one row

$linha = mysqli_fetch_array($consulta);
?>

<form action="edita_aluno.php" method="post">
  <label>matricula:<?php echo $matricula?></label><br><br>
  <label>nome:</label>
  <input style="display:none" type="text" name="matricula" value="<?php echo $matricula;?>">
  <input type="text" name="nome" value="<?php echo $linha['nome'];?>"><br><br>
  <label>CEP:</label>
  <input type="text" name="CEP" value="<?php echo $linha['CEP'];?>"><br><br>
  <input type="submit" value="editar">
</form>
ou <a href="edita_aluno.php?mat=<?php echo $matricula;?>">excluir</a>
<?php }
