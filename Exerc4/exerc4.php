<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title> Fundamentos PHP </title>
	<link rel="stylesheet" href="formata-formulario.css">
</head>

<body>
	<h1> Programação web</h1>

<?php 

$celsius = $_POST["temperatura"];
$fahreneit = $_POST["temperatura"];


	$celsius = ($fahreneit-32)*5/9;



echo "<p> <b> Resultado: </b> <br>
		Valor da temperatura em Fahreneit = <span>  $fahreneit °F </span> <br>
		Valor da temperatura em Celsius = <span> $celsius °C </span> </p>";


?>
	
</body>
</html>

