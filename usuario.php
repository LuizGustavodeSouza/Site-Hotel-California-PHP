<?php 

	function autenticar($email, $senha){
		$sql = "SELECT * FROM login "
		. "WHERE loginEmail='" . $email . "'" 
		. " AND loginSenha='" . $senha . "'";
	
	$conn = conectar();
	
	$result = mysqli_query($conn, $sql);
	
	desconectar($conn);
	
	return mysqli_num_rows($result);
	}

	
	function usuarios(){
		$sql = "SELECT * FROM login";
		
		$conn = conectar();
		
		$result = mysqli_query($conn, $sql);
		
		desconectar($conn);
		
		return $result;
	}
	
	function getDadosPessoais($email){
		$sql = "SELECT * FROM login WHERE loginEmail='" . $email . "'";
		
		$conn = conectar();
		
		$result = mysqli_query($conn, $sql);
		
		desconectar($conn);
		
		return $result;	
	}
	
	function getUsuarios(){
	
		$sql = "SELECT * FROM login";
		
		$conn = conectar();
		
		$result = mysqli_query($conn, $sql);
		
		desconectar($conn);
		
		return $result;
	
	}
	
	function getSuites(){
	
		$sql = "SELECT * FROM suite";
		
		$conn = conectar();
		
		$result = mysqli_query($conn, $sql);
		
		desconectar($conn);
		
		return $result;
	
	}
	
	
	function novoUsuario($nome, $rg, $cpf, $email, $senha, $tel, $cel, $cep, $end, $num, $bai, $cid, $uf){
	
	$sql = "INSERT INTO login (loginID, loginNome, loginRg, loginCpf, loginEmail, loginSenha, loginTelefone, loginCelular, loginCep, loginEndereco, loginNumero, loginBairro, loginCidade, loginUf)"
	. " VALUES (null, '$nome', '$rg', '$cpf', '$email', '$senha', '$tel', '$cel', '$cep', '$end', '$num', '$bai', '$cid', '$uf')";
	
	$conn = conectar();
	
	$cadastro = mysqli_query($conn, $sql);
	
	desconectar($conn);
	
	session_start();
	
    $_SESSION['email'] = $email;
	$_SESSION['usuario'] = $nome;
	
	return true;
	
	}
	
	function novaSuite($nome, $desc, $dif, $preco){
	
	$sql = "INSERT INTO suite (suiteID, suiteNome, suiteDesc, suiteDif, suitePreco, suiteDisp)"
	. " VALUES (null, '$nome', '$desc', '$dif', '$preco', '1')";
	
	$conn = conectar();
	
	$cadastro = mysqli_query($conn, $sql);
	
	desconectar($conn);
	
	session_start();
	
	return true;
	
	}
	
	function atualizarUsuario($id, $nome, $rg, $cpf, $senha, $tel, $cel, $cep, $end, $num, $bai, $cid, $uf){
	
	if ($senha){
		$sn = md5($senha);
	
	$sql = "UPDATE login SET loginNome='$nome', loginRg='$rg', loginCpf='$cpf', loginSenha='$sn', loginTelefone='$tel', loginCelular='$cel', loginCep='$cep', loginEndereco='$end', loginNumero='$num', loginBairro='$bai', loginCidade='$cid', loginUf='$uf' where loginID=$id";
	
	}else{
		$sql = "UPDATE login SET loginNome='$nome', loginRg='$rg', loginCpf='$cpf', loginTelefone='$tel', loginCelular='$cel', loginCep='$cep', loginEndereco='$end', loginNumero='$num', loginBairro='$bai', loginCidade='$cid', loginUf='$uf' where loginID=$id";
	}
	$conn = conectar();
	$atualizar = mysqli_query($conn, $sql);
	desconectar($conn);
	return $atualizar;
	
	}
	
	function atualizarSuite($id, $nome, $preco, $dif, $desc){
	$sql = "UPDATE suite SET suiteNome='$nome', suiteDesc='$desc', suitePreco='$preco', suiteDif='$dif' where suiteID=$id";
		
	$conn = conectar();
	$atualizar = mysqli_query($conn, $sql);
	desconectar($conn);

	return $atualizar;
	}
	
	function deletar_suite($id) {
    $sql = "DELETE FROM suite "
            . "WHERE suiteID='" . $id . "'";

    $conn = conectar();

    $result = mysqli_query($conn, $sql);

    desconectar($conn);

    return $result;
}
	
	function deletar_usuario($id) {
    $sql = "DELETE FROM login "
            . "WHERE loginID='" . $id . "'";

    $conn = conectar();

    $result = mysqli_query($conn, $sql);

    desconectar($conn);

    return $result;
}	
	?>