<?php 
		$server="localhost";
		$username = "root";
		$pass = "";
		$db= "pagina";

		$conexion = new mysqli ($server, $username, $pass, $db);

		if($conexion->connect_error){
				die("Error en la conexión: " . $conexion->connect_error);
		}

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$descubridor = $_POST["descubridor"];
		$anos = $_POST["anos"];
		$creadores = $_POST["creadores"];
		$ubicacion = $_POST["ubicacion"]; 

		$sql = "UPDATE historia SET nombre='$nombre', descubridor='$descubridor', anos=$anos, creadores='$creadores', ubicacion='$ubicacion' WHERE id=$id";

		if ($conexion->query($sql) === TRUE) {
   			 echo "Registro de lugar modificado <a href='consultarhist.php'>Regresar</a>";
		} else {
			echo "ocurrió un error";
			echo $conexion->error;
			echo $sql;
		}
		$conexion->close();
 ?>