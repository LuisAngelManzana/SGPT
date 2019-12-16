<?php

	$doc = $_GET['Doc'];
	$servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd ="crud";
    $connect = mysqli_connect($servidor, $usuario, $clave, $bd);
 	$c = "SELECT * from proyecto_estudiante where nombre = '".$doc."';";
 	$r = mysqli_query($connect, $c);
 	$row = mysqli_fetch_array($r);
	header("Content-length: ".strlen($row['documento']));
	header("Content-type: pdf");
	header('Content-type: application/pdf');
    header("Content-disposition: inline; filename=".$doc.".pdf"); //
	echo ($row['documento']);
	mysqli_close($connect);
?>         

