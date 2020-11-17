<?php
include 'db.php';
$query="SELECT * FROM alunos";
$consulta_alunos=mysqli_query($conexao,$query);
?>
<style>
th, td {
padding: 15px;
}
td {

  vertical-align: bottom;
}
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
</style>
<table >
	<thead>
		<tr>
			<th>matricula</th>
			<th>aluno</th>
			<th>cep</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td >'.$linha['matricula'].'</td>';
				echo '<td>'.$linha['nome'].'</td>';
        echo '<td>'.$linha['CEP'].'</td></tr>';
			}
		?>
	</tbody>

</table>
