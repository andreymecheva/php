<html>
	<head>
		<title>
		</title>
	</head>
	<body>
	<?php
	class Cabecero
	{
		private $texto;//atributo
		public function __construct($titulo)
		{
			$this->texto=$titulo;
		}
		public function graficar()//metodo
		{
			echo "<h1>".$this->texto."</h1>";
		}
	}
	/**********************************************************/
	class Cuerpo
	{
		private $lineas=array();
		
		public function iniciar_linea($li)
		{
			$this->lineas[]=$li;
		}
		public function graficar()
		{
			for($i=0;$i<sizeof($this->lineas);$i++)
			{
				?>
				<p><?php echo $this->lineas[$i];?></p>
				<?php
				
			}
		}
	}
	/**************************************************************/
	class Footer
	{
		private $texto;
		public function __construct ($cadena)
		{
			$this->texto=$cadena;
		}
		public function graficar()
		{
			?>
			<hr/>
			<?php echo $this->texto?>
			<?php
		}
	}
	/******************************************************************/
	//clase para la colaboracion de objetos
	class Pagina
	{
		private $cabecera;
		private $body;
		private $pie;
		
		public function __construct($texto1,$texto2)
		{
			$this->cabecera=new Cabecero($texto1);
			$this->body= new Cuerpo();
			$this->pie=new Footer($texto2);
		}
		public function iniciar_cuerpo($texto)
		{
			$this->body->iniciar_linea($texto);
		}
		public function vista()
		{
			$this->cabecera->graficar();
			$this->body->graficar();
			$this->pie->graficar();
		}
		
	}
	//vistas
	
	$pag=new Pagina("Mi titulo de Pagina","Este es el pie de Pagina");
	$pag->iniciar_cuerpo("mi primer parrafo");
	$pag->iniciar_cuerpo("mi segundo parrafo");
	$pag->iniciar_cuerpo("mi tercer parrafo");
	$pag->vista();
	?>
	</body>
</html>