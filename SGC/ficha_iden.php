

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ficha de Identificación</title>
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
?>


<form id="form1" name="form1" method="post" action="proce_ficha_iden.php">
  <table width="100%" border="0">
    <tr>
      <td colspan="2" align="center"><h2>Ficha de identificación de proyectos  del Observatorio Colombiano de Informática Educativa</h2></td>
    </tr>
    <tr>
      <td colspan="2" align="justify"><p>Por favor llene los campos que se indican a continuación para realizar la identificación de las publicaciones que hay sobre experiencias, investigaciones y proyectos que involucren a la Informática educativa en el país.<br />
      </p></td>
    </tr>
    <tr>
      <td colspan="2"><strong>Tipo de Proyecto</strong><span class="ss-form-entry">
        <label class="ss-q-title" for="entry_2"><span class="ss-required-asterisk"><br />
        *</span></label>
        <label class="ss-q-help" for="entry_2">Indique el tipo de proyecto al que pertenece el documento que va a ingresar al sistema</label>
        .
      </span></td>
    </tr>
    <tr>
      <td colspan="2"><p>
        <label>
          <input type="radio" name="proyecto" value="1" id="proyecto_0" />
          Investigación</label>
        <br />
        <label>
          <input type="radio" name="proyecto" value="2" id="proyecto_1" />
          Experiencia Docente</label>
        <br />
        <label>
          <input type="radio" name="proyecto" value="3" id="proyecto_2" />
          Experiencia Privada</label>
        <br />
        <label>
          <input type="radio" name="proyecto" value="4" id="proyecto_3" />
          Proyecto Oficial</label>
        <br />
        <label>
          <input type="radio" name="proyecto" value="5" id="proyecto_4" />
          Iniciativa mixta (Oficial y Privada)</label>
        <br />
        <label>
          <input type="radio" name="proyecto" value="6" id="proyecto_5" />
          Otro tipo  de experiencia</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td width="17%">&nbsp;</td>
      <td width="83%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div>
          <div>
            <div class="ss-form-entry">
              <label for="entry_6"><strong>&Aacute;rea de la Inform&aacute;tica educativa a la cual pertenece el proyecto</strong></label>
              .
              <label for="entry_6"><br />
              *</label>
              <label for="entry_6">Indique cual  de las siguientes categor&iacute;as es las m&aacute;s apropiada, para clasificar la tem&aacute;tica central de este proyecto</label>.
              <br />
            </div>
          </div>
        </div></td>
    </tr>
    <tr>
      <td colspan="2"><p>
        <label>
          <input type="radio" name="area" value="1" id="area_0" />
          Ambientes de Aprendizaje</label>
        <br />
        <label>
          <input type="radio" name="area" value="2" id="area_1" />
          Materiales o Recursos Educativos</label>
        <br />
        <label>
          <input type="radio" name="area" value="3" id="area_2" />
          Prácticas Educativas Abiertas</label>
        <br />
        <label>
          <input type="radio" name="area" value="4" id="area_3" />
          Tecnologías Emergentes</label>
        
        <br />
        <label>
          <input type="radio" name="area" value="5" id="area_4" />
          Innovación Educativa</label>
        <br />
        <label>
          <input type="radio" name="area" value="6" id="area_5" />
          Gestión </label>
        de la Integración de TIC</p>
        <p><br />
          <br />
      </p></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Tipo de Ambiente de Aprendizaje utilizado.</strong></p>
      <p>
<label for="entry_6">*</label>
      <label for="entry_6">Indique cual  de las siguientes categor&iacute;as es las m&aacute;s apropiada, para clasificar la tem&aacute;tica central de este proyecto</label>. </p></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="radio" name="ambiente" value="1"  />
        Ambientes presenciales de aprendizaje</label>
        <br />
        <label>
          <input type="radio" name="ambiente" value="2"  />
          Ambientes virtuales de Aprendizaje</label>
        <br />
        <label>
          <input type="radio" name="ambiente" value="3"/>
          Ambientes mixtos de Aprendizaje</label>
        <br />
        <label>
          <input type="radio" name="ambiente" value="4"  />
      Ambientes personales de Aprendizaje<br />
        </label>
        <label>
          <input type="radio" name="ambiente" value="5"  />
      Ambientes Emergentes de Aprendizaje<br />
        </label></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Teoría sobre el Aprendizaje utilizada.</strong></p>
      <p>
<label for="entry_6">*</label>
        <label for="entry_6">Indique cual  de las siguientes categor&iacute;as es las m&aacute;s apropiada, para clasificar la teoría  sobre el aprendizaje en la que se soporta este proyecto</label>
      . </p></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="radio" name="taprendizaje" value="1" />
        Aprendizaje Colaborativo</label>
        <br />
        <label>
          <input type="radio" name="taprendizaje" value="2" />
        </label>
Aprendizaje Significativo<br />
<label>
  <input type="radio" name="taprendizaje" value="3"  />
  Aprendizaje por Proyectos</label>
<br />
<label>
  <input type="radio" name="taprendizaje" value="4" />
  Aprendizaje Basado en Problemas </label>
<br />
<label>
  <input type="radio" name="taprendizaje" value="5"  />
</label>
Aprendizaje Experiencial<br />
<label>
  <input type="radio" name="taprendizaje" value="6"  />
  Aprendizaje Social</label>
<br />
<label>
  <input type="radio" name="taprendizaje" value="7"  />
  Aprendizaje en RED</label>
<br />
<label>
  <input type="radio" name="taprendizaje" value="8"  />
  Aprendizaje Móvil</label>
<br />
<label>
  <input type="radio" name="taprendizaje" value="9"  />
  Aprendizaje Ubicuo</label>
<br />
<label>
  <input type="radio" name="taprendizaje" value="10"  />
</label>
Aprendizaje con videojuegos <br />
<label>
  <input type="radio" name="taprendizaje" value="11"  />
  Aprendizaje Situado</label>
<br />
<label>
  <input type="radio" name="taprendizaje" value="12" />
  Aprendizaje Autónomo</label></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Tecnologia y/o Herramientas utilizadas</strong></p>
      <p>
        <label for="entry_6">*</label>
        <label for="entry_6">Indique cual  de las siguientes categor&iacute;as es las m&aacute;s apropiada, para clasificar la tecnologia o herramienta </label>
        <label for="entry_6">en la que se soporta este proyecto.</label>
      </p></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="radio" name="tecnolo" value="1" id="tecnolo_0" />
        Herramientas web 2.0</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="2" id="tecnolo_1" />
          Tablero Digital</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="3" id="tecnolo_2" />
          Realidad Aumentada</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="4" id="tecnolo_3" />
          Mundos inmersivos</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="5" id="tecnolo_4" />
          Video Juegos</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="6" id="tecnolo_5" />
          Redes sociales</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="7" id="tecnolo_6" />
          Reconocimiento de gestos</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="8" id="tecnolo_7" />
          Libros Electrónicos</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="9" id="tecnolo_8" />
          Dispositivos móviles</label>
        <br />
        <label>
          <input type="radio" name="tecnolo" value="10" id="tecnolo_9" />
          Ofimática <br />
        </label>
        <label>
          <input type="radio" name="tecnolo" value="11" id="tecnolo_10" />
          Software especializado<br />
        </label>
        <label>
          <input type="radio" name="tecnolo" value="12" id="tecnolo_11" />
      Herramientas web 3.0</label></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Título de la Publicación </strong></p>
      <p>* Indique el título del artículo, libro o capítulo de libro tal y como aparece en la publicación.</p></td>
    </tr>
    <tr>
      <td colspan="2"><label for="titulo"></label>
      <input name="titulo" type="text" id="titulo" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Título del Proyecto</strong></p>
      <p>* Indique el título del proyecto en caso de que la o de libro tal y como aparece en la publicación.</p></td>
    </tr>
    <tr>
      <td colspan="2"><input name="proyecto1" type="text" id="proyecto1" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Palabras Clave</strong></p>
      <p>* Incluiya al menos 4 palabras claves separadas por comas</p></td>
    </tr>
    <tr>
      <td colspan="2"><input name="keywords" type="text" id="keywords" size="30" /></td>
    </tr>
    <tr>
      <td colspan="2"><strong>Resumen </strong></td>
    </tr>
    <tr>
      <td colspan="2"><label for="resumen"></label>
      <textarea name="resumen" cols="50" rows="5" id="resumen"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Autores</strong></p>
      <p>* In¡dique los autores del texto separados por comas</p></td>
    </tr>
    <tr>
      <td colspan="2"><input name="autor" type="text" id="autor" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Fecha de la Implementación</strong></p>
      <p>* Indique en que fecha se llevo acabo el proyecto (aaaa-mm-dd)</p></td>
    </tr>
    <tr>
      <td colspan="2"><input name="implemen" type="text" id="implemen" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2"><p><strong>Fecha de la Publicación</strong></p>
      <p>* Indique en que fecha en que se publicó el artículo (aaaa-mm-dd)</p></td>
    </tr>
    <tr>
      <td colspan="2"><input name="publica" type="text" id="publica" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2"><p>Nombre de la Publicación</p>
      <p>* Indique el nombre de la Publicación</p></td>
    </tr>
    <tr>
      <td colspan="2"><input name="revista" type="text" id="revista" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2"><p>Ubicación de la publicación</p>
      <p>*Indique la URL de donde se tomo la publicación</p></td>
    </tr>
    <tr>
      <td colspan="2"><input name="url" type="text" id="url" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="estado" type="hidden" value="0" /><input type="submit" name="button" id="button" value="Registrar los datos " />
      <input type="reset" name="button2" id="button2" value="Restablecer Formulario" /></td>
    </tr>
  </table>
  <p>
    
    <br />
  </p>
</form>
</body>
</html>