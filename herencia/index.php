<html>
<head>
</head>
<body>
<?php
class Valores
{
	public $valor1;
	public $valor2;
	public $resultado;
	
	public function cargar1($v1)
	{
		$this->valor1=$v1;
	}
	
	public function cargar2($v1)
	{
		$this->valor2=$v1;
	}
	public function imprimir()
	{
		echo $this->resultado;
	}
}
/***************************************************/
class Sumar extends Valores
{
	public function operar()
	{
		$this->resultado=$this->valor1 + $this->valor2;
	}
}
/****************************************************/
class Restar extends Valores
{
	public function operar()
	{
		$this->resultado=$this->valor1 - $this->valor2;
	}
}
/****************************************************/
$suma=new Sumar();
$suma->cargar1("25");
$suma->cargar2("34");
$suma->operar();
echo "la suma de los valores $suma->valor1 y $suma->valor2 es = ";
$suma->imprimir();
echo "<Hr/>";
$resta=new Restar();
$resta->cargar1("55");
$resta->cargar2("50");
$resta->operar();
echo "La resta de los valores $resta->valor1 y $resta->valor2 es = ";
$resta->imprimir(); 
?>
</body>
</html>