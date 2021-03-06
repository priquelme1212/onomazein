<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://www.onomazein.net/images/favicon.ico" />
<title>Onomázein - Contacto</title>
<meta name="keywords" content="Revista de Lingüística, Lingüística, Filología, Traducción, Linguistics Journal, Linguistics, Philology, Translation" />
<meta name="description" content="Onomázein, revista semestral de Lingüística, Filología y Traducción. Onomázein acoge artículos inéditos derivados de investigaciones científicas en las diferentes disciplinas de la Lingüística teórica y aplicada; en Filología clásica, indoeuropea, románica e hispánica; en Teoría de la traducción y Terminología, así como estudios destacados sobre lenguas indígenas" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo2 {font-size: 9px}
.Estilo3 {
	color: #660000;
	font-style: italic;
}
-->
</style>
</head>
<body>
<div id="header"></div>
<!-- end #header -->
<div id="page">
	<div id="content">
		<div class="post">
	<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$institucion = $_POST['institucion'];

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de " . $institucion . " \r\n";
$mensaje .= "Su correo es: " . $correo . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'cgonzalv@uc.cl';
$asunto = 'Consulta desde sitio de Onomázein en internet';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo '';
?>
	<html>
<head>
<title>ContactoR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('../imagenes/Menu1_03.jpg','../imagenes/Menu1_05.jpg','../imagenes/Menu1_07.jpg','../imagenes/Menu1_09.jpg','../imagenes/Menu1_11.jpg','../imagenes/Menu1_13.jpg')">
<!-- ImageReady Slices (ContactoR.ai) -->
<table width="1024" height="769" border="0" align="center" cellpadding="0" cellspacing="0" id="Tabla_01">
	<tr>
		<td colspan="17" align="left" valign="top">
			<img src="Im%e1genes/RespuetaContacto_01.jpg" width="1024" height="239" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="Im%e1genes/RespuetaContacto_02.jpg" width="72" height="457" alt=""></td>
		<td rowspan="2" align="left" valign="top"><a href="../01_Presentacion/Presentacion.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image109','','../imagenes/Menu1_03.jpg',1)"><img src="../imagenes/Menu2_03.jpg" alt="" name="Image109" width="111" height="62" border="0"></a></td>
		<td rowspan="3">
			<img src="Im%e1genes/RespuetaContacto_04.jpg" width="7" height="118" alt=""></td>
		<td rowspan="2" align="left" valign="top"><a href="../02_NPublicados/NPublicados.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image72','','../imagenes/Menu1_05.jpg',1)"><img src="../imagenes/Menu2_05.jpg" alt="" name="Image72" width="111" height="62" border="0"></a></td>
		<td rowspan="3">
			<img src="Im%e1genes/RespuetaContacto_06.jpg" width="8" height="118" alt=""></td>
		<td rowspan="2" align="left" valign="top"><a href="../05_CuerpoEditorial/CuerpoEditorial.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image73','','../imagenes/Menu1_07.jpg',1)"><img src="../imagenes/Menu2_07.jpg" alt="" name="Image73" width="111" height="62" border="0"></a></td>
		<td rowspan="3">
			<img src="Im%e1genes/RespuetaContacto_08.jpg" width="7" height="118" alt=""></td>
		<td colspan="2" rowspan="2" align="left" valign="top"><a href="../06_NormasP/NormasP.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image74','','../imagenes/Menu1_09.jpg',1)"><img src="../imagenes/Menu2_09.jpg" alt="" name="Image74" width="111" height="62" border="0"></a></td>
		<td rowspan="5">
			<img src="Im%e1genes/RespuetaContacto_10.jpg" width="8" height="457" alt=""></td>
		<td rowspan="2" align="left" valign="top"><a href="../07_Busqueda/Busqueda.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image75','','../imagenes/Menu1_11.jpg',1)"><img src="../imagenes/Menu2_11.jpg" alt="" name="Image75" width="111" height="62" border="0"></a></td>
		<td rowspan="5">
			<img src="Im%e1genes/RespuetaContacto_12.jpg" width="7" height="457" alt=""></td>
		<td rowspan="2" align="left" valign="top"><a href="../08_Indizaciones/Indizaciones.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image76','','../imagenes/Menu1_13.jpg',1)"><img src="../imagenes/Menu2_13.jpg" alt="" name="Image76" width="111" height="62" border="0"></a></td>
		<td rowspan="5">
			<img src="Im%e1genes/RespuetaContacto_14.jpg" width="8" height="457" alt=""></td>
		<td rowspan="2" align="left" valign="top"><img src="../imagenes/Menu1_15.jpg" width="111" height="62" alt=""></td>
		<td colspan="2">
			<img src="Im%e1genes/RespuetaContacto_16.jpg" width="130" height="28" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="Im%e1genes/RespuetaContacto_17.jpg" width="13" height="429" alt=""></td>
		<td align="left" valign="top"><a href="ContactUS.html"><img src="Im%e1genes/RespuetaContacto_18.jpg" width="117" height="34" alt=""></a></td>
	</tr>
	<tr>
		<td>
			<img src="Im%e1genes/RespuetaContacto_19.jpg" width="111" height="56" alt=""></td>
		<td>
			<img src="Im%e1genes/RespuetaContacto_20.jpg" width="111" height="56" alt=""></td>
		<td>
			<img src="Im%e1genes/RespuetaContacto_21.jpg" width="111" height="56" alt=""></td>
		<td colspan="2">
			<img src="Im%e1genes/RespuetaContacto_22.jpg" width="111" height="56" alt=""></td>
		<td rowspan="3"><img src="Im%e1genes/RespuetaContacto_23.jpg" width="111" height="395" alt=""></td>
		<td rowspan="3">
			<img src="Im%e1genes/RespuetaContacto_24.jpg" width="111" height="395" alt=""></td>
		<td rowspan="3">
			<img src="Im%e1genes/RespuetaContacto_25.jpg" width="111" height="395" alt=""></td>
		<td rowspan="3">
			<img src="Im%e1genes/RespuetaContacto_26.jpg" width="117" height="395" alt=""></td>
	</tr>
	<tr>
		<td colspan="7" align="left" valign="top">
			<img src="Im%e1genes/RespuetaContacto_27.jpg" width="454" height="98" alt=""></td>
		<td rowspan="2">
			<img src="Im%e1genes/RespuetaContacto_28.jpg" width="12" height="339" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="Im%e1genes/RespuetaContacto_29.jpg" width="454" height="241" alt=""></td>
	</tr>
	<tr>
		<td colspan="17" align="left" valign="top">
			<img src="Im%e1genes/RespuetaContacto_30.jpg" width="1024" height="72" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="Im%e1genes/espacio.gif" width="72" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="99" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="Im%e1genes/espacio.gif" width="117" height="1" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
