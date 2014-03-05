<?php
	require_once("class/class.php");
?>
<html>
	<head>
		<title>Trabajo con clases</title>
	</head>
	<body>
		<?php
			$persona->iniciar("Andrey Mesa");
			echo $persona->listar_nombres();
		?>
	</body>
</html>