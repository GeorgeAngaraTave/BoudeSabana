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
 $resultado = mysql_query ("SELECT * FROM estado_proyectos WHERE nom_usua ='$usuario'", $enlace) or die ("Invalid query: " . mysql_error()) ;

?>
		
  <table width="100%" >
    <tr>
      <td align="center" id="titulo"><p><strong>Sistema de registro de nuevos proyectos asociados al Observatorio</strong></p></td>
    </tr>
    
    <tr>
      <td>Por favor seleccione el proyecto a su cargo que desea actualizar.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <form action="actua2_proyec_mie.php" method="post" target="ppal">
    <tr>
      <td>Título del proyecto: 
        <label for="proyecto"></label>
        <select name="proyecto" id="proyecto">
          <option  selected="selected">Seleccione el proyecto</option>
          <?php 
				
		while($row = mysql_fetch_array($resultado)) 
		{
			echo "<option  value= ". $row['titulo']. ">".  $row['titulo']. "</option>";
		} ?>
		</select>	</td>
         <input type="hidden" value="<?php echo $usuario;?>" name="usuario" />
		  
			<tr>
			  <td align="center"><input type="submit" name="Editar" id="Editar" value="Editar Proyecto" />
		      <input type="reset" name="restablecer" id="restablecer" value="Restablecer" /></td>
	  <tr>
      
    </tr>
	
          
    </form>
    
   
  </table>


</body>
</html>
