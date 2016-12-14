<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nomep = $_POST['nome'];
    $i =  1;
	$disciplinas_p = $_POST['codD'].',';
	while($i <= $_POST['htmlcod']){
		$nome = 'codD'.$i;
		$disciplinas_p .= $_POST[$nome];
		$disciplinas_p .= ',';
		$i++;
		var_dump($disciplinas_p);
		}
	$disciplinas_p = rtrim($disciplinas_p, ',');
	var_dump($disciplinas_p);
    $con = new \PDO("mysql:host=localhost;dbname=Chave", "root" , "etec" )or die("Problemas na Conexão");
    $sql = 'insert into professor (nome, disciplinas_p) values(?,?)';
    $consulta = $con->prepare($sql);
    $consulta->execute([$nomep,$disciplinas_p]);
}$con = new \PDO("mysql:host=localhost;dbname=Chave", "root" , "etec" )or die("Problemas na Conexão");
$sql = 'select * from disciplina';
$consulta = $con->prepare($sql);
$consulta->execute();
$resultado = $consulta->fetchAll();
$array_cod = [];
$array_nome = [];
foreach($resultado as $row){
	array_push($array_cod,$row['codD']);
	array_push($array_nome,$row['nome']);
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Usuaraio</title>
</head>
<body>

<h1>Cadastro Professor</h1>
<form action="#" method="POST">

    <p>Nome do Professor *</p>
    <input name="nome" type="text" required>
	
    
    <p>Disciplina *</p>
    <select id="codD" name="codD">
        <option >Disciplina</option>
        <?php $strd = '';foreach($resultado as $row){
            $strd .= strval('<option value="'.$row['codD'].'">'.$row['nome'].'</option>');
		}
		echo $strd;
        ?>
		
		
        
    </select>
    <script>
	discid = 0;
	var strdis = '<?=$strd?>';
	function mostrarDis(){ 
		discid++;
		select_name = 'codD'+discid;
		document.getElementById('mdd').innerHTML += "<select name="+select_name+" id="+select_name+"></select><br/>";
		document.getElementById(select_name).innerHTML = strdis;
		document.getElementById('htmlcod').value = discid;	
	}
    </script>
    <button type="button" onClick="mostrarDis()" > + </button>
    <div id="mdd">
    	
    </div>
    <input type="hidden" name="htmlcod" id="htmlcod"/>
	
    <br>
    <br>
    
	
    <input type="submit" value="Cadastrar">

    <button type="reset" values="Limpar">Limpar</button>


    <input type="button" onClick="document.location.href='controleSimples.php'" value="Voltar">

</form>
</body>
</html>

