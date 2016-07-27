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
if ($sesion){
	$usuario=$_SESSION['usuario'];
	$contra=$_SESSION['contra'];
	
	$tproyecto=$_POST['proyecto']; 
	$area=$_POST['area']; 
	$ambiente=$_POST['ambiente']; 
	$taprendizaje=$_POST['taprendizaje']; 
	$tecnolo=$_POST['tecnolo']; 
	$titulo=$_POST['titulo']; 
	$proyecto=$_POST['proyecto1'];
	$keywords=$_POST['keywords']; 
	$resumen=$_POST['resumen']; 
	$autores=$_POST['autor'];
	$implementacion=$_POST['implemen']; 
	$publicacion=$_POST['publica']; 
	$revista=$_POST['revista']; 
	$ubicacion=$_POST['url']; 
	$estado=$_POST['estado'];

   
$enlace=conectar_base();
//ingresa el nuevo proyecto als sistema
				$sql = "INSERT INTO identifica (nom_usua, tproyecto, area, ambiente, taprendizaje, tecnolo, titulo, proyecto, keywords, resumen, autores, implementacion, publicacion, revista, ubicacion, estado )";
				$sql .= "VALUES ('$usuario', '$tproyecto', '$area', '$ambiente', '$taprendizaje', '$tecnolo', '$titulo', '$proyecto', '$keywords', '$resumen', '$autores', '$implementacion', '$publicacion', '$revista', '$ubicacion', '$estado')";
				$result = mysql_query($sql, $enlace)  or die ("Invalid query: " . mysql_error()) ;
				
				echo" los datos han ingresado de forma adecuada al sistema, gracias por su colaboración";
}
else{
echo "<meta http-equiv='refresh' content='2;URL=index.htm' />

<h1 class='adver'><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;}
		?>
</body>
</html>