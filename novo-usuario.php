<!DOCTYPE html>
<html>
<?php
	include_once './head.php';
?>
<body>
<?php
			include_once './menu.php';
?>

	<div class="container form-cadastro tamanho-login">
		<div class="row form-group ">
			<div class="container-cadastro">
				<h1 class="center">Cadastrar Novo Usuário</h1>
				<div class="col-sm-8 col-sm-offset-2">
				<form class="form-cadastro" method="POST" action="cadastro_usuario.php">
					<div class="form-group col-sm-12">
						<label class="control-label" for="nome">Nome</label><input type="text" class="form-control" id="nome" name="nome" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-6">
						<label class="control-label" for="rg">RG</label><input type="text" class="form-control" id="rg" name="rg" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-6">
						<label class="control-label" for="cpf">CPF</label><input type="text" class="form-control" id="cpf" name="cpf" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-6">
						<label class="control-label" for="email">E-mail</label><input type="email" class="form-control" id="email" name="email" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-6">
						<label class="control-label" for="senha">Senha</label><input type="password" class="form-control" id="senha" name="senha" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-4">
						<label class="control-label" for="tel">Telefone</label><input type="text" class="form-control" id="tel" name="tel" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-4">
						<label class="control-label" for="cel">Celular</label><input type="text" class="form-control" id="cel" name="cel" placeholder="Opcional">
					</div>
					<div class="form-group col-sm-4">
						<label class="control-label" for="cep">CEP</label><input type="text" class="form-control" id="cep" name="cep" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-9">
						<label class="control-label" for="end">Endereço</label><input type="text" class="form-control" id="end" name="end" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-3">
						<label class="control-label" for="num">Nº</label><input type="number" class="form-control" id="num" name="num" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-5">
						<label class="control-label" for="bai">Bairro</label><input type="text" class="form-control" id="bai" name="bai" placeholder="*Obrigatório" required>
					</div>
					<div class="form-group col-sm-5">
						<label class="control-label" for="cid">Cidade</label><input type="text" class="form-control" id="cid" name="cid" placeholder="*Obrigatório" required>
					</div>
					<label class="control-label" for="uf">UF</label><div class="form-group col-sm-2" required>
						<select class="form-control" id="uf" name="uf">
							<option checked>UF</option>
							<option value="1">SP</option>
							<option value="2">RJ</option>
						</select>
					</div>
					<div class="col-sm-12">
						<button type="submit" class="btn btn-success pull-right btn-margin-left">Cadastrar Usuário &raquo</button>
						<button type="reset" class="btn btn-danger pull-right">Limpar Campos</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>