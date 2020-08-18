
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Document</title>
</head>
<body>
	
<form method="get" >
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>

  <label for="date">Data de nascimento:</label><br>
  <input type="number" id="date" name="date" max="2019"><br>

  <input type="submit" value="concluir">
</form>
	
<?php
if(isset($_GET['fname']))
{

$nome = $_GET['fname'];
$data = $_GET['date'];

//echo $nome."<br>";
//echo $data;

$num =(int)$data;

$idade = 2020-($num);

echo "<br>sua idade:".$idade;
}

?>
</body>
</html>