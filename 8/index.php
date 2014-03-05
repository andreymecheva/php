<?php
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Insertar</title>
<script type="text/javascript" language="javascript" src="js/funciones.js"></script>
</head>
<body onload="limpiar()">
<center>
<form name="form" action="ingresar.php" method="post">
<table width="400" align="center">

<tr>
<td align="center" width="400" valign="top" colspan="2">
<h2>Ingrese Su Comentario</h2></td>
</tr>

<tr>
<td valign="top" align="right">Su Nombre</td>
<td valign="top" align="left"><input type="text" name="nom"/></td>
</tr>

<tr>
<td valign="top" align="right">Comentario</td>
<td valign="top" align="left"><textarea name="texto" cols="35" rows="5"></textarea></td>
</tr>

<tr>
<td valign="top" width="400" align="center" colspan="2">
<hr />
<input type="button" value="escribir" title="Escribir" onclick="validar()"/></td>
</tr>

</table>

</form>
</center>
<h2>listado de comentarios</h2>
<?php
require_once("../7/class.php");
$tra=new Trabajo();
$visitas=$tra->get_visitas();
echo "<table width='700' border='1' style='background:#dfdfdf;'>";
echo "<tr><td><b>Nombre</b></td><td><b>Comentario</b></td><td><b>Fecha</b></td><td><b>Hora</b></td><td><b></b></td><td><b></b></td></tr>";
for ($i=0;$i<sizeof($visitas);$i++)
{
	echo "<tr><td>".$visitas[$i]["nombre"]."</td>";
	echo "<td>".$visitas[$i]["texto"]."</td>";
	echo "<td>".$visitas[$i]["fecha"]."</td>";
	echo "<td>".$visitas[$i]["hora"]."</td>";
	?><td><a href="javascript:void(0);" onClick="window.location='editar.php?id=<?php echo $visitas[$i]["id"];?>';" title="Editar Registro"><img src='img/editar.png' border='0'/></a></td>
	<td><a href="javascript:void(0)" onClick="window.location='eliminar.php?id=<?php echo $visitas[$i]["id"];?>'" title='Editar Registro'><img src='img/eliminar.png' border='0'/></a></td></tr>
	<?php
}
echo "</table>";
?>
</body>
</html>