<!DOCTYPE html>
<html>

<?php
			include_once './head.php';
?>
<body>
<?php
			include_once './menu.php';
?>
	
	<div class="container tamanho-login">
		<div class="row">
			<div class="container-login">
				<h1 class="text-center login-title">Faça login para acessar o nosso sistema!</h1>
				<div class="account-wall">
					<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
						alt="" />
					<form class="form-signin" action="login_check.php" method="POST">
						<input type="text" class="form-control" name="email" placeholder="E-mail" required autofocus />
						<input type="password" class="form-control" name="senha" placeholder="Senha" required />
						<button class="btn btn-lg btn-primary btn-block" type="submit">
							Entrar</button>
						<label class="checkbox pull-left">
							<input type="checkbox" value="remember-me" />
							Lembrar-me
						</label>
						<a href="#" class="pull-right need-help">Esqueceu sua senha? </a><span class="clearfix"></span>
					</form>
				</div>
				<h5 class="center">Ainda não possui uma conta? <a href="novo-usuario.php" class="text-center">Cadastre-se!</a></h5>
			</div>
		</div>
	</div>
	
	

</body>
</html>