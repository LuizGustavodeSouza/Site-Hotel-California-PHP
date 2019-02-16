<?php
	include_once './conexao.php';
	include_once './usuario.php';

$id=$_GET['id'];

deletar_usuario($id);

header('Location: adm-usuarios.php');