<?php
	include_once './conexao.php';
	include_once './usuario.php';
	
	$suite = $_POST['suite'];
	$dias = $_POST['dias'];
	$pagamento = $_POST['pagamento'];
	$status = "Aguardando Pagamento";
	

	
	if (novaReserva($suite, $preco, $dias, $preco)){	
	
    header('Location: adm-suites.php');
	
	}else{
	echo "erro ao cadastrar";
	header('Location: adm-suites.php');
	}
?>