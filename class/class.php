<?php
//creamos nuestra primera clase

class persona
{
	//creamos los atributos
	private $nombre;
	//protected $clave; //no tiene herencia
	//public $username;
	
	//creamos los metodos
	public function iniciar ($nom)
	{
		$this->nombre=$nom;
	}
	public function listar_nombres()
	{
		//return count($this->nombre);
		return $this->nombre;
	}
}
//creamos una instancia de la clase persona
$persona = new persona();
?>