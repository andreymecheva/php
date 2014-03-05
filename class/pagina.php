<?php
class pagina
{
	private $titulo;
	private $posicion;
	
	public function iniciar($tit,$pos)
	{
		$this->titulo=$tit;
		$this->posicion=$pos;
	}
	public function imprimir()
	{
		echo "<div align='".$this->posicion."'>".$this->titulo."</div>";
	}
}
?>
<html>
<head>
<title>Video 2</title>
</head>
<body>
<?php
$pa = new pagina;
$pa->iniciar("Titulo de prueba","right");
$pa->imprimir();
?>
</body>
</html>