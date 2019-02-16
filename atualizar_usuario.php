<?php
	include_once './conexao.php';
	include_once './usuario.php';
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];
	$cep = $_POST['cep'];
	$end = $_POST['end'];
	$num = $_POST['num'];
	$bai = $_POST['bai'];
	$cid = $_POST['cid'];
	$uf = $_POST['uf'];
	$acao = $_POST['acao'];
	

	if (atualizarUsuario($id, $nome, $rg, $cpf, $senha, $tel, $cel, $cep, $end, $num, $bai, $cid, $uf)){
	

		if($acao == "adm"){
			header('Location: adm-usuarios.php');
		}else{
			header('Location: meus-dados.php');
		}
		
	}
?>