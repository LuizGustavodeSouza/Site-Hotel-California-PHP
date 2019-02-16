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
			<div class="col-sm-6 border-right">
					<form class="margin-top">
					<h3 class="center">Dados Pessoais</h3>
					<?php 
							
			
			$email = $_SESSION['email'];
        
			$result = getDadosPessoais($email);
			while ($registro = mysqli_fetch_array($result)) {
					?>
					
					<div class="form-group col-sm-12 margin-top">
						<input type="text" class="form-control" name="nome" value="<?php echo $registro['loginNome'] ?>" disabled>
					</div>
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" name="rg" value="<?php echo $registro['loginRg'] ?>" disabled>
					</div>
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" name="cpf" value="<?php echo $registro['loginCpf'] ?>" disabled>
					</div>
					<div class="form-group col-sm-12">
						<input type="email" class="form-control" name="email" value="<?php echo $registro['loginEmail'] ?>" disabled>
					</div>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" name="tel" value="<?php echo $registro['loginTelefone'] ?>" disabled>
					</div>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" name="cel" value="<?php echo $registro['loginCelular'] ?>" disabled>
					</div>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" name="cep" value="<?php echo $registro['loginCep'] ?>" disabled>
					</div>
					<div class="form-group col-sm-9">
						<input type="text" class="form-control" name="end" value="<?php echo $registro['loginEndereco'] ?>" disabled>
					</div>
					<div class="form-group col-sm-3">
						<input type="text" class="form-control" name="num" value="<?php echo $registro['loginNumero'] ?>" disabled>
					</div>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" id="bai" name="bai" value="<?php echo $registro['loginBairro'] ?>" disabled>
					</div>
					<div class="form-group col-sm-4">
						<input type="text" class="form-control" id="cid" name="cid" value="<?php echo $registro['loginCidade'] ?>" disabled>
					</div>
					<div class="form-group col-sm-4">
						<select class="form-control" id="uf" disabled>
							<option checked><?php echo $registro['loginUf'] ?></option>
						</select>
					</div>
					<?php } ?>
				</form>
				<div class="col-xs-12 text-right">
					<a class="btn btn-primary btn-md" href="./meus-dados.php"><i class="fa fa-pencil" aria-hidden="true"></i> Alterar Dados</a>
				</div>
		</div>
			
			<div class="col-sm-6">
				
				<form class="margin-top">
				<h3 class="center">Dados da Reserva</h3>
					<div class="form-group col-sm-12 margin-top">
						<select class="form-control" id="sel1">
							<option checked>Selecione a suite...</option>
							<?php
							$result = getSuites();
							while ($registro = mysqli_fetch_array($result)) {
							?>
							<option><?php echo $registro['suiteNome'] ?></option>
							<?php } ?>
						</select>
					
					</div>
					
					<div class="form-group col-sm-12">
						<input type="number" class="form-control col-sm-3" name="dias" placeholder="*Dias" required>
					</div>
					
						
				</form>
					<div class="col-sm-12 margin-top text-right">
							<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
							<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
							<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
							<input type="hidden" name="code" value="E99EAA2949490A6334CE2FA7D4ECE8C6" />
							<input type="hidden" name="iot" value="button" />
							<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
							</form>
							<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
							<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
						</div>
					<!--<div class=" col-sm-12 pull-right margin-top">
						<p class="right"><strong>Valor final:</strong> R$:100,00 <br>
						<small>ou 10x R$:10,00 sem juros!</small></p>
					</div>-->
			</div>	  
		
		</div>		
	</div>

<?php
		include_once './footer.php';
?>
	
<!-- Modal 
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pull-left" id="exampleModalLongTitle">Solicitar Reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
			<div class="col-sm-6">

					<?php
						$result = getSuiteSelecionada($email);
						while ($registro = mysqli_fetch_array($result)) {
					?>
						<strong>Solicitante: </strong><?php echo $registro['loginNome'] ?> <br />
						<strong>RG: </strong><?php echo $registro['loginRg'] ?> <br />
						<strong>CPF: </strong><?php echo $registro['loginCpf'] ?> <br />
						<strong>E-mail: </strong><?php echo $registro['loginEmail'] ?> <br />
						<strong>Telefone: </strong><?php echo $registro['loginTelefone'] ?> <br />
						<strong>CEP: </strong><?php echo $registro['loginCep'] ?> <br />
						<strong>Endereço: </strong><?php echo $registro['loginEndereco'] ?> <br />
						<strong>Nº: </strong><?php echo $registro['loginNumero'] ?> <br />
						<strong>Bairro: </strong><?php echo $registro['loginBairro'] ?> <br />
						<strong>Cidade: </strong><?php echo $registro['loginCidade'] ?> <br />
						<strong>UF: </strong><?php echo $registro['loginUf'] ?> <br />
					<?php } ?>
			</div>
		</div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Finalizar Reserva</button>
      </div>
    </div>
  </div>
</div>
-->
</body>
</html>