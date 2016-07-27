<?php
/*
 funciones.php
 Desarollado por: Carlos Angarita Copyright (C) 2008 Desarollado para: Oscar Boude - Universidad de La Sabana - proyecto Sistema de gestión del 
 conocmiento para la salvaguardia del Carnaval de barranquilla.
 
 En esta libreria se encuentran todas las funciones utilizadas
 dentro del sistema de gestión del conocimiento para la salvaguardia del
 carnaval de Barranquilla.
 
 Funciones que estan divididas en: aquellas que se utilizarón para 
 el manejo de las sesiones dentro del sistema, aquellas que se utilizan
 para establecer la conexión con las bases de datos, aquellas que
 se utilizan para realizar las busquedas.
 
 */

/* Funciones para el Manejo de las Sesiones */

/* Función validar sesión: Valida que la sesión este activa, regresando 
un valor booleano con el estado*/

function validar_sesion (){
	session_start();
	$sses=true;
	if (!isset($_SESSION['usuario']) && !isset($_SESSION['contra']))
	{		
		$sses=false;
	}
	return $sses;
}


/* Función valida_ingre_usuario: Valida el ingreso de usuario al sistema
y crea la sesión que se va a manejar mientras el usuario este trabjando
en el sistema. De la misma forma da las indicaciones necesarias para 
que el usuario sepa que hacer en caso de un error */

function valida_ingre_usuario()
{

	if (!isset($_POST['usuario']) && !isset($_POST['contra']))
	{
		session_start();
		//usamos los valores de las sesiones
		$usuario=$_SESSION['usuario'];
		$contra=$_SESSION['contra'];
		
		/*	if ($row["tipo_usua"]==1)
				{
					echo "<meta http-equiv='refresh' content='0;URL=m_desarrollo.php' />";
				}
			if ($row["tipo_usua"]==2)
				{
					echo "<meta http-equiv='refresh' content='0;URL=m_consulta.php' />";
				}
				if ($row["tipo_usua"]==2)
				{
					echo "<meta http-equiv='refresh' content='0;URL=m_consulta.php' />";
				}*/
	}
	else
	{
		$enlace=conectar_base();
		$usuario=$_POST['usuario'];
		$contra=$_POST['contra'];
		$resultado = mysql_query ("SELECT * FROM usuarios WHERE usuario ='$usuario'", $enlace) or die ("Invalid query: " . mysql_error()) ;
		if($row = mysql_fetch_array($resultado)) 
		{
		
			if ($row["contra"]==$contra)
			{
			
				session_start();
				$_SESSION['usuario'] =$usuario;
				$_SESSION['contra'] = $contra;
				$id=session_id();
							
			/*Se confirma que es el usuario, se crea la sesión, se guardan 
			las variables de la sesión y se muestra la pantalla de inicio
			dentro del sistema
			*/
				
				if ($row["tipo_usua"]==1)
				{
					echo "<meta http-equiv='refresh' content='0;URL=m_desarrollo.php' />";
				}
				if ($row["tipo_usua"]==2)
				{
					echo "<meta http-equiv='refresh' content='0;URL=m_consulta.php' />";
				}
				if ($row["tipo_usua"]==4)
				{
					echo "<meta http-equiv='refresh' content='0;URL=m_admin.php' />";
				}
				
			}
			else
			{
			/*Se informa que la contraseña no es correcta y se solicita que lo vuelva a 
			intentar, por lo que se vuelve a poner en pantalla el código inicial
			del sistema
			*/	
					
			echo "Lo siento la contraseña no es correcta. Vuelva a intentarlo";
			echo "<meta http-equiv='refresh' content='5;URL=m_inicial.php' />";
			}
		}
		else
		{
			/*Se informa que el usuario no existe y se solicita que lo vuelva a 
			intentar, por lo que se vuelve a poner en pantalla el código inicial
			del sistema
			*/				
			echo"El usuario no existe";
			echo "<meta http-equiv='refresh' content='5;URL=m_inicial.php' />";
		}

	}

}

/*Esta función se utiliza para establecer la conexión con la base de Datos
y se devuelve el link para poder accederla
*/



function registra_autores($id_texto)
{
	$num_auto=$_POST['num_auto'];
	$enlace=conectar_base();
	for($i=1; $i<=$num_auto;$i++)
	{
		$autor=$_POST['url'.$i];
		$sql = "INSERT INTO reg_autores (id_texto, autor)";
		$sql .= "VALUES ('$id_texto', '$autor')";
		$result = mysql_query($sql, $enlace);
	}
}

function registra_publica()
{
	$num_auto=$_POST['num_auto'];
	$enlace=conectar_base();
	for($i=1; $i<=$num_auto;$i++)
	{
		$npublica=$_POST['publica'.$i];
		if($npublica <>"")
		{
			$sql = "INSERT INTO tipo_texto (tipo_texto)";
			$sql .= "VALUES ('$npublica')";
			$result = mysql_query($sql, $enlace);
		}
	}
}


function conectar_base()
{
$link = mysql_connect("localhost", "oscarbf", "AdminOcie");
mysql_select_db("ocie", $link);
return $link;
}

function cantidad_pagina($id_texto)
{
$enlace=conectar_base();
$resultado = mysql_query ("SELECT * FROM reg_textos WHERE id_texto='$id_texto'" , $enlace) or die ("Invalid query");
		while($row = mysql_fetch_array($resultado)) 
		{
		$num_pagina1=$row[4];
		}

$resultado2 = mysql_query ("SELECT * FROM reg_textos_img WHERE id_texto='$id_texto'" , $enlace) or die ("Invalid query");
		while($row = mysql_fetch_array($resultado2)) 
		{
		$num_pagina2=$row[4];
		}
		if($num_pagina1>=$num_pagina2)
		{
		$pagina=$num_pagina1;
		}
		else
		{
		$pagina=$num_pagina2;
		}
		
	return $pagina;
	}

function ultima_imagen($id_texto)
{
$enlace=conectar_base();
$resultado = mysql_query ("SELECT * FROM reg_textos_img WHERE id_texto='$id_texto'" , $enlace) or die ("Invalid query");
		while($row = mysql_fetch_array($resultado)) 
		{
		$imagen=$row[3];
		$ima="./archivos/";
		$ima.=$id_texto;
		$ima.="/";
		$ima2 =str_replace($ima,"",$imagen);
		}	
		return $ima2;
}
function registra_ciudades()
{
	$num_auto=$_POST['num_auto'];
	$enlace=conectar_base();
	for($i=1; $i<=$num_auto;$i++)
	{
		$npublica=$_POST['publica'.$i];
		if($npublica <>"")
		{
			$sql = "INSERT INTO info_ciudades (ciudad)";
			$sql .= "VALUES ('$npublica')";
			$result = mysql_query($sql, $enlace);
		}
	}
}

function registra_terminos()
{
	$num_auto=$_POST['num_auto'];
	$enlace=conectar_base();
	for($i=1; $i<=$num_auto;$i++)
	{
		$npublica=$_POST['publica'.$i];
		if($npublica <>"")
		{
		echo"<h1>El Termino ha sido agregado con exito</h1>";
			$sql = "INSERT INTO reg_termino (termino)";
			$sql .= "VALUES ('$npublica')";
			$result = mysql_query($sql, $enlace);
		}
	}
}

function echo_opcion($dato, $valida)
{
	if($valida==1)
		{
		echo"
      <th scope='col'><input name='$dato' type='checkbox' id='$dato' value='1' checked='checked'/></th>";
	  }
	  else
	  {
	  echo"
      <th scope='col'><input name='$dato' type='checkbox' id='$dato' value='1' /></th>";
	  }
}

/*Esta función tiene como fin pasar todos los archivos de una carpeta en el servidor a otra carpeta y actualizar la BD del sistema de gestión con los datos necesesarios*/

function copiararchivos($dirfuente, $dirdest, $usuario, $verbose=false)
{
$pagina=0;
$directorio=0;
$directorio=$dirdest;
echo"$directorio";
$dirdest= "./archivos/$dirdest";
if(!is_dir($dirdest)) mkdir($dirdest);
    if($diractual = opendir($dirfuente)) {
        while($archivo = readdir($diractual)) {
            if($archivo != '.' && $archivo != '..') {
				$archifuente = $dirfuente . '/' . $archivo;   
                $archidest = $dirdest . '/' . $archivo;   
				if(is_file($archifuente)) {
				
				
					if($verbose) echo "Copying '$archifuente' to '$archidest'...<br />";
                        if(copy($archifuente, $archidest)) {
                            //touch($dstfile, filemtime($srcfile)); $num++;
                            chmod($archidest, 0744);    # added by marajax
                           // $sizetotal = ($sizetotal + filesize($dstfile));
                            if($verbose)
							{
							echo "OK\n";
							$enlace=conectar_base();
							$pagina++;
							$sql = "INSERT INTO reg_textos_img (usuario, id_texto, img_texto, pagina)";
							$sql .= "VALUES ('$usuario', '$directorio', '$archidest', '$pagina')";
							$result = mysql_query($sql, $enlace);
							echo "'$usuario', '$directorio', '$archidest', '$pagina'";
							}
                        	}
                        else {
                            echo "Error: File '$srcfile' could not be copied!<br />\n";
                          //  $fail++;
                          //  $fifail = $fifail.$srcfile.'|';
                        }
						}
			}
			$sql3 = "UPDATE reg_ficha_libro SET estado='2' WHERE id_texto='$directorio'";
			$result3 = mysql_query($sql3, $enlace);
		}
	}
}

 


?>
