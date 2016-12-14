<?php
if(isset($_POST['logoff'])){
	session_start();
	session_destroy();
}
session_start();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
	<h1 class="hero-unit col-md-offset-5"> OLÁ MUNDO! </h1>
	<?php if($_SESSION['nivel'] == 1){
		echo'Permissão <b>Randal</b><br/>';}?>
	<form id="login" name="login" method="POST" action="login.php">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<label for="name">Usuário: </label>
				<input name="usuario" id="usuario" type="text"/>
			</div>
			<div class="col-md-3">
				<label for="senha">Senha: </label>
				<input type="password" id="senha" name="senha"/>
			</div>
		</div>
		<br/>
		<br/>
		<hr/>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" class="btn btn-secondary" value="logar"/>
			</div>
		</div>
	</form>
	<form id="login" name="login" method="POST" action="index.php">
		<input type="submit" class="btn btn-secondary" name="logoff" id="logoff" value="logoff"/>
	</form>
</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>