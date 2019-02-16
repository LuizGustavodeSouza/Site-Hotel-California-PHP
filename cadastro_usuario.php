<?php
	include_once './conexao.php';
	include_once './usuario.php';
	
	$nome = $_POST['nome'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];
	$cep = $_POST['cep'];
	$end = $_POST['end'];
	$num = $_POST['num'];
	$bai = $_POST['bai'];
	$cid = $_POST['cid'];
	$uf = $_POST['uf'];
	
	$senha = md5($senha);
	
	if (novoUsuario($nome, $rg, $cpf, $email, $senha, $tel, $cel, $cep, $end, $num, $bai, $cid, $uf)){	
	
    header('Location: index.php');
	
	}else{
	echo "erro ao cadastrar";
	header('Location: novo-usuario.php');
	}
?>
	