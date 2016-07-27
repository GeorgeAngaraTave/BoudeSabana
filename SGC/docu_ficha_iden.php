<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>registro de proyectos nuevos</title>
<style type="text/css">
table tr td {
	font-family: Verdana, Geneva, sans-serif;
}
#form1 table tr #titulo {
	font-family: Verdana, Geneva, sans-serif;
}
#form1 table tr #titulo {
	text-align: center;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<?php 

include 'funciones.php';

/* Valida la existencia de una sesión activa  */


$sesion=validar_sesion();
if ($sesion){
	$usuario=$_SESSION['usuario'];
	$contra=$_SESSION['contra'];
	
		
			

}
else{
echo "<meta http-equiv='refresh' content='2;URL=index.htm' />

<h1 class='adver'><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;}

$enlace=conectar_base();
 $resultado = mysql_query ("SELECT * FROM identifica WHERE nom_usua ='$usuario' && estado='0'", $enlace) or die ("Invalid query: " . mysql_error()) ;

?>
		
  <table width="100%" >
    <tr>
      <td align="center" id="titulo"><h2>Documentación de proyectos  del Observatorio Colombiano de Informática Educativa</h2></td>
    </tr>
    
    <tr>
      <td>Por favor seleccione la experiencia que desea documentar.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <form action="docu2_ficha_iden.php" method="post" target="ppal">
    <tr>
      <td>Título de la experiencia: 
        <label for="titulo"></label>
        <select name="titulo" id="titulo">
          <option>Seleccione la experiencia o proyecto</option>
          <?php 
				
		while($row = mysql_fetch_array($resultado)) 
		{
			echo "<option  value= ". $row['titulo']. ">".  $row['titulo']. "</option>";
		} ?>
	  </select>	</td>
         <input type="hidden" value="<?php echo $usuario;?>" name="usuario" />
		  
			<tr>
			  <td align="center"><input type="submit" name="Editar" id="Editar" value="Documentar experiencia" />
		      <input type="reset" name="restablecer" id="restablecer" value="Restablecer" /></td>
	  <tr>
      
    </tr>
	
          
    </form>
    
   
  </table>


</body>
</html>
