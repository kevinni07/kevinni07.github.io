<!DOCTYPE html>
<html>
<head>
	<title>Registro de descubrimientos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardado.php" method="POST">
					<div class="form-group">
						<label for=id>id</label>
						<input type="number" name="id" class="form-control">
					</div>
					<div class="form-group">
						<label for=nombre>Nombre:</label>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for=descubridor>Descubridor:</label>
						<input type="text" name="descubridor" class="form-control">
					</div>
					<div class="form-group">
						<label for="anos">Anos</label>
						<input type="number" name="anos" class="form-control">
					</div>
					<div class="form-group">
						<label for="creadores">Creadores</label>
						<input type="text" name="creadores" class="form-control">
					</div>
					<div class="form-group">
						<label for="ubicacion">Ubicacion</label>
						<input type="text" name="ubicacion" class="form-control">
					</div>

					<div class="form-group text-center">
						<input type="submit" name="btn btn-primary" value="Registrar">
						
					</div>
					<a class="btn btn-xs btn-primary" href="consultarhist.php?id='.$obj->id.'">Volver</a>
					

				</form>
				
			
			</div>
			
		</div>
		
	</div>

</body>
</html>