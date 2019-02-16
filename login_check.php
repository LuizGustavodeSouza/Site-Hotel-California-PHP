<?php

	include_once './conexao.php';
	include_once './usuario.php';
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$senha = md5($senha);
	
	if (autenticar($email,$senha)){
			
			
    session_start();
	
    $_SESSION['email'] = $email;
    header('Location: index.php');
	}else{
		echo "<script> alert('Usuario invalido');" .
		"window.location = 'login.php'" .
		"</script>";
	}
?>