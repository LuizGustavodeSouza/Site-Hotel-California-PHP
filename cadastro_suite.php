<?php
	include_once './conexao.php';
	include_once './usuario.php';
	
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$dif = $_POST['dif'];
	$desc = $_POST['desc'];

	
	if (novaSuite($nome, $desc, $dif, $preco)){	
	
    header('Location: adm-suites.php');
	
	}else{
	echo "erro ao cadastrar";
	header('Location: adm-suites.php');
	}
?>
	