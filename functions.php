<?php
	function bancoAcao($sqlp){
		$con = new \PDO("mysql:host=localhost;dbname=Chave", "root" , "etec" )or die("Problemas na Conexão");
		$sql = $sqlp;  
    	$consulta = $con->prepare($sql.';'); 
    	$consulta->execute();
	}
	function bancoConsulta($sqlp){
		$con = new \PDO("mysql:host=localhost;dbname=Chave", "root" , "etec" )or die("Problemas na Conexão");
		$sql = $sqlp;  
    	$consulta = $con->prepare($sql.';'); 
    	$consulta->execute();
    	$result= $consulta->fetch();
    	return $result;
	}
	function bancoConsulta_fetchAll($sqlp){
		$con = new \PDO("mysql:host=localhost;dbname=Chave", "root" , "etec" )or die("Problemas na Conexão");
		$sql = $sqlp;  
    	$consulta = $con->prepare($sql.';'); 
    	$consulta->execute();
    	$result= $consulta->fetchAll();
    	return $result;
	}
?>