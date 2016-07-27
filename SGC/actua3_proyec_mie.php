<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>dsfgdsfgdsfgdfsg</title>
</head>

<body>
<?php 

include 'funciones.php';

/* Valida la existencia de una sesión activa  */


$sesion=validar_sesion();
$titulo= $_POST['proyecto'];
if ($sesion){
	$usuario=$_SESSION['usuario'];
	$contra=$_SESSION['contra'];
	$titulo=$_POST['titulo']; 
	$objetivo=$_POST['objetivo']; 
	$inicio=$_POST['inicio']; 
	$fin=$_POST['fin']; 
	$estado=$_POST['estado']; 
	$inves_forma=$_POST['inves_forma']; 
	$resumen=$_POST['resumen']; 


if ($usuario== "eduque") $inves_respo="Erika Duque";
if ($usuario== "oboude") $inves_respo="Oscar Boude";
if ($usuario== "eestrada") $inves_respo="Erika Estrada";
if ($usuario== "asosa") $inves_respo="Andres Sosa";
if ($usuario== "srestrepo") $inves_respo="Sonia Restrepo";
if ($usuario== "scalderon") $inves_respo="Sonia Calderon";
if ($usuario== "raldana") $inves_respo="Ricardo Aldana";
if ($usuario== "ibettin") $inves_respo="Isbael Bettin";

    $enlace=conectar_base();
	$sql = "UPDATE estado_proyectos SET titulo='$titulo', objetivo='$objetivo', inicio='$inicio', fin='$fin', estado='$estado', resumen='$resumen'   WHERE inves_forma='$inves_forma' && nom_usua='$usuario'";
	$result = mysql_query($sql, $enlace) or die ("Invalid query: " . mysql_error()) ;
   

	
				
				echo"<h2> los datos han sido actualizados de forma adecuada de forma adecuada al sistema, gracias por su colaboración, por favor continue trabajando en el sistema</h2>";
				}
else{
echo "<meta http-equiv='refresh' content='2;URL=index.htm' />

<h1 class='adver'><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;}

		


		?>
</body>
</html>