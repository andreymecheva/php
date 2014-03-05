<?php
require_once("../7/class.php");
$tra=new Trabajo();

if (isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	$tra->edit_visitas($_POST["nom"],$_POST["texto"],$_POST["id"]);
	exit;
}

$reg=$tra->get_visitas_por_id($_GET["id"]);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edici&oacuten De Registros</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<center>
<form name="form" action="editar.php" method="post">
<table width="400" align="center">

<tr>
<td align="center" width="400" valign="top" colspan="2">
<h2>Editar Comentario</h2></td>
</tr>

<tr>
<td valign="top" align="right">Su Nombre</td>
<td valign="top" align="left"><input value="<?php echo $reg[0]["nombre"];?>" type="text" name="nom"/></td>
</tr>

<tr>
<td valign="top" align="right">Comentario</td>
<td valign="top" align="left"><textarea name="texto" cols="35" rows="5"><?php echo $reg[0]["texto"];?></textarea></td>
</tr>

<tr>
<td valign="top" width="400" align="center" colspan="2">
<hr />
<input type="hidden" name="grabar" value="si">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="button" value="volver" title="Volver" onclick="window.location='index.php';">
<input type="button" value="Editar" title="Editar" onclick="validar()"/></td>
</tr>

</table>

</form>
</center>
</body>
</html>