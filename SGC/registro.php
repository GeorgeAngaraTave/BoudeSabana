<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>

<body>
<?php 

$nombre=$_POST['nombre']; 
$correo=$_POST['correo']; 
$tipo_usuario=$_POST['tipo_usuario']; 
$tipo_ident=$_POST['tipo_iden']; 
$ced_num=$_POST['ced_num']; 
$tel=$_POST['telefono']; 
$cel=$_POST['celular'];
$usuario=$_POST['nom_usua']; 
$contra=$_POST['contra']; 
$contra2=$_POST['contra2']; 
$institucion=$_POST['institucion']; 
$tipo_insti=$_POST['tipo_insti']; 
$nivel_insti=$_POST['nivel_labora']; 
$skype=$_POST['skype']; 
$tweeter=$_POST['tweeter']; 
$red=$_POST['red']; 
$otra=$_POST['otra_red']; 
$estado=false;
 
    $count = count($red);
    for ($i = 0; $i < $count; $i++) {
        if ($red[$i] == 1) $ribiecol=true;
		 if ($red[$i] == 2) $redipe=true;
		  if ($red[$i] == 3) $redolac=true;
		   if ($red[$i] == 4) $academia=true;
		    if ($red[$i] == 5) $researchgate=true;
			 if ($red[$i] == 6) $mendeley=true;
			  if ($red[$i] == 7) $ried=true;
		
    }

$link = mysql_connect('localhost', 'root', 'root');
mysql_select_db('ocie', $link);

$resultado = mysql_query ("SELECT nom_usua FROM tipo_usua WHERE nom_usua ='$usuario'", $link) or die ("Invalid query: " . mysql_error()) ;

		if(mysql_num_rows($resultado)> 0) 
		{
			echo " Lo sentimos el usuario seleccionado ya existe";
			echo "<meta http-equiv='refresh' content='5;URL=./../registro.htm' />";
		}
		else
			{
								
				if ($contra == $contra2)
				{
				//registro de solicitud de nuevo usuario	
				$sql = "INSERT INTO tipo_usua (nom_usua, contra, tipo_usua, estado )";
				$sql .= "VALUES ('$usuario	', '$contra', '$tipo_usuario', '$estado')";
				$result = mysql_query($sql, $link)  or die ("Invalid query: " . mysql_error()) ;
				// registro de datos del usuario
				$sql = "INSERT INTO datos_usua (nombre, correo, nom_usua, tel, cel, tipo_ident, identifica, institucion, skype, tweeter, nivel_institu )";
				$sql .= "VALUES ('$nombre', '$correo', '$usuario', '$tel','$cel', '$tipo_ident', '$ced_num', '$institucion','$skype', '$tweeter', '$nivel_insti')";
				$result = mysql_query($sql, $link)  or die ("Invalid query: " . mysql_error()) ;
				// registro tipo institución
				$sql = "INSERT INTO tipo_institu (nom_usua, tipo_institucion, institucion )";
				$sql .= "VALUES ('$usuario', '$tipo_insti', '$institucion')";
				$result = mysql_query($sql, $link)  or die ("Invalid query: " . mysql_error()) ;
				//registro de las redes en las que participa
				$sql = "INSERT INTO redes_acade (nom_usua, ribiecol, academia, researchgate, redipe, ried, mendeley, redolac, otra )";
				$sql .= "VALUES ('$usuario', '$ribiecol', '$academia', '$researchgate', '$redipe', '$ried', '$mendeley', '$redolac','$otra')";
				$result = mysql_query($sql, $link)  or die ("Invalid query: " . mysql_error()) ;
				}
				else
				{
					echo " Lo sentimos las contraseñas indicadas no coinciden";
				echo "<meta http-equiv='refresh' content='5;URL=registro.htm' />";
				
				
				}

			}
		?>
</body>
</html>