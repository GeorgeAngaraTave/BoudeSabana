<?php  
include 'SGC/funciones.php';

/* Valida la existencia de una sesión activa  */


$sesion=validar_sesion();
if ($sesion){
echo"

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<!-- saved from url=(0014)about:internet -->
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>Sistema de gestion Modulo tutores</title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<style type='text/css'>
td img {display: block;}body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<!--Fireworks CS5 Dreamweaver CS5 target.  Created Tue Nov 19 16:22:18 GMT-0500 (COT) 2013-->
</head>

<body bgcolor='#ffffff'>
<table style='display: inline-table;' border='0' cellpadding='0' cellspacing='0' width='1024'>
<!-- fwtable fwsrc='tutores.png' fwpage='1024 x 768' fwbase='tutor.gif' fwstyle='Dreamweaver' fwdocid = '1813935348' fwnested='0' -->
  <tr>
   <td><img src='imagen/spacer.gif' width='2' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='50' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='123' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='6' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='6' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='5' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='89' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='7' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='89' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='5' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='62' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='5' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='75' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='6' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='75' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='6' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='82' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='4' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='65' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='7' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='65' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='180' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='10' height='1' border='0' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>

  <tr>
   <td colspan='22'><a href='index.htm' target='_self'><img name='tutor_r1_c1' src='imagen/tutor_r1_c1.gif' width='1014' height='242' border='0' id='tutor_r1_c1' alt='' /></a></td>
   <td rowspan='42'><img name='tutor_r1_c23' src='imagen/tutor_r1_c23.gif' width='10' height='850' border='0' id='tutor_r1_c23' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='242' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='22'><img name='tutor_r2_c1' src='imagen/tutor_r2_c1.gif' width='1014' height='9' border='0' id='tutor_r2_c1' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='9' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='5'><img name='tutor_r3_c1' src='imagen/tutor_r3_c1.gif' width='187' height='30' border='0' id='tutor_r3_c1' alt='' /></td>
   <td rowspan='31' colspan='17' valign='top' bgcolor='#ffffff'><iframe width='818' height='545' name='ppal' frameborder='0' src='quienes_somos_inf_gene.htm'></iframe></td>
   <td><img src='imagen/spacer.gif' width='1' height='30' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='4' colspan='2'><img name='tutor_r4_c1' src='imagen/tutor_r4_c1.gif' width='52' height='93' border='0' id='tutor_r4_c1' alt='' /></td>
   <td><img name='tutor_r4_c3' src='imagen/tutor_r4_c3.gif' width='123' height='26' border='0' id='tutor_r4_c3' alt='' /></td>
   <td rowspan='4' colspan='2'><img name='tutor_r4_c4' src='imagen/tutor_r4_c4.gif' width='12' height='93' border='0' id='tutor_r4_c4' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td><img name='tutor_r5_c3' src='imagen/tutor_r5_c3.gif' width='123' height='3' border='0' id='tutor_r5_c3' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='3' border='0' alt='' /></td>
  </tr>
  <tr>
   <td><img name='tutor_r6_c3' src='imagen/tutor_r6_c3.gif' width='123' height='18' border='0' id='tutor_r6_c3' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='18' border='0' alt='' /></td>
  </tr>
  <tr>
   <td><img name='tutor_r7_c3' src='imagen/tutor_r7_c3.gif' width='123' height='46' border='0' id='tutor_r7_c3' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='46' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='35'><img name='tutor_r8_c1' src='imagen/tutor_r8_c1.gif' width='2' height='476' border='0' id='tutor_r8_c1' alt='' /></td>
   <td colspan='3'><a href='quienes_somos_inf_gene.htm' target='ppal'><img name='tutor_r8_c2' src='imagen/tutor_r8_c2.gif' width='179' height='26' border='0' id='tutor_r8_c2' alt='' /></a></td>
   <td rowspan='35'><img name='tutor_r8_c5' src='imagen/tutor_r8_c5.gif' width='6' height='476' border='0' id='tutor_r8_c5' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r9_c2' src='imagen/tutor_r9_c2.gif' width='179' height='1' border='0' id='tutor_r9_c2' alt='' /></a></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><a href='investigacion.htm' target='ppal'><img name='tutor_r10_c2' src='imagen/tutor_r10_c2.gif' width='179' height='26' border='0' id='tutor_r10_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r11_c2' src='imagen/tutor_r11_c2.gif' width='179' height='1' border='0' id='tutor_r11_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><a href='SGC/ficha_iden.php' target='ppal'><img name='tutor_r12_c2' src='imagen/tutor_r12_c2.gif' width='179' height='26' border='0' id='tutor_r12_c2' alt='' /></a></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r13_c2' src='imagen/tutor_r13_c2.gif' width='179' height='1' border='0' id='tutor_r13_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><a href='SGC/docu_ficha_iden.php' target='ppal'><img name='tutor_r14_c2' src='imagen/tutor_r14_c2.gif' width='179' height='26' border='0' id='tutor_r14_c2' alt='' /></a></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r15_c2' src='imagen/tutor_r15_c2.gif' width='179' height='1' border='0' id='tutor_r15_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r16_c2' src='imagen/tutor_r16_c2.gif' width='179' height='26' border='0' id='tutor_r16_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r17_c2' src='imagen/tutor_r17_c2.gif' width='179' height='2' border='0' id='tutor_r17_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='2' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><a href='SGC/nuevo_proyec_mie.php' target='ppal'><img name='tutor_r18_c2' src='imagen/tutor_r18_c2.gif' width='179' height='26' border='0' id='tutor_r18_c2' alt='' /></a></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r19_c2' src='imagen/tutor_r19_c2.gif' width='179' height='1' border='0' id='tutor_r19_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><a href='SGC/actua_proyec_mie.php' target='ppal'><img name='tutor_r20_c2' src='imagen/tutor_r20_c2.gif' width='179' height='26' border='0' id='tutor_r20_c2' alt='' /></a></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r21_c2' src='imagen/tutor_r21_c2.gif' width='179' height='1' border='0' id='tutor_r21_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r22_c2' src='imagen/tutor_r22_c2.gif' width='179' height='26' border='0' id='tutor_r22_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r23_c2' src='imagen/tutor_r23_c2.gif' width='179' height='1' border='0' id='tutor_r23_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r24_c2' src='imagen/tutor_r24_c2.gif' width='179' height='26' border='0' id='tutor_r24_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r25_c2' src='imagen/tutor_r25_c2.gif' width='179' height='1' border='0' id='tutor_r25_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r26_c2' src='imagen/tutor_r26_c2.gif' width='179' height='26' border='0' id='tutor_r26_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r27_c2' src='imagen/tutor_r27_c2.gif' width='179' height='1' border='0' id='tutor_r27_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r28_c2' src='imagen/tutor_r28_c2.gif' width='179' height='26' border='0' id='tutor_r28_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r29_c2' src='imagen/tutor_r29_c2.gif' width='179' height='1' border='0' id='tutor_r29_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r30_c2' src='imagen/tutor_r30_c2.gif' width='179' height='26' border='0' id='tutor_r30_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r31_c2' src='imagen/tutor_r31_c2.gif' width='179' height='1' border='0' id='tutor_r31_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3'><img name='tutor_r32_c2' src='imagen/tutor_r32_c2.gif' width='179' height='26' border='0' id='tutor_r32_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='26' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='10' colspan='3'><img name='tutor_r33_c2' src='imagen/tutor_r33_c2.gif' width='179' height='125' border='0' id='tutor_r33_c2' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='76' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='17'><img name='tutor_r34_c6' src='imagen/tutor_r34_c6.gif' width='827' height='13' border='0' id='tutor_r34_c6' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='13' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='11'><img name='tutor_r35_c6' src='imagen/tutor_r35_c6.gif' width='424' height='1' border='0' id='tutor_r35_c6' alt='' /></td>
   <td rowspan='4'><a href='tendencias.php' target='ppal'><img name='tutor_r35_c17' src='imagen/tutor_r35_c17.gif' width='82' height='16' border='0' id='tutor_r35_c17' alt='' /></a></td>
   <td colspan='5'><img name='tutor_r35_c18' src='imagen/tutor_r35_c18.gif' width='321' height='1' border='0' id='tutor_r35_c18' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='7'><img name='tutor_r36_c6' src='imagen/tutor_r36_c6.gif' width='5' height='35' border='0' id='tutor_r36_c6' alt='' /></td>
   <td rowspan='4'><a href='quienes_somos_inf_gene.htm' target='ppal'><img name='tutor_r36_c7' src='imagen/tutor_r36_c7.gif' width='89' height='16' border='0' id='tutor_r36_c7' alt='' /></a></td>
   <td rowspan='7'><img name='tutor_r36_c8' src='imagen/tutor_r36_c8.gif' width='7' height='35' border='0' id='tutor_r36_c8' alt='' /></td>
   <td rowspan='4'><a href='investigacion.htm' target='ppal'><img name='tutor_r36_c9' src='imagen/tutor_r36_c9.gif' width='89' height='16' border='0' id='tutor_r36_c9' alt='' /></a></td>
   <td colspan='7'><img name='tutor_r36_c10' src='imagen/tutor_r36_c10.gif' width='234' height='1' border='0' id='tutor_r36_c10' alt='' /></td>
   <td rowspan='7'><img name='tutor_r36_c18' src='imagen/tutor_r36_c18.gif' width='4' height='35' border='0' id='tutor_r36_c18' alt='' /></td>
   <td rowspan='4'><a href='contacto.php' target='ppal'><img name='tutor_r36_c19' src='imagen/tutor_r36_c19.gif' width='65' height='16' border='0' id='tutor_r36_c19' alt='' /></a></td>
   <td colspan='3'><img name='tutor_r36_c20' src='imagen/tutor_r36_c20.gif' width='252' height='1' border='0' id='tutor_r36_c20' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='6'><img name='tutor_r37_c10' src='imagen/tutor_r37_c10.gif' width='5' height='34' border='0' id='tutor_r37_c10' alt='' /></td>
   <td rowspan='4'><a href='Informes.php' target='ppal'><img name='tutor_r37_c11' src='imagen/tutor_r37_c11.gif' width='62' height='16' border='0' id='tutor_r37_c11' alt='' /></a></td>
   <td rowspan='6'><img name='tutor_r37_c12' src='imagen/tutor_r37_c12.gif' width='5' height='34' border='0' id='tutor_r37_c12' alt='' /></td>
   <td rowspan='4'><a href='productos.php' target='ppal'><img name='tutor_r37_c13' src='imagen/tutor_r37_c13.gif' width='75' height='16' border='0' id='tutor_r37_c13' alt='' /></a></td>
   <td colspan='3'><img name='tutor_r37_c14' src='imagen/tutor_r37_c14.gif' width='87' height='1' border='0' id='tutor_r37_c14' alt='' /></td>
   <td rowspan='6'><img name='tutor_r37_c20' src='imagen/tutor_r37_c20.gif' width='7' height='34' border='0' id='tutor_r37_c20' alt='' /></td>
   <td rowspan='4'><a href='buscar.php' target='ppal'><img name='tutor_r37_c21' src='imagen/tutor_r37_c21.gif' width='65' height='16' border='0' id='tutor_r37_c21' alt='' /></a></td>
   <td rowspan='6'><img name='tutor_r37_c22' src='imagen/tutor_r37_c22.gif' width='180' height='34' border='0' id='tutor_r37_c22' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='5'><img name='tutor_r38_c14' src='imagen/tutor_r38_c14.gif' width='6' height='33' border='0' id='tutor_r38_c14' alt='' /></td>
   <td rowspan='4'><a href='experiencias.php' target='ppal'><img name='tutor_r38_c15' src='imagen/tutor_r38_c15.gif' width='75' height='16' border='0' id='tutor_r38_c15' alt='' /></a></td>
   <td rowspan='5'><img name='tutor_r38_c16' src='imagen/tutor_r38_c16.gif' width='6' height='33' border='0' id='tutor_r38_c16' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='13' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='4'><img name='tutor_r39_c17' src='imagen/tutor_r39_c17.gif' width='82' height='20' border='0' id='tutor_r39_c17' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='3'><img name='tutor_r40_c7' src='imagen/tutor_r40_c7.gif' width='89' height='19' border='0' id='tutor_r40_c7' alt='' /></td>
   <td rowspan='3'><img name='tutor_r40_c9' src='imagen/tutor_r40_c9.gif' width='89' height='19' border='0' id='tutor_r40_c9' alt='' /></td>
   <td rowspan='3'><img name='tutor_r40_c19' src='imagen/tutor_r40_c19.gif' width='65' height='19' border='0' id='tutor_r40_c19' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td rowspan='2'><img name='tutor_r41_c11' src='imagen/tutor_r41_c11.gif' width='62' height='18' border='0' id='tutor_r41_c11' alt='' /></td>
   <td rowspan='2'><img name='tutor_r41_c13' src='imagen/tutor_r41_c13.gif' width='75' height='18' border='0' id='tutor_r41_c13' alt='' /></td>
   <td rowspan='2'><img name='tutor_r41_c21' src='imagen/tutor_r41_c21.gif' width='65' height='18' border='0' id='tutor_r41_c21' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td><img name='tutor_r42_c15' src='imagen/tutor_r42_c15.gif' width='75' height='17' border='0' id='tutor_r42_c15' alt='' /></td>
   <td><img src='imagen/spacer.gif' width='1' height='17' border='0' alt='' /></td>
  </tr>
</table>
</body>
</html>
";
}
else{

echo "<meta http-equiv='refresh' content='2;URL=index.htm' />

<h1 class='adver'><center>Usted esta tratando de ingresar a una zona restringida</center></h1>";
exit;}
?>
