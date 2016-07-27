<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>

<body>
<?php
$bd_host = "localhost";
$bd_usuario = "oscarbf";
$bd_password = "AdminOcie";
$bd_base = "ocie";

$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
mysql_select_db($bd_base, $con);
echo $con;
?>
</body>
</html>