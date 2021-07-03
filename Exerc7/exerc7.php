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
	

	//criando constantes para armazenarmos a taxa de desconto e a taxa de acréscimo

	define("DESCONTO", 5/100);
	define("ACRESCIMO", 2/100);

	//recebendo do formulario a informação sobre pagamento com cartão (SIM/NÃO)

	$formaPagamento = $_POST["forma-pagamento"];
	$formaEntrega = $_POST["envio"];

	//*echo "<p> <span> forma de pagamento = $formaPagamento <br> forma de entrega = $formaEntrega </span> </p>";

	//agora testamos se o cliente pagou com cartão

	$desconto = 0;
	$acrescimo = 0;

	if ($formaPagamento == "Sim") {

		$desconto = $valorCompra * DESCONTO;
	}

	//entrega a domicilio

	if ($formaEntrega == "Sim") {

		$acrescimo = $valorCompra * ACRESCIMO;
	}

	$valorFinal = $valorCompra - $desconto + $acrescimo;


	echo "<p> Caro cliente, o valor final da sua compra foi de: <span> R$$valorFinal </span> </p>";

	?>
			
		</fieldset>
	
	</form>

</body>
</html>