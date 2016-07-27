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
<form action="proce_nuevo_proy.php" method="post" name="form1" target="ppal" id="form1">
  <table width="100%" border="0">
    <tr>
      <td colspan="2" id="titulo"><p>Sistema de registro de nuevos proyectos asociados al Observatorio</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td colspan="2">Por favor ingrese los datos de los proyectos que actualmente se encuentra asesorando dentro del Observatorio Colombiano de Informática educativa:</td>
    </tr>
    <tr>
      <td width="18%">&nbsp;</td>
      <td width="82%">&nbsp;</td>
    </tr>
    <tr>
      <td>Título:</td>
      <td><label for="titulo"></label>
      <input name="titulo" type="text" id="titulo" size="45" /></td>
    </tr>
    <tr>
      <td>Objetivo General:</td>
      <td><label for="objetivo"></label>
      <textarea name="objetivo" id="objetivo" cols="45" rows="5">Ingrese el Objetivo del proyecto</textarea></td>
    </tr>
    <tr>
      <td>Inicio del proyecto:</td>
      <td><label for="inicio"></label>
      <input name="inicio" type="text" id="inicio" value="dd/mm/aa" size="15" /></td>
    </tr>
    <tr>
      <td>Fin del proyecto:</td>
      <td><input name="fin" type="text" id="fin" value="dd/mm/aa" size="15" /></td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><p>
        <label>
          <input type="radio" name="estado" value="1" id="estado_0" />
          Formulación</label>
        <br />
        <label>
          <input type="radio" name="estado" value="2" id="estado_1" />
          Pilotaje</label>
        <br />
        <label>
          <input type="radio" name="estado" value="3" id="estado_2" />
          Desarrollo</label>
        <br />
        <label>
          <input type="radio" name="estado" value="4" id="estado_3" />
          Análisis</label>
        <br />
        <label>
          <input type="radio" name="estado" value="5" id="estado_5" />
          Finalizado</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td>Investigador en formación:</td>
      <td><label for="inves_forma"></label>
      <input name="inves_forma" type="text" id="inves_forma" size="45" /></td>
    </tr>
    <tr>
      <td>Investigador responsable:</td>
      <td><label for="inves_respo"></label>
        <select name="inves_respo" id="inves_respo">
          <option>Seleccione el investigador</option>
          <option value="eduque" selected="selected">Erika Duque</option>
          <option value="eestrada">Erika Estrada</option>
          <option value="scalderon">Sonia Calderon</option>
          <option value="asosa">Andrés Sosa</option>
          <option value="srestrepo">Sonia Restrepo</option>
          <option value="raldana">Ricardo Aldana</option>
          <option value="ibettin">Isabel Bettin</option>
          <option value="oboude">Oscar Boude</option>
      </select></td>
    </tr>
    <tr>
      <td>Resumen:</td>
      <td><label for="resumen"></label>
      <textarea name="resumen" id="resumen" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2 id=" align="center"envio" ><input type="submit" name="enviar" id="enviar" value="Enviar nuevo proyecto" />
      <input type="reset" name="restable" id="restable" value="Restablecer datos" /></td>
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