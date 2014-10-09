<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Practica</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/principal.js"></script>
</head>
<body>
	<div class="mensaje bg-success">
		<?php 
		require_once 'clases/Persona.php';
		// $per=new Persona();
	 ?>
	</div>
	
	<header>
		<div class="centrar">
			<fieldset>
				<legend>ingresar registro</legend>
				<form action="#" class="form-horizontal" id="enviar" method="GET">
					<div class="form-group">
						<label  class="col-sm-2 control-label">nombre: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nombre" required id="nombre">
						</div>
					</div>

					<div class="form-group">
						<label  class="col-sm-2 control-label">apellido: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="apellido" required id="apellido">
						</div>
					</div>

					<div class="form-group">
						<label  class="col-sm-2 control-label">cedula: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="cedula" required id="cedula">
						</div>
					</div>

					<div class="form-group">
						<label  class="col-sm-2 control-label">correo: </label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="correo" required id="correo">
						</div>
					</div>
					<br>

					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="btn btn-success btn-block" value="aceptar" id="boton">
					</div>
				</form>
			</fieldset>
		</div>

	</header>
	<div class="triangulito">
		
	</div>
	<article>
		<div class="table">
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>nombres</th>
						<th>apellidos</th>
						<th>cedula</th>
						<th>correo</th>
						<th>actualizar</th>
						<th>eliminar</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</article>
	
</body>
</html>