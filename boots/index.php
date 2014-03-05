<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proyecto Bootstrap</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">


</head>
<body>
	
	<div class="container well">
	<form action="_POST" method="POST" role="form" style="width:45%">
		<legend>Form title</legend>
			<div class="form-group ">
			<div class="form-group has-success has-feedback">
				<input type="text" class="form-control input-sm" id="nom" placeholder="Nombre">
				<span class="glyphicon glyphicon-ok form-control-feedback"></span>
			</div>
			<input type="number" class="form-control input-sm" id="ced" placeholder="Cedula">
			<input type="email" class="form-control input-sm" id="cor" placeholder="Correo">
			<input type="date" class="form-control input-sm" id="nac" placeholder="Fecha nacimiento">
			<input type="tel" class="form-control input-sm" id="tel" placeholder="Telefono">
			<input type="color" class="form-control input-sm">
			<input type="text" class="form-control input-sm" id="usu" placeholder="Usuario">
			<input type="password" class="form-control input-sm" id="pas" placeholder="Contraseña">
			<label class="checkbox-inline">
				<input type="checkbox" id="sex" value="M">Masculino
			</label>
			<label class="checkbox-inline">
				<input type="checkbox" id="sex" value="F">Femenino
			</label>

			</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

		
	</div>

	<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>