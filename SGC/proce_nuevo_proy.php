<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>dsfgdsfgdsfgdfsg</title>
</head>

<body>
<?php 

$titulo=$_POST['titulo']; 
$objetivo=$_POST['objetivo']; 
$inicio=$_POST['inicio']; 
$fin=$_POST['fin']; 
$estado=$_POST['estado']; 
$inves_forma=$_POST['inves_forma']; 
$usuario=$_POST['inves_respo'];

$resumen=$_POST['resumen']; 


if ($usuario== "eduque") $inves_respo="Erika Duque";
if ($usuario== "oboude") $inves_respo="Oscar Boude";
if ($usuario== "eestrada") $inves_respo="Erika Estrada";
if ($usuario== "asosa") $inves_respo="Andres Sosa";
if ($usuario== "srestrepo") $inves_respo="Sonia Restrepo";
if ($usuario== "scalderon") $inves_respo="Sonia Calderon";
if ($usuario== "raldana") $inves_respo="Ricardo Aldana";
if ($usuario== "ibettin") $inves_respo="Isbael Bettin";

    
   
$link = mysql_connect('localhost', 'root', 'root');
mysql_select_db('ocie', $link);
//ingresa el nuevo proyecto als sistema
				$sql = "INSERT INTO estado_proyectos (titulo, objetivo, inicio, fin, estado, inves_forma, inves_respo, resumen, nom_usua )";
				$sql .= "VALUES ('$titulo', '$objetivo', '$inicio', '$fin', '$estado', '$inves_forma', '$inves_respo', '$resumen', '$usuario')";
				$result = mysql_query($sql, $link)  or die ("Invalid query: " . mysql_error()) ;
				
				echo" los datos han ingresado de forma adecuada al sistema, gracias por su colaboración";
		?>
</body>
</html>