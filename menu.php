	<nav class="nav navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				 <a class="navbar-brand" href="">
				 Hotel Califórnia
					<!-- <img src="img/logo.jpg" alt="logotipo" width="120"/> -->
				</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#meu-responsivo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="meu-responsivo">
				<ul class="nav navbar-nav navbar-right meu-menu">
					<li><a href="index.php">Início</a></li>
					<li><a href="index.php#servicos">Serviços</a></li>
					<li><a href="index.php#novidades">Novidades</a></li>
					<li><a href="index.php#desenvolvedores">Desenvolvedores</a></li>
					<li><a href="index.php#contato">Contato</a></li>
					
<?php
					session_start();
if((!isset ($_SESSION['email']) == true) ){
	unset($_SESSION['email']);
?>
	<li><a href="./login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
	<?php	}else{

		if(($_SESSION['email']) == "pro.infotech9@gmail.com"){
	?>

					<li class="dropdown">
			        	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><strong> Área Administrativa</strong></a>
				       	<ul class="dropdown-menu">
					        <li class="disabled"><a href="./adm-reservas.php"><i class="fa fa-lock" aria-hidden="true"></i> Gerenciar Reservas</a></li>
					        <li><a href="./adm-suites.php"><i class="fa fa-lock" aria-hidden="true"></i> Gerenciar Suites</a></li>
							<li><a href="./adm-usuarios.php"><i class="fa fa-lock" aria-hidden="true"></i> Gerenciar Usuários</a></li>
							<li><a href="./logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Sair</a></li>
				        </ul>
			        </li>
						<?php }else{ ?>
						<li><a href="reservas.php">Solicitar Reserva</a></li>
						<li class="dropdown">
			        	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><strong> Minha Conta</strong></a>
				       	<ul class="dropdown-menu">
					        <li><a href="./meus-dados.php"><i class="fa fa-pencil" aria-hidden="true"></i> Meus Dados</a></li>
					        <li class="disabled"><a href="./minhas-reservas.php"><i class="fa fa-id-card-o" aria-hidden="true"></i> Minha Reservas</a></li>
							<li><a href="./logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Sair</a></li>
				        </ul>
			        </li>
						
						<?php }} ?>
						
				</ul>
			</div>
		</div>
	</nav>