<?php
	include_once './conexao.php';
	include_once './usuario.php';
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$dif = $_POST['dif'];
	$desc = $_POST['desc'];

	

	if (atualizarSuite($id, $nome, $preco, $dif, $desc)){
	

		
		header('Location: adm-suites.php');
	}
?>