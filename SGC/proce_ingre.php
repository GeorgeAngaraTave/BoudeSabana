<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>

<body>
<?php 
include 'funciones.php';
	
$sesion=validar_sesion();
echo $sesion;
if(!$sesion)
{
	
valida_ingre_usuario();
		
}
else
{
	if (valida_ingre_usuario())
	{
echo "<meta http-equiv='refresh' content='2;URL=./../index.htm' />
<h1 ><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;
	}
} 
?>

</body>
</html>