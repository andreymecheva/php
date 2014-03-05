<?php
class Operacion
{
	protected $valor1;
	protected $valor2;
	protected $resultado;
	
	public function cargar1($vl1)
	{
		$this->valor1=$vl1;
	}
	public function cargar2($v2)
	{
		$this->valor2=$v2;
	}
	public function imprimir()
	{
		echo $this->resultado;
	}
}
/***********************************************/
class Suma extends Operacion
{
	public function operar()
	{
		$this->resultado= $this->valor1 + $this->valor2;
	}
	public function imprimir()// version2
	{
		echo "la suma de $this->valor1 y $this->valor2 =";
		parent::imprimir();
	}
}

Class Multi extends Operacion
{
	public function operar()
	{
		$this->resultado= $this->valor1 * $this->valor2;
	}
	public function imprimir()
	{
		echo "La multimplicacion de $this->valor1 y $this->valor2 =";
		parent::imprimir();
	}
}

$suma= new Suma();
$suma->cargar1("10");
$suma->cargar2("15");
$suma->operar();
$suma->imprimir();
?>
<Hr />
<?php

$multi= new Multi();
$multi->cargar1("2");
$multi->cargar2("6");
$multi->operar();
$multi->imprimir();

?>
