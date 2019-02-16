<!DOCTYPE html>

<html>

<script>
    function editar(id, nome, rg, cpf, email, senha, tel, cel, cep, end, num, bai, cid, uf) {

        $("[name=id]").val(id);
		$("[name=nome]").val(nome);
		$("[name=rg]").val(rg);
		$("[name=cpf]").val(cpf);
		$("[name=email]").val(email);
		$("[name=tel]").val(tel);
		$("[name=cel]").val(cel);
		$("[name=cep]").val(cep);
		$("[name=end]").val(end);
		$("[name=num]").val(num);
		$("[name=bai]").val(bai);
		$("[name=cid]").val(cid);
		$("[name=uf]").val(uf);
		if (uf == 1){
		
		var ufa = SP;
		}else{
		var ufa = RJ;
		}
		document.getElementById('estado').value = ufa;
    }
</script>
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
			<div class="row">
				<?php
					$result = getUsuarios();
					while ($registro = mysqli_fetch_array($result)) {
					
					$id = $registro['loginID'];
					$nome = ($registro['loginNome']);
					$rg = $registro['loginRg'];
					$cpf = $registro['loginCpf'];
					$email = $registro['loginEmail'];
					$senha = $registro['loginSenha'];
					$tel = $registro['loginTelefone'];
					$cel = $registro['loginCelular'];
					$cep = $registro['loginCep'];
					$end = $registro['loginEndereco'];
					$num = $registro['loginNumero'];
					$bai = $registro['loginBairro'];
					$cid = $registro['loginCidade'];
					$uf = $registro['loginUf'];
					
				?>
				<div class="col-sm-4 col-md-3">
					<div class="thumbnail padding-bottom">
						  <img src="img/user.png" alt="User">
						  <div class="caption">
							<h3><?php echo $nome ?></h3>
							<p><strong>E-mail:</strong> <?php echo $email ?></p>
							<p><strong>Telefone:</strong> <?php echo $tel ?></p>
							<?php if($id != 1){ ?>
							<div class="col-sm-12 text-right pull-right">
									<a href="excluir_usuario.php?id=<?php echo $id ?>" class="btn btn-danger btn-md">Deletar</a>
									<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModalLong2" onclick="<?php echo "editar('$id','$nome','$rg','$cpf','$email','$senha','$tel','$cel','$cep','$end','$num','$bai','$cid','$uf')"; ?>">Editar</button>
							</div>
							<?php } ?>
						  </div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	<?php
			include_once './footer.php';
	?>
	
			<!-- Modal EDITAR -->
		<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title pull-left" id="exampleModalLongTitle">Editar Usuário</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<form action="atualizar_usuario.php" method="post">
								
								<div class="form-group col-sm-10 margin-top">
									<input type="text" class="form-control" name="nome" id="nome">
								</div>
								<div class="form-group col-sm-2 margin-top">
									<input type="text" class="form-control" name="id" placeholder="*ID">
								</div>
								<div class="form-group col-sm-6">
									<input type="text" class="form-control" name="rg">
								</div>
								<div class="form-group col-sm-6">
									<input type="text" class="form-control" name="cpf">
								</div>
								<div class="form-group col-sm-6">
									<input type="email" class="form-control" name="email"  disabled>
								</div>
								<div class="form-group col-sm-6">
									<input type="password" class="form-control" name="senha" placeholder="Alterar senha (opcional)">
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="tel">
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="cel">
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="cep">
								</div>
								<div class="form-group col-sm-9">
									<input type="text" class="form-control" name="end">
								</div>
								<div class="form-group col-sm-3">
									<input type="text" class="form-control" name="num">
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="bai">
								</div>
								<div class="form-group col-sm-4">
									<input type="text" class="form-control" name="cid">
								</div>
								<div class="form-group col-sm-4">
									<select class="form-control" name="uf" id="estado" >
										<option value="1">SP</option>
										<option value="2">RJ</option>
									</select>
								</div>
								<div class="hidden">
									<input type="text" class="hidden" name="acao" value="adm" >
								</div>
									
								<div class="col-sm-12 text-right pull-right">
									<input type="reset" class="btn btn-secundary btn-md" class="close" data-dismiss="modal" aria-label="Close" value="Cancelar" />
									<input type="submit" class="btn btn-default btn-md" value="Salvar Alterações">
								</div>
								
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>