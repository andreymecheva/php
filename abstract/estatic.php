<?php
class Cadena
{
	protected $nombre;
	
	public static function fecha()
	{
		echo date("d-m-Y");
	}
	public static function corta($palabra,$num)
	{
		$largo=strlen($palabra);
		$cadena=substr($palabra,0,$num);
		return $cadena;
	}
}

Cadena::fecha();

echo "<Hr />";

$texto="hola este es mi texto de la prueba del curso de php orientado a objetos";
$largo=strlen($texto);
echo $largo;

echo "<Hr />";

$cadena = substr($texto,0,3);
echo $cadena;

echo "<Hr />";

echo Cadena::corta($texto,30);
echo "...<a href='#'>Leer Mas</a>";
?>