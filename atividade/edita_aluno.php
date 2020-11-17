<?php
include 'db.php';
if(isset($_GET['mat'])){
  $matricula=$_GET['mat'];
  $query="DELETE FROM `alunos` WHERE matricula=$matricula";
  mysqli_query($conexao,$query);
}else{

  $matricula =$_POST['matricula'];
  $nome =$_POST['nome'];
  $CEP =$_POST['CEP'];
  $query="UPDATE alunos SET nome = '$nome', CEP= '$CEP' WHERE matricula = $matricula";
  //mysqli_query($conexao,$query);

if (mysqli_query($conexao,$query)) {
    header('location:index.php?pagina=sucesso');
} else {
  header('location:index.php?pagina=falha');
}
}
