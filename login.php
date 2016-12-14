<?php
	$usuario = $_POST['usuario'];
	$senha_enc = md5($_POST['senha']);

	include('banco.php');
	$con = new \PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass )or die("Problemas na Conexão");
	$sql = "SELECT * FROM login WHERE usuario='$usuario' and senha='$senha_enc' LIMIT 1";
    $consulta = $con->prepare($sql);
    $consulta->execute();      
    $result = $consulta->fetch();
    if(count($result) > 0){
    	echo '<script type="text/javascript">alert("Usuário '.$result['usuario'].' logado.")</script>';
    	session_start();
    	$_SESSION['usuario'] = $result['usuario'];
    	$_SESSION['nivel'] = $result['codN'];
    	var_dump($result);
    	var_dump($usuario);
    	var_dump($senha_enc);
        heander('Location:index.html');
    }else{
    	echo '<script type="text/javascript">alert("senha incorreta!")</script>';
    	var_dump($result);
    	var_dump($usuario);
    	var_dump($senha_enc);

    }
