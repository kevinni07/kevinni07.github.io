<!DOCTYPE html>
<html>
<head>
	<title>Editar </title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php
		$server = "localhost";
		$username = "root";
		$pass = "";
		$db= "pagina";
		$conexion = new mysqli ($server, $username, $pass, $db);
		if($conexion->connect_error){
		die("Error en la conexión: " . $conexion->connect_error);
		}
		$id_historia = $_GET['id'];

		$sql = "SELECT * FROM historia WHERE id=$id_historia LIMIT 1";
		$historia = $conexion->query($sql)->fetch_object();

	?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardado.php" method="POST">
					<input type="hidden" name="id">
					<div class="form-group">
						<label for=nombre>Nombre:</label>
						<input type="text" name="nombre" class="form-control" value="<?php echo $historia->nombre; ?>">
					</div>
					<div class="form-group">
						<label for=descubridor>Descubridor:</label>
						<input type="text" name="descubridor" class="form-control" value="<?php echo $historia->descubridor; ?>">
					</div>
					<div class="form-group">
						<label for="anos">Anos</label>
						<input type="number" name="anos" class="form-control" value="<?php echo $historia->anos; ?>">
					</div>
					<div class="form-group">
						<label for="creadores">Creadores</label>
						<input type="text" name="creadores" class="form-control" value="<?php echo $historia->creadores; ?>">
					</div>
					<div class="form-group">
						<label for="ubicacion">Ubicacion</label>
						<input type="text" name="ubicacion" class="form-control" value="<?php echo $historia->ubicacion; ?>">
					</div>

					<div class="form-group text-center">
						<input type="submit" name="btn btn-primary" value="Registrar">
						
					</div>
				</form>
				
			</div>
			
		</div>
		
	</div>

</body>
</html>