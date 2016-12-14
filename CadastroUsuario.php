<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nome = $_POST['nome'];
		$codD = $_POST['codD'];
	
	$con = new \PDO("mysql:host=localhost;dbname=Chave", "root" , "etec" )or die("Problemas na Conexão");
	$sql = 'insert into professor (nome, codD) values(?,?)';   
    $consulta = $con->prepare($sql); 
    $consulta->execute([$nome,$codD]);
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro Usuaraio</title>
    </head>
    <body>
    
    	<h1>Cadastro usuario</h1>
    	<form action="#" method="POST">
        	
        	<p>Nome do Professor *</p>
        	<input name="nome" type="text" required>
            
            <p>Disciplina *</p>
            <select name="codD">
            	<option value="1">Discplina</option>
            </select>
           	<br>
            <br>
        	<input type="submit" value="Cadastrar">
            
            <button type="reset" values="Limpar">Limpar</button>
            
            
            <input type="button" onClick="document.location.href='controleSimples.php'" value="Voltar"> 
            
        </form>
    </body>
</html>
