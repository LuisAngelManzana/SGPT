<!doctype html>
<html lang="en">

	<head>
		<title> Revision </title>
	</head>
	<body>

		<?php
			$correcciones = $_POST['correcciones'];
			$calif = $_POST['calificacion'];
			$id = $_POST['Id'];
			$nom = $_POST['Nom'];

			$servidor = "localhost";
		    $usuario = "root";
		    $clave = "root";
		    $bd ="crud";
		    $connect = mysqli_connect($servidor, $usuario, $clave, $bd);

		    $c = "SELECT idproyecto_estudiante FROM proyecto_estudiante WHERE nombre = '".$nom."';";
		    $r = mysqli_query($connect, $c);
		    $rg = mysqli_fetch_array($r);

	    	$c2 = "INSERT INTO evaluacion (idevaluacion, calificacion, proyecto_estudiante_idproyecto_estudiante) VALUES (NULL,'". $calif ." - ".$correcciones."', '". $rg['idproyecto_estudiante']."');";
		 	$r2 = mysqli_query($connect, $c2);
		 	mysqli_close($connect);
		?>
		<?php
		    echo "Evaluacion guardada con exito";
		?> 
	</body>
</html>

