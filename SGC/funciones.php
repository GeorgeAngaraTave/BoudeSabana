<?php


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

function valida_sess_usuario()
{
		$activa=false;
		$usuario=$_SESSION['usuario'];
		$contra=$_SESSION['contra'];
		$enlace=conectar_base();
		$resultado = mysql_query ("SELECT * FROM tipo_usua WHERE nom_usua ='$usuario'", $enlace) or die ("Invalid query: " . mysql_error()) ;
			
		if($row = mysql_fetch_array($resultado)) 
		{
			if ($row["tipo_usua"]==1)
				{
					$activa=true;
					echo "<meta http-equiv='refresh' content='0;URL=../estudian.php' />";
				}
				if ($row["tipo_usua"]==2)
				{
					$activa=true;
					echo "<meta http-equiv='refresh' content='0;URL=../investi.php' />";
				}
				if ($row["tipo_usua"]==3)
				{
					$activa=true;
					echo "<meta http-equiv='refresh' content='0;URL=../colabora.php' />";
				}
				if ($row["tipo_usua"]==4)
				{
					$activa=true;
					echo "<meta http-equiv='refresh' content='0;URL=../tutor.php''/>";
				}
				
			}
			return $activa;
}
		

function valida_ingre_usuario()
{

	if (!isset($_POST['usuario']) && !isset($_POST['contra']))
	{
		session_start();
		//usamos los valores de las sesiones
		$usuario=$_SESSION['usuario'];
		$contra=$_SESSION['contra'];
		echo "la sesión existe";
	}
	else
	{
		$enlace=conectar_base();
		$usuario=$_POST['usuario'];
		$contra=$_POST['contra'];
		
		$resultado = mysql_query ("SELECT * FROM tipo_usua WHERE nom_usua ='$usuario'", $enlace) or die ("Invalid query: " . mysql_error()) ;
			
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
					echo "<meta http-equiv='refresh' content='0;URL=../estudian.php' />";
				}
				if ($row["tipo_usua"]==2)
				{
					echo "<meta http-equiv='refresh' content='0;URL=../investi.php' />";
				}
				if ($row["tipo_usua"]==3)
				{
					echo "<meta http-equiv='refresh' content='0;URL=../colabora.php' />";
				}
				if ($row["tipo_usua"]==4)
				{
					echo "<meta http-equiv='refresh' content='0;URL=../tutor.php' target='ppal' />";
				}
				
			}
			else
			{
			/*Se informa que la contraseña no es correcta y se solicita que lo vuelva a 
			intentar, por lo que se vuelve a poner en pantalla el código inicial
			del sistema
			*/	
					
			echo "Lo siento la contraseña no es correcta. Vuelva a intentarlo";
			echo "<meta http-equiv='refresh' content='5;URL=m_inicial.php' target='ppal'/>";
			}
		}
		else
		{
			/*Se informa que el usuario no existe y se solicita que lo vuelva a 
			intentar, por lo que se vuelve a poner en pantalla el código inicial
			del sistema
			*/				
			echo"El usuario no existe";
			echo "<meta http-equiv='refresh' content='5;URL=m_inicial.php' target='ppal'/>";
		}

	}

}

/*Esta función se utiliza para establecer la conexión con la base de Datos
y se devuelve el link para poder accederla
*/




function conectar_base()
{
$link = mysql_connect("localhost", "oscarbf", "AdminOcie");
mysql_select_db("OCIE", $link);
return $link;
}





?>
