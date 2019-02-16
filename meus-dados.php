<!DOCTYPE html>
<html>
<?php
	include_once './head.php';
?>
	<body>
	<?php
			include_once './menu.php'; 
			include_once './conexao.php';
			include_once './usuario.php';
	?>
		<div class="container padding-bottom">
			<div class="row padding-bottom">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">Dados Pessoais</h2>
						</div>
						<div class="panel-body">
							<form action="atualizar_usuario.php" method="post">
							<?php
							
								$email = $_SESSION['email'];
								$result = getDadosPessoais($email);
								
								while ($registro = mysqli_fetch_array($result)) {
								if($registro['loginUf'] == 1){
									$uf = "SP";
								}else{
									$uf = "RJ";
								}
							?>
								
								<div class="form-group col-sm-10 margin-top">
									<input type="text" class="form-control" name="nome" value="<?php echo $registro['loginNome'] ?>">
								</div>
								<div class="form-group col-sm-2 margin-top">
									<input type="text" class="form-control" name="id" value="<?php echo $registro['loginID'] ?>" placeholder="*ID" disabled>
								</div>
								<div class="form-group hidden margin-top">
									<input type="text" class="form-control" name="id" value="<?php echo $registro['loginID'] ?>" placeholder="*ID">
								</div>
								<div class="form-group col-sm-6">
									<input type="text" class="form-control" name="rg" value="<?php echo $registro['loginRg'] ?>">
								</div>
								<div class="form-group col-sm-6">
									<input type="text" class="form-control" name="cpf" value="<?php echo $registro['loginCpf'] ?>" >
								</div>
								<div class="form-group col-sm-6">
									<input type="email" class="form-control" name="email" value="<?php echo $registro['loginEmail'] ?>" disabled>
								</div>
								<div class="form-group col-sm-6">
									<input type="password" class="form-control" name="senha" placeholder="Alterar senha (opcional)">
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="tel" value="<?php echo $registro['loginTelefone'] ?>" >
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="cel" value="<?php echo $registro['loginCelular'] ?>" >
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="cep" value="<?php echo $registro['loginCep'] ?>" >
								</div>
								<div class="form-group col-sm-9">
									<input type="text" class="form-control" name="end" value="<?php $end = utf8_decode($registro['loginEndereco']); echo $end; ?>" >
								</div>
								<div class="form-group col-sm-3">
									<input type="text" class="form-control" name="num" value="<?php echo $registro['loginNumero'] ?>" >
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="bai" value="<?php echo $registro['loginBairro'] ?>" >
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="cid" value="<?php echo $registro['loginCidade'] ?>" >
								</div>
								<div class="hidden">
									<input type="text" class="hidden" name="acao" value="0" >
								</div>
								<div class="form-group col-sm-4">
									<select class="form-control" name="uf" >
										<option checked><?php echo $uf ?></option>
									</select>
								</div>
								<?php } ?>
								
								<div class="col-sm-12 text-right pull-right">
									<input type="reset" class="btn btn-secundary btn-md" value="Cancelar" />
									<input type="submit" class="btn btn-default btn-md" value="Salvar Alterações">
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
			include_once './footer.php';
	?>

	</body>
</html>