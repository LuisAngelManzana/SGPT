<?php
	$Id = $_POST['Id']; 
	$doc = $_GET['Doc'];
 	$anexo = $_FILES['anexo']['name'];
 	copy($_FILES['anexo']['tmp_name'],$anexo);
 	$carta = $_FILES['carta']['name'];
 	copy($_FILES['carta']['tmp_name'],$carta);
 	$informe = $_FILES['informe']['name'];
 	copy($_FILES['informe']['tmp_name'],$informe);

	$s_anexo = addslashes(fread(fopen($anexo,"r"), filesize($anexo)));
	$s_carta = addslashes(fread(fopen($carta,"r"), filesize($carta)));
	$s_informe = addslashes(fread(fopen($informe,"r"), filesize($informe)));
	$servidor = "localhost";
    $usuario = "root";
    $clave = "root";
    $bd ="crud";
    $connect = mysqli_connect($servidor, $usuario, $clave, $bd);
    $c = "INSERT INTO proyecto_estudiante (idproyecto_estudiante, estudiante_id, nombre, documento) VALUES (0, ".$Id.", 'ANEXO_". $anexo ."-Pv.pdf', '". $s_anexo."');";
	$r = mysqli_query($connect, $c);
    $c1 = "INSERT INTO proyecto_estudiante (idproyecto_estudiante, estudiante_id, nombre, documento) VALUES (0, ".$Id.", 'CARTA_". $carta ."-Pv.pdf', '". $s_carta."');";
	$r1 = mysqli_query($connect, $c1);
    $c2 = "INSERT INTO proyecto_estudiante (idproyecto_estudiante, estudiante_id, nombre, documento) VALUES (0, ".$Id.", 'INFORME_". $informe ."-Pv.pdf', '". $s_informe."');";
	$r2 = mysqli_query($connect, $c2);
	mysql_close($connect);

	echo "ARCHIVOS SUBIDO EXITOSAMENTE";
?>         

