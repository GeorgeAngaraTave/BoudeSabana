<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Quíenes Somos</title>
<style type="text/css">
.fuente {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	text-align: center;
}
</style>
</head>

<body>
<table width="100%" border="0"class="fuente">
  <tr>
    <td width="27%" class="fuente"><a href="../investigacion.htm" target="ppal">Información general</a></td>
    <td width="20%"><a href="investigacion_desarro.php">Investigaciones en desarrollo</a></td>
    <td width="20%"><a href="investigacion_final.php">Investigaciones Finalizadas</a></td>
    <td width="20%"><a href="forma_investiga.php">Formación de investigadores</a></td>
    <td width="13%"><a href="../registro.htm">Contribuir</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="justify"><p>Actualmente se están llevando a cabo las siguientes investigaciones dentro del Observatorio con fines de formación de jovenes investigadores.</p></td></tr><tr><td colspan="5" align="justify"><p>Investigaciones nuevas que están en Fase de Formulación</p>
      <p>&nbsp;</p>
    <p>
      <?php 

include 'funciones.php';

/* Valida la existencia de una sesión activa  */

$enlace=conectar_base();

	$resultado = mysql_query ("SELECT * FROM estado_proyectos WHERE estado ='1'", $enlace) or die ("Invalid query: " . mysql_error()) ;
	while($row = mysql_fetch_array($resultado)) 
		{
			
			echo"
			<table width='100%' >
          <tr>
            <td width='16%' ><b>Titulo:</b></td>
            	<td >" . $row [1] . "</td>
          </tr>
          <tr>
            <td><b>Investigador en Formación:</b></td>
            <td>" . $row [6] . "</td>
          </tr>
          <tr>
            <td><b>Investigador Encargado:</b></td>
            <td>" . $row [7] . "</td>
          </tr>
          <tr>
            <td><b>Objetivo Principal:</b></td>
            <td>" . $row [2] . "</td>
          </tr>
          <tr>
            <td><b>Resumen:</b></td>
            <td>" . $row [8] . "</td>
          </tr>
          <tr>
            <td><b>Finalización:</b>	</td>
            <td>" . $row [4] . "</td>
          </tr>
      
      </table><br>";
		}

?>
    </p>
    </td></tr>
    <tr><td colspan="5" align="justify"><p>Investigaciones  que están en Fase de Pilotaje</p>
      <p>&nbsp;</p>
    <p>
      <?php 

    $resultado = mysql_query ("SELECT * FROM estado_proyectos WHERE estado ='2'", $enlace) or die ("Invalid query: " . mysql_error()) ;
	while($row = mysql_fetch_array($resultado)) 
		{
			
			echo"
			<table width='100%' >
          <tr>
            <td width='16%' ><b>Titulo:</b></td>
            	<td >" . $row [1] . "</td>
          </tr>
          <tr>
            <td><b>Investigador en Formación:</b></td>
            <td>" . $row [6] . "</td>
          </tr>
          <tr>
            <td><b>Investigador Encargado:</b></td>
            <td>" . $row [7] . "</td>
          </tr>
          <tr>
            <td><b>Objetivo Principal:</b></td>
            <td>" . $row [2] . "</td>
          </tr>
          <tr>
            <td><b>Resumen:</b></td>
            <td>" . $row [8] . "</td>
          </tr>
          <tr>
            <td><b>Finalización:</b>	</td>
            <td>" . $row [4] . "</td>
          </tr>
      
      </table><br>";
		}

?>
    </p>
    </td></tr>
    <tr><td colspan="5" align="justify"><p>Investigaciones  que están en Fase de Desarrollo</p>
      <p>&nbsp;</p>
    <p>
      <?php 

    $resultado = mysql_query ("SELECT * FROM estado_proyectos WHERE estado ='3'", $enlace) or die ("Invalid query: " . mysql_error()) ;
	while($row = mysql_fetch_array($resultado)) 
		{
			
			echo"
			<table width='100%' >
          <tr>
            <td width='16%' ><b>Titulo:</b></td>
            	<td >" . $row [1] . "</td>
          </tr>
          <tr>
            <td><b>Investigador en Formación:</b></td>
            <td>" . $row [6] . "</td>
          </tr>
          <tr>
            <td><b>Investigador Encargado:</b></td>
            <td>" . $row [7] . "</td>
          </tr>
          <tr>
            <td><b>Objetivo Principal:</b></td>
            <td>" . $row [2] . "</td>
          </tr>
          <tr>
            <td><b>Resumen:</b></td>
            <td>" . $row [8] . "</td>
          </tr>
          <tr>
            <td><b>Finalización:</b>	</td>
            <td>" . $row [4] . "</td>
          </tr>
      
      </table><br>";
		}

?>
    </p>
    </td></tr>
    <tr><td colspan="5" align="justify"><p>Investigaciones  que están en Fase de Análisis</p>
      <p>&nbsp;</p>
    <p>
      <?php 

    $resultado = mysql_query ("SELECT * FROM estado_proyectos WHERE estado ='4'", $enlace) or die ("Invalid query: " . mysql_error()) ;
	while($row = mysql_fetch_array($resultado)) 
		{
			
			echo"
			<table width='100%' >
          <tr>
            <td width='16%' ><b>Titulo:</b></td>
            	<td >" . $row [1] . "</td>
          </tr>
          <tr>
            <td><b>Investigador en Formación:</b></td>
            <td>" . $row [6] . "</td>
          </tr>
          <tr>
            <td><b>Investigador Encargado:</b></td>
            <td>" . $row [7] . "</td>
          </tr>
          <tr>
            <td><b>Objetivo Principal:</b></td>
            <td>" . $row [2] . "</td>
          </tr>
          <tr>
            <td><b>Resumen:</b></td>
            <td>" . $row [8] . "</td>
          </tr>
          <tr>
            <td><b>Finalización:</b>	</td>
            <td>" . $row [4] . "</td>
          </tr>
      
      </table><br>";
		}

?>
    </p>
    </td></tr>
</table>
<span class="fuente"></span>
</body>
</html>
