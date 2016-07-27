<?php 

include 'funciones.php';

/* Valida la existencia de una sesión activa  */


$sesion=validar_sesion();
$titulo= $_POST['proyecto'];
if ($sesion){
	$usuario=$_SESSION['usuario'];
	$contra=$_SESSION['contra'];
		
	
}
else{
echo "<meta http-equiv='refresh' content='2;URL=index.htm' />

<h1 class='adver'><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;}
$enlace=conectar_base();
	$resultado = mysql_query ("SELECT * FROM estado_proyectos WHERE nom_usua ='$usuario' && titulo='$titulo'", $enlace) or die ("Invalid query: " . mysql_error()) ;
	if($row = mysql_fetch_array($resultado)) 
		{
		
?>
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
<form action="actua3_proyec_mie.php" method="post" name="form1" target="ppal" id="form1">
  <table width="100%" border="0">
    <tr>
      <td colspan="2" id="titulo"><p>Sistema de registro de nuevos proyectos asociados al Observatorio</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td colspan="2">Por favor actualice los datos de los proyectos que se encuentra asesorando dentro del Observatorio Colombiano de Informática educativa:</td>
    </tr>
    <tr>
      <td width="18%">&nbsp;</td>
      <td width="82%">&nbsp;</td>
    </tr>
    <tr>
      <td>Título:</td>
      <td><label for="titulo"></label>
      <input name="titulo" type="text" id="titulo" size="45" value="<?php echo $row['titulo'];?> "  /></td>
    </tr>
    <tr>
      <td>Objetivo General:</td>
      <td><label for="objetivo"></label>
      <textarea name="objetivo" id="objetivo" cols="45" rows="5" contenteditable="true" ><?php echo $row['objetivo'];?> </textarea></td>
    </tr>
    <tr>
      <td>Inicio del proyecto:</td>
      <td><label for="inicio"></label>
      <input name="inicio" type="text" id="inicio" value="<?php echo $row['inicio'];?>" size="15" /></td>
    </tr>
    <tr>
      <td>Fin del proyecto:</td>
      <td><input name="fin" type="text" id="fin" value="<?php echo $row['fin'];?>" size="15" /></td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><p>
        <label>
          <input name="estado" type="radio" id="estado_0" value="1" <?php if ($row['estado']==1) echo"checked=' checked'";?> />
          Formulación</label>
        <br />
        <label>
          <input type="radio" name="estado" value="2"  <?php if ($row['estado']==2) echo"checked=' checked'";?> id="estado_1" />
          Pilotaje</label>
        <br />
        <label>
          <input type="radio" name="estado" value="3" <?php if ($row['estado']==3) echo"checked=' checked'";?>id="estado_2" />
          Desarrollo</label>
        <br />
        <label>
          <input type="radio" name="estado" value="4" <?php if ($row['estado']==4) echo"checked=' checked'";?> id="estado_3" />
          Análisis</label>
        <br />
        <label>
          <input type="radio" name="estado" value="5" <?php if ($row['estado']==5) echo"checked=' checked'";?> id="estado_4" />
          Informe final</label>
        <br />
        <label>
          <input type="radio" name="estado" value="6" <?php if ($row['estado']==6) echo"checked=' checked'";?>id="estado_5" />
          Finalizado</label>
        <br />
        
        <br />
      </p></td>
    </tr>
    <tr>
      <td>Investigador en formación:</td>
      <td><?php echo $row['inves_forma'];?><input name="inves_forma" value="<?php echo $row['inves_forma'];?>" type="hidden" /></td>
    </tr>
    <tr>
      <td>Investigador responsable:</td>
      <td><?php echo $row['inves_respo'];?></td>
    </tr>
    <tr>
      <td>Resumen:</td>
      <td><label for="resumen"></label>
      <textarea name="resumen" id="resumen" cols="45" rows="5"><?php echo $row['resumen'];?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2 id=" align="center"envio" ><input type="submit" name="enviar" id="enviar" value="Actualizar proyecto" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
<?php }?>