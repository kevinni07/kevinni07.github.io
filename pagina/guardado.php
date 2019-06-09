<?php
   $server="localhost";
   $username = "root";
   $pass = "";
   $db= "pagina";

   $conexion = new mysqli ($server, $username, $pass, $db);

   if($conexion->connect_error){
   	 die("Error en la conexion: " . $conexion->connect_error);
   }
 
   $nombre = $_POST["nombre"];
   $descubridor = $_POST["descubridor"];
   $anos = $_POST["anos"];
   $creadores = $_POST["creadores"];
   $ubicacion = $_POST["ubicacion"];

   $sql = "INSERT INTO historia (nombre, descubridor, anos, creadores, ubicacion) VALUES ('$nombre', '$descubridor', $anos, '$creadores', '$ubicacion')";

   if ($conexion->query($sql) === TRUE){
   	header('Location: consultarhist.php');
   }else{
   		echo "Error: " .$sql. "<br>" . $conexion->error;
   	}
   

?>