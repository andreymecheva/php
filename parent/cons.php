<?php
class Operacion
{
	protected $valor1;
	protected $valor2;
	protected $resultado;
	
	public function __construct($v1,$v2)
	{
		$this->valor1=$v1;
		$this->valor2=$v2;
	}
	
	public function imprimir()
	{
	return $this->resultado;
	}
}
/**********************************************************/
class Suma extends Operacion
{
	protected $titulo;
	public function __construct($v1,$v2,$tit)
	{
		parent::__construct($v1,$v2);
		$this->titulo=$tit;
	}
	public function operar()
	{
		$this->resultado = $this->valor1 + $this->valor2;
	}
	public function imprimir()
	{
		echo "<H2>".$this->titulo."</H2>";
		echo "<br>";
		echo "la suma de $this->valor1 y $this->valor2 =";
		echo parent::imprimir();
	}
}
/***************************************************************/
$suma= new Suma(2,5,"Hola titulo");
$suma->operar();
$suma->imprimir();

?>