<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background: gray;>
<div class="container">

	<div class="container">
 		<div class="row">
			 <div style=" float: left;">
			 	<p align=center>
		        	<a href="index.html"><img src="imagenes/simbolo2.png" width="300px" alt=""></a>
		        </p>
		        </div>
		         <div style="text-align: center;  margin-top: 50px;"> <FONT FACE="courier"></FONT></div>
				 <div style="text-align: center; margin-top: 50px;"> </div>
				 <div style="text-align: center;  margin-top: 50px;"> </div>
				  <div style="text-align: center;  margin-top: 50px;"> </div>
			    <div style="text-align: center; margin-top: 50px;"> </div>
          <div style="text-align:center;">
            <nav scope="row" style="font-size: 1.2em; text-align: center; margin: 0 auto; color: #230303;">
              <ul>
                 <span><a href="index.html"><FONT FACE="courier"> Home</FONT></a>    </span>
                 <span><a href="Portafolio.html"><FONT FACE="courier"> Pixel gallery</FONT></a>    </span>
                 <span><a href="Portafolio2.html"><FONT FACE="courier"> Photography based Antiquity of history</FONT></a>    </span>
                 <span><a href="Portafolio3.html"><FONT FACE="courier"> Landscape</FONT></a>    </span>                 
              </ul>
              
            </nav>
          </div>

</div>
</div>






	<?php
	   $server="localhost";
	   $username = "root";
	   $pass = "";
	   $db= "pagina";

	   $conexion = new mysqli ($server, $username, $pass, $db);

	   if($conexion->connect_error){
	   	 die("Error en la conexion: " . $conexion->connect_error);
	   }
	    $sql = "SELECT * FROM historia";
	    $data = $conexion->query($sql);
	    echo '<table class="table table-hover">';
	    echo '<thead>';
	    echo '<tr>';
	    echo '<th>id</th>';
	    echo '<th>nombre</th>';
	    echo '<th>descubridor</th>';
	    echo '<th>anos</th>';
	    echo '<th>creadores</th>';
	    echo '<th>ubicacion</th>';
	    echo '<th>Editar</th>'; //opcion para editar
	    echo '<th>Eliminar</th>';
	    echo '</th>';
	    echo '</thead>';
	    echo '<tbody>';

	    while($obj = $data->fetch_object()) {
				echo '<tr><td>'.$obj->id.'</td>';
				echo '<td>'.$obj->nombre.'</td>';
				echo '<td>'.$obj->descubridor.'</td>';
				echo '<td>'.$obj->anos.'</td>';
				echo '<td>'.$obj->creadores.'</td>';
				echo '<td>'.$obj->ubicacion.'</td>';
				echo '<td><a class="btn btn-xs btn-primary" href="Editor.php?id='.$obj->id.'">Editar</a></td>';
				echo '<td><a class="btn btn-xs btn-primary" href="eliminarhist.php?id='.$obj->id.'">Eliminar</a></td></tr>';
				

	    }

	    ?>
	    <td><a class="btn btn-xs btn-primary" href="registrohisto.php?id='.$obj->id.'">Añadir</a></td></tr>;



</body>
</html>