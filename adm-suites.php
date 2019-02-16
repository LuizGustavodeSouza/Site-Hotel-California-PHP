<!DOCTYPE html>
<html>
<script>
    function editar(id, nome, preco, dif, desc) {

        $("[name=id]").val(id);
		$("[name=nome]").val(nome);
		$("[name=preco]").val(preco);
		$("[name=dif]").val(dif);
		$("[name=desc]").val(desc);


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
		<div class="container">
			<div class="row col-sm-12">
				<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModalLong">Nova Suite</button>
			</div>
			<div class="row">
				<?php
					$result = getSuites();
					while ($registro = mysqli_fetch_array($result)) {
					
					$id = $registro['suiteID'];
					$nome = $registro['suiteNome'];
					$preco = $registro['suitePreco'];
					$dif = $registro['suiteDif'];
					$desc = $registro['suiteDesc'];
					
				?>
				<div class="col-sm-4 col-md-3 margin-top">
					<div class="thumbnail padding-bottom">
						  <img src="img/suite.jpg" alt="Imagem da suite">
						  <div class="caption">
							<h3><?php echo $registro['suiteNome'] ?></h3>
							<p><strong>Descrição:</strong> <?php echo $registro['suiteDesc'] ?></p>
							<p><strong>Diferencial: </strong> <?php echo $registro['suiteDif'] ?></p>
							<p><strong>R$: </strong> <?php echo $registro['suitePreco'] ?></p>
							<div class="col-sm-12 text-right pull-right">
									<a href="excluir_suite.php?id=<?php echo $registro['suiteID'] ?>" class="btn btn-danger btn-md">Deletar</a>
									<button type="button" onclick="<?php echo "editar('$id','$nome','$preco','$dif','$desc')"; ?>" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModalLong2">Editar</button>
							</div>
						  </div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	<?php
			include_once './footer.php';
	?>
	
	
	<!-- Modal CADASTRAR NOVO -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title pull-left" id="exampleModalLongTitle">Cadastrar Suite</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<form action="cadastro_suite.php" method="post">
									<div class="form-group col-sm-9">
										<input type="text" class="form-control" name="nome" placeholder="*Nome">
									</div>
									<div class="form-group col-sm-3">
										<input type="text" class="form-control" name="preco" placeholder="*R$">
									</div>
									<div class="form-group col-sm-12">
										<input type="text" class="form-control" name="dif" placeholder="*Diferencial">
									</div>
									<div class="form-group col-sm-12">
										<textarea class="form-control" rows="5" id="comment" name="desc" placeholder="*Descrição"></textarea>
									</div>
									<div class="col-sm-12 text-right">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
										<button type="submit" class="btn btn-success">Cadastrar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal EDITAR -->
		<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title pull-left" id="exampleModalLongTitle">Editar Suite</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<form action="atualizar_suite.php" method="post">
									<div class="form-group col-sm-9">
										<input type="text" class="hidden" name="id">
									</div>
									<div class="form-group col-sm-9">
										<input type="text" class="form-control" name="nome" placeholder="*Nome">
									</div>
									<div class="form-group col-sm-3">
										<input type="text" class="form-control" name="preco" placeholder="*R$">
									</div>
									<div class="form-group col-sm-12">
										<input type="text" class="form-control" name="dif" placeholder="*Diferencial">
									</div>
									<div class="form-group col-sm-12">
										<textarea class="form-control" rows="5" id="desc" name="desc" placeholder="*Descrição"></textarea>
									</div>
									<div class="col-sm-12 text-right">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
										<button type="submit" class="btn btn-success">Salvar Alterações</button>
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