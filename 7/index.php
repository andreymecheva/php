<?php
require_once("class.php");

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Prueba de conex&iacuteon </title>
</head>
<body>
<h2>listado de comentarios</h2>
<?php
$tra=new Trabajo();
$visitas=$tra->get_visitas();

for ($i=0;$i<sizeof($visitas);$i++)
{
	echo $visitas[$i]["nombre"];
	echo "&nbsp;&nbsp;||&nbsp;&nbsp;";
	echo $visitas[$i]["texto"];
	echo "</br>";
}
?>
</body>
</html>