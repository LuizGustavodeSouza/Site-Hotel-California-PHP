<?php
	include_once './conexao.php';
	include_once './usuario.php';

$id=$_GET['id'];

deletar_suite($id);

header('Location: adm-suites.php');