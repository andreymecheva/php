<?php
require_once("class/class.php");
if (isset($_POST) and $_POST["grabar"]=="si")
{
	//print_r($_POST);
	$tra=new Trabajo();
	$tra->insertar_personas();
	exit;	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insertar Personas con PHP PDO</title>
</head>

<body onload="document.form.reset();document.form.nom.focus();">
<ul>
<li><a href="ver_personas.php">ver personas</a></li>
<li><a href="insertar_personas.php">insertar personas</a></li>
<li><a href="editar_personas.php">editar personas</a></li>
<li><a href="ver_personas_con_sp.php">ver personas desde un procedimiento almacenado</a></li>
<li><a href="ver_personas_con_sp_con_parametros.php">ver personas desde un procedimiento almacenado con parámetros</a></li>
</ul>
<hr />
<?php
if (isset($_GET) and $_GET["m"]==1)
{
	?>
    <h3 style="color:#093">El registro ha sido ingregsado exitosamente</h3>
    <?php
}
?>
<form name="form" action="" method="post">
<h2>Ingregsar Persona Nueva</h2>
Nombre : <input type="text" name="nom" />
<br />
E-Mail : <input type="text" name="correo" />
<br />
Teléfono : <input type="text" name="tel" />
<br />
País : <input type="text" name="pais" />
<hr />
<input type="hidden" name="grabar" value="si" />
<input type="submit" value="Insertar" title="Insertar" />
</form>
</body>
</html>