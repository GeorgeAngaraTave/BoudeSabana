<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>

<body>
<?php 
include 'funciones.php';

/* Valida la existencia de una sesión activa  */


$sesion=validar_sesion();
if ($sesion){
	$usuario=$_SESSION['usuario'];
	$contra=$_SESSION['contra'];
	
	 
	$titulo=$_POST['titulo']; 
	$formacion=$_POST['formacion'];
	$area_dis=$_POST['area_dis']; 
	$enfoque=$_POST['enfoque']; 
	$tic=$_POST['tic'];
	$funcion_tic=$_POST['func_tic']; 
	$poblacion=$_POST['poblacion']; 
	$investiga=$_POST['investiga']; 
	$estudio=$_POST['estudio']; 
	$diseno=$_POST['diseno'];
	$muestra=$_POST['muestra']; 
	$instrumento=$_POST['instrumento']; 
	$resultados=$_POST['resultados']; 
	$conclusiones=$_POST['conclusiones'];
	$cadena=implode(";",$instrumento);
	
   
$enlace=conectar_base();
//ingresa el nuevo proyecto als sistema
				$sql = "INSERT INTO documenta (nom_usua, titulo, formacion, area_dis, enfoque, tic, func_tic, poblacion, investiga, estudio, diseno, muestra, instrumento, resultados, conclusiones )";
				$sql .= "VALUES ('$usuario', '$titulo', '$formacion', '$area_dis', '$enfoque', '$tic', '$funcion_tic', '$poblacion', '$investiga', '$estudio', '$diseno', '$muestra', '$cadena', '$resultados', '$conclusiones')";
				$result = mysql_query($sql, $enlace)  or die ("Invalid query: " . mysql_error()) ;
				
				$sql = "UPDATE identifica SET  estado='1'  WHERE titulo='$titulo' && nom_usua='$usuario'";
	$result = mysql_query($sql, $enlace) or die ("Invalid query: " . mysql_error()) ;
				
				echo" los datos han ingresado de forma adecuada al sistema, gracias por su colaboración";
}
else{
echo "<meta http-equiv='refresh' content='2;URL=index.htm' />

<h1 class='adver'><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;}
		?>
</body>
</html>