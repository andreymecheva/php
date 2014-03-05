<?php
abstract class Trabajador
{
	protected $nombre;
	protected $sueldo;
	
	public function __construct($nom,$su)
	{
		$this->nombre=$nom;
		$this->sueldo=$su;
	}
	
	public function retornar_sueldo()
	{
		return $this->sueldo;
	}
}

class Empleado extends Trabajador
{
	
}

class Gerente extends Trabajador
{
	
}

$empl=new Empleado("Juan perez","100.100");
echo "el sueldo del empleado es = ".$empl->retornar_sueldo();

echo "<Hr />";

$emp2=new Gerente("Pedro","12300");
echo "El sueldo del gerente es = " .$emp2->retornar_sueldo();
echo "<Hr />";

if ($empl instanceof Empleado)
{
	echo "el objeto pertenece a la clase empleado";
}else
{
	echo "el objeto pertenece a otra clase";
}
/*$tra=new Trabajador("Andrey Mesa","123456");
echo "el sueldo del trabajador es = " .$tra->retornar_sueldo();
*/
?>