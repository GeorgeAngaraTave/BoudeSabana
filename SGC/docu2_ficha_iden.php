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
<p>
  <?php 

include 'funciones.php';

/* Valida la existencia de una sesión activa  */


$sesion=validar_sesion();
$titulo= $_POST['titulo'];

if ($sesion){
	$usuario=$_SESSION['usuario'];
	$contra=$_SESSION['contra'];
	
		
	
}
else{
echo "<meta http-equiv='refresh' content='2;URL=index.htm' />

<h1 class='adver'><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;}

		
?>
<form id="form1" name="form1" method="post" action="docu3_ficha_iden.php">
  <table width="100%" border="0">
    <tr>
      <td align="center"><h2>Documentación de proyectos  del Observatorio Colombiano de Informática Educativa</h2></td>
    </tr>
    <tr>
      <td align="justify"><p>Por favor llene los campos que se indican a continuación para realizar la documentación de las publicaciones que hay  identificado previamente sobre experiencias, investigaciones y proyectos que involucren a la Informática educativa en el país.<br />
      </p></td>
    </tr>
    <tr>
      <td><p><strong>El proyecto sobre el cual esta trabajando se denomina: </strong></p>
        <p>
      <?php echo $titulo; ?></p></td>
    </tr>
    <tr>
      <td><p><strong>Nivel de formación de la población</strong></p>
      <p>*Indique el nivel de formación a la que pertenece la población del estudio</p></td>
    </tr>
    <tr>
      <td><p>
        <label>
          <input type="radio" name="formacion" value="1" id="formacion_0" />
          Pre-ecolar</label>
        <br />
        <label>
          <input type="radio" name="formacion" value="2" id="formacion_1" />
          Primaria</label>
        <br />
        <label>
          <input type="radio" name="formacion" value="3" id="formacion_2" />
          Secundaria</label>
        <br />
        <label>
          <input type="radio" name="formacion" value="4" id="formacion_3" />
          Pregrado</label>
        <br />
        <label>
          <input type="radio" name="formacion" value="5" id="formacion_4" />
          Postgrado</label>
        <br />
        <label>
          <input type="radio" name="formacion" value="6" id="formacion_5" />
          Educación Continua</label>
        <br />
        <label>
          <input type="radio" name="formacion" value="7" id="formacion_6" />
          Técnica</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td><div>
          <div>
            <div class="ss-form-entry">
              <label for="entry_6"><strong>&Aacute;rea Disciplinar a la cual pertenece el proyecto</strong></label>
              .
              <label for="entry_6"><br />
              *</label>
              <label for="entry_6">Indique cual  es el área disciplinar central de este proyecto</label>.
              <br />
            </div>
          </div>
        </div></td>
    </tr>
    <tr>
      <td>
        <input name="area_dis" type="text" id="area_dis" size="40" />
        </td>
    </tr>
    <tr>
      <td><p><strong>Enfoque Pedagógico utilizado.</strong></p>
      <p>
<label for="entry_6">*</label>
      <label for="entry_6">Indique cual  de las siguientes categor&iacute;as es las m&aacute;s apropiada, para clasificar el enfoque pedagógico utilizado en este proyecto</label>. </p></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="enfoque" value="1"  />
        Conductista</label><br />
        <label>
          <input type="radio" name="enfoque" value="2"  />
          Constructivista
        </label>
        <br />
        <label>
          <input type="radio" name="enfoque" value="3"/>
          Escuela Nueva</label>
        <br />
        <label>
          <input type="radio" name="enfoque" value="4"  />
      Sistémico<br />
        </label>
        <label>
          <input type="radio" name="enfoque" value="5"  />
          Cognitivista<br />
        </label>
         <label>
          <input type="radio" name="enfoque" value="5"  />
          Conectivista<br />
        </label><label>
          <input type="radio" name="enfoque value="5"  />
          Socio-Cultural
          <br />
        </label></td>
    </tr>
    <tr>
      <td><p><strong>Tecnologias de la Información Y comunicación utilizadas.</strong></p>
      <p>
<label for="entry_6">*</label>
        <label for="entry_6">Indique cuales tecnologias se utilizan en el proyecto, separadas por comas</label>
      . </p></td>
    </tr>
    <tr>
      <td><label for="Tecnologia"></label>
      <textarea name="tic" cols="60" rows="3" id="Tecnologia"></textarea></td>
    </tr>
    <tr>
      <td><p><strong>Función de las Tecnologias y/o Herramientas utilizadas</strong></p>
      <p>
        <label for="entry_6">*</label>
        <label for="entry_6">Indique cual o cuales son las funciones dadas a la tecnología en este proyecto</label><label for="entry_6">.</label>
      </p></td>
    </tr>
    <tr>
      <td><label for="func_tic"></label>
      <textarea name="func_tic" id="func_tic" cols="50" rows="6"></textarea></td>
    </tr>
    <tr>
      <td><p><strong>Aspectos Metodológicos del proyecto<br />
      </strong><br />
          *Indique a continuación los aspectos metodológicos
      del proyecto que desea documentar</p></td>
    </tr>
    <tr>
      <td><label for="titulo"></label></td>
    </tr>
    <tr>
      <td><p><strong>Características de la Población</strong></p>
      <p>* Indique todas aquellas carácteristicas que ayuden a determinar la población y el dcontexto educativo en donde se desarrollo el proyecto.</p></td>
    </tr>
    <tr>
      <td><textarea name="poblacion" cols="60" rows="5" id="proyecto1"></textarea></td>
    </tr>
    <tr>
      <td><p><strong>Tipo de investigación</strong></p>
      <p>* Indique cual es el tipo de enfoque metodológico utilizado en en este proyecto</p></td>
    </tr>
    <tr>
      <td><p><br />
        <label>
          <input type="radio" name="investiga" value="1" id="enfoque_1" />
          Cualitativa</label>
        <br />
        <label>
          <input type="radio" name="investiga" value="2" id="enfoque_2" />
          Cuantitativa</label>
        <br />
        <label>
          <input type="radio" name="investiga" value="3" id="enfoque_3" />
          Mixto - Cualitativo</label>
        <br />
        <label>
          <input type="radio" name="investiga" value="radio" id="enfoque_4" />
          Mixto - Cuantitativo</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td><p><strong>Tipo de Estudio </strong></p>
      <p>* Indique cual es el tipo de etudio utilizado en en este proyecto</p></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="estudio" value="1" id="enfoque_5" />
        Descriptivo</label>
        <br />
        <label>
          <input type="radio" name="estudio" value="2" id="enfoque_6" />
          Exploratorio
        </label>
        <br />
        <label>
          <input type="radio" name="estudio" value="3" id="enfoque_7" />
          Experimental</label>
        <br />
        <label>
          <input type="radio" name="estudio" value="4" id="enfoque_8" />
          Explicativa</label>
        <br />
        <label>
          <input type="radio" name="estudio" value="5" id="enfoque_9" />
      Análitico<br />
        </label><label for="resumen">
          <input type="radio" name="estudio" value="6" id="enfoque_10" /> 
          Evaluativo<br />
          <input type="radio" name="estudio" value="7" id="enfoque_11" />
Correlacional        </label></td>
    </tr>
    <tr>
      <td><p><strong>Diseño de la Investigación</strong></p>
      <p>* In¡dique cual es el diseño de investigación que se utilizó en este proyecto</p></td>
    </tr>
    <tr>
      <td><p>
        <label>
          <input type="radio" name="diseno" value="1" id="diseno_0" />
          Cuasi-experimental</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="2" id="diseno_1" />
          Experimental</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="3" id="diseno_2" />
          Estudio de Casos</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="4" id="diseno_3" />
          Investigasción Acción</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="5" id="diseno_4" />
          Etnografía</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="6" id="diseno_5" />
          Etnografía virtual</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="7" id="diseno_6" />
          Correlacional</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="8" id="diseno_7" />
          Narrativa</label>
        <br />
        <label>
          <input type="radio" name="diseno" value="9" id="diseno_8" />
          Teoría Fundamentada</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td><p><strong>Muestra y población</strong></p>
      <p>* Indique los datos referentes a la muestra y población del estudio.</p></td>
    </tr>
    <tr>
      <td><textarea name="muestra" cols="60" rows="5" id="muestra"></textarea></td>
    </tr>
    <tr>
      <td><p><strong>Instrumentos de recolección de datos</strong></p>
      <p>* Indique si están disponibles en el documento los instrumentos utilizados en el estudio</p></td>
    </tr>
    <tr>
      <td>          <label>
            <input type="checkbox" name="instrumento[]" value="Entrevistas estructuradas"  />
             Entrevistas estructuradas</label>
        
        
          <br />
          <label>
            <input type="checkbox" name="instrumento[]" value="Entrevistas semi-estructuradas"  />
         Entrevistas semi-estructuradas</label>
        
          <label>
            <br />
            <input type="checkbox" name="instrumento[]" value="Observaciones participativas"  />
         Observaciones participativas</label>
        
          <br />
          <label>
            <input type="checkbox" name="instrumento[]" value="Observaciones no participativas"  />
         Observaciones no participativas</label>
        
          <label>
            <br />
            <input type="checkbox" name="instrumento[]" value="Encuestas"  />
         Encuestas</label>
        
          <label>
            <br />
            <input type="checkbox" name="instrumento[]" value="Pruebas de conocimientos"  />
         Pruebas de conocimientos</label>
        
          <label>
            <br />
            <input type="checkbox" name="instrumento[]" value="Foros"  />
         Foros</label>
        
          <label>
            <br />
            <input type="checkbox" name="instrumento[]" value="Diario de campo"  />
         Diario de campo</label>
        
          <label>
            <br />
            <input type="checkbox" name="instrumento[]" value="Diario del investigador"  />
         Diario del investigador</label>
      </td>
    </tr>
    <tr>
      <td><p><strong>Principales resultados del Estudio</strong></p>
      <p>* Indique cuales son los principales resultados del proyecto</p></td>
    </tr>
    <tr>
      <td><textarea name="resultados" cols="60" rows="4" id="resultados"></textarea></td>
    </tr>
    <tr>
      <td><p><strong>Principles conlusiones del Estudio</strong></p>
      <p>* Indique cuales son las principales conclusiones del proyecto</p></td>
    </tr>
    <tr>
      <td><textarea name="conclusiones" cols="60" rows="4" id="conclusiones"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input name="titulo" type="hidden" value="<?php echo $titulo; ?>" /><input type="submit" name="button" id="button" value="Registrar los datos " />
      <input type="reset" name="button2" id="button2" value="Restablecer Formulario" /></td>
    </tr>
  </table>
  <p>
    
    <br />
  </p>
</form>
</body>
</html>
