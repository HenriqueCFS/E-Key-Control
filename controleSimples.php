<?php
require('functions.php');
?>
<!doctype html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>Documento sem título</title>
    </head>
    <body>
    	<table border="1">
        	<tr>
        		<td>
                	<h4> Data/Hora</h4>
                
                </td>
                <td>
                	<form action="CadastroUsuario.php">
                    	<select name="labsala">
                        <option value="lab1">Laboratório 1 </option>
                        <option value="lab2">Laboratório 2</option>
                        <option value="lab3">Laboratório 3</option>
                        <option value="lab4">Laboratório 4</option>
                        <option value="lab5">Laboratório 5(Manutenção)</option>
                        <option value="sala1">Sala 1 </option>
                        <option value="sala2">Sala 2 </option>
                        <option value="sala3">Sala 3 </option>
                        <option value="sala4">Sala 4 </option>
                        <option value="sala5">Sala 5 </option>
                        <option value="sala6">Sala 6 </option>
                        <option value="sala7">Sala 7 (Matematica)</option>
                        <option value="sala8">Sala 8 </option>                        
                        <option value="sala9">Sala 9 </option>
                        <option value="sala10">Sala 10(Infermagem) </option>
                        <option value="sala11">Sala 11(Quimica)</option>	
                </td>
                <td>
                    	<select name="Professor" onchange="disciplinaF(this.value)">
                            <?php
                            $echi = bancoConsulta_fetchAll('select * from professor');
                            foreach ($echi as $row):
                            ?>
                            <option value="<?=$row['codP'];?>"><?=$row['nome'];?></option>
                        <?php endforeach;?>
                        </select>
                 
                    
                </td>
                <td>
                	
                		<select name="disciplina" id="disciplina">
                            <option>Disciplina</option>
                        </select>
                   
                </td>
               	<td>
                	<h4>Devolução</h4>
                        	<h4><input type="radio" name="render" value="opc">Sim</h4>

                </td>
                <td>
                	<h4> Data/Hora</h4>
                </td>
        	</tr>
        </table>
        
        
       		<input type="text">
        	<input type="submit" value="Cadastrar Novo Professor" >
        </form>
    </body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>