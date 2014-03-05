<?php
class Trabajo 
{
	
	private $p;
	private $dbh;
	
	public function __construct()
	{
		$this->p=array();
		$this->dbh= new PDO('mysql:host=localhost;dbname=personas', "root", "");
	}
	
	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}
	
	public function get_personas()
	{
		self::set_names();
		$sql="select * from personas ;";
		foreach ($this->dbh->query($sql) as $row)
		{
			$this->p[]=$row;
		}
			return $this->p;
			$this->dbh=null;
	}
	public function get_personas_por_id()
	{
		self::set_names();
		$sql="select * from personas where id_persona= ? ;";
		//$sql="select * from personas where id_persona= ? and correo=? ;";
		//echo $sql;
		$stmt=$this->dbh->prepare($sql);
		if ($stmt->execute( array($_GET["id_persona"]) ))
		{
			while ($row = $stmt->fetch())
			{
				$this->p[]=$row;
			}
			return $this->p;
			$this->dbh=null;
		}
		
	}
	
	public function insertar_personas()
	{
		//echo "hola";
		self::set_names();
		$sql="insert into personas values (null,?,?,?,?);";
		$stmt=$this->dbh->prepare($sql);
		
		$stmt->bindParam(1,$nom);
		$stmt->bindParam(2,$correo);
		$stmt->bindParam(3,$tel);
		$stmt->bindParam(4,$pais);
		
		$nom=strip_tags($_POST["nom"]);
		$correo=strip_tags($_POST["correo"]);
		$tel=strip_tags($_POST["tel"]);
		$pais=strip_tags($_POST["pais"]);
		
		$stmt->execute();
		header("Location: insertar_personas.php?m=1");
	}
	
} 
















?>