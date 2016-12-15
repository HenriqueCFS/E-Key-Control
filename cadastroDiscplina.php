<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];

    $con = new \PDO("mysql:host=localhost;dbname=Chave", "root" , "etec" )or die("Problemas na Conexão");
    $sql = 'insert into disciplina(nome) values(?)';
    $consulta = $con->prepare($sql);
    $consulta->execute([$nome]);
}


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Disciplina</title>
</head>
<body>
<h1> Cadastro Disciplina</h1>
<form action="#" method="POST">

    <p>Nome da Disciplina *</p>
    <input name="nome" type="text" required>

    <br>
    <br>
    <input type="submit" value="Cadastrar">

    <button type="reset" values="Limpar">Limpar</button>


    <input type="button" onClick="document.location.href='controleSimples.php'" value="Voltar">

</form>


</body>
</html>