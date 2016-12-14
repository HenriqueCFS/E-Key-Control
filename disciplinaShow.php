<?php
require('functions.php');
if(isset($_GET['discod']))
{
	$c = bancoConsulta('select disciplinas_p from professor where codP= '.$_GET['discod']);
	$a = ' where';
	$c = explode(',', $c['disciplinas_p']);
	foreach($c as $dis){
		$a .= ' codD='.$dis.' or';
	}
	$b = rtrim($a, 'or');
	var_dump($b);
	$disc = bancoConsulta_fetchAll('select * from disciplina'.$b);
	foreach($disc as $row){
		echo'<option value="'.$row['codD'].'">'.$row['nome'].'</option>';
	}
	exit;
}
?>