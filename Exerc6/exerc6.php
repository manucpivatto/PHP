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


$valorCompra = $_POST["valor-compra"];
$porcentagemVendedor = $_POST["porcentagem-vendedor"];


$valorComissao = $valorCompra * $porcentagemVendedor/100;

echo "<p> Valor da Comissão = <span> R$$valorComissao </span> </p>";
?>
	
		
</body>
</html>

