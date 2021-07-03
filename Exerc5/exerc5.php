<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title> Fundamentos PHP </title>
	<link rel="stylesheet" href="formata-formulario.css">
</head>

<body>
	<h1> Programação web </h1>

	<?php

	$dolar = $_POST["valor"];
	$cotacao = $_POST["valor-cotacao"];


	$conversao = $dolar * $cotacao;

	echo "<p> <b> Resultado: </b>
		<br><br>
		Valor em Reais = <span> $conversao </span> </p>";


?>


	
</body>
</html>