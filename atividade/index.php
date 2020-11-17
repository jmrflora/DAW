

<?php
include 'header.php';
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}
switch($pagina){
	case 'home': include 'busca_aluno.php'; break;
  case 'tabela': include 'tabela_alunos.php'; break;
  case 'sucesso': echo '<h3>Operação feita com sucesso</h3>';break;
  case 'falha': echo '<h3>Operação falha</h3>';break;

}?>
</body>
</html>
