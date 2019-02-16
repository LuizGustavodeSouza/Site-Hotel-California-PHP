<!DOCTYPE html>
<html>
<?php
	include_once './head.php';
?>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php

	include_once './menu.php';
	include_once './apresentacao.php';
	include_once './servicos.php';
	include_once './novidades.php';
	include_once './desenvolvedores.php';
	include_once './contato.php';
	include_once './comentarios.php';
	include_once './footer.php';


?>

</body>
</html>