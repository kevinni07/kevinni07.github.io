<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo PHP</title>
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
			echo "Conexion establecida";
			$sql = "SELECT * FROM historia";
			$data = $conexion->query($sql);
			while($obj = $data->fetch_object()){ ?>
				<table border="1">
					<tr>
						<td><?php echo $obj->id; ?></td>
						<td><?php echo $obj->nombre; ?></td>
						<td><?php echo $obj->descubridor; ?></td>
						<td><?php echo $obj->anos; ?></td>
						<td><?php echo $obj->creadores; ?></td>
						<td><?php echo $obj->ubicacion; ?></td>
					</tr>
				</table>
			<?php }
			$data->close();
			$conexion->close();
	?>

</body>
</html>

