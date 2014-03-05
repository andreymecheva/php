<?php
class pagina
{
	private $titulo;
	private $posicion;
	
	public function __construct($tit,$pos)
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
$pe=new pagina("Hola este es el titulo de Construct","right");
$pe->imprimir();
?>
</body>
</html>