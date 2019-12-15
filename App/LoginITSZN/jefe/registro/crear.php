<?php
	require('fpdf/fpdf.php');

	$NombreProyecto = $_POST['NomProy'];
	$NombreDepartamento = $_POST['NomDep'];
	$Lugar = $_POST['Lugar'];
	$NombreJefe = $_POST['NombreJefe'];	
	$AlumInv_NC = $_POST['NC'];
	$AlumInv_NombreAlumno = $_POST['NomAlumno'];
	$AlumInv_Carrera = $_POST['Carrera'];
	$AlumInv_Semestre = $_POST['Semestre'];	
	$Observaciones = $_POST['Observaciones'];
	$numalum = $_POST['numalum'];
	$Asesores = $_POST['Asesores'];
	$FechaActual = $_POST['FechaActual'];

	$pdf = new FPDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',15);
	
	$pdf->Cell(192,10, 'ANEXO XXXII. FORMATO DE REGISTRO DE PROYECTO PARA LA', 0, 0, 'C');
	$pdf->Ln(8);
	$pdf->Cell(192,10, 'TITULACION INTEGRAL', 0, 0, 'C');
	$pdf->Ln();
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,4,'                                 "Hoja membretada oficial"',0,1,'C');
	$pdf->Ln(5);
	$pdf->Cell(0,4,'Asunto: Registro de proyecto para la titulacion integral.',0,1,'R');
	$pdf->Ln(10);

	$pdf->Cell(192,10, "C: ". $NombreJefe, 0, 0, 'L');
	$pdf->Ln(5);
	$pdf->Cell(192,10, "Jefe(a) de la Division de Estudios Profesionales o su equivalente en los Institutos Tecnologicos Descentralizados", 0, 0, 'L');
	$pdf->Ln(10);
	$pdf->Cell(192,10, "PRESENTE", 0, 0, 'L');
	$pdf->Ln(8);

	$pdf->SetFont('Times','',11);

	$pdf->Cell(192,10, 'Departamento de: '. $NombreDepartamento, 0, 0, 'L');
	$pdf->Ln(6);

	$pdf->Cell(192,10, 'Lugar: '. $Lugar, 0, 0, 'L');
	$pdf->Ln(6);
	$pdf->Cell(192,10, 'Fecha: ' . $FechaActual, 0, 0, 'L');
	$pdf->Ln(15);
	$pdf->SetWidths(array(60,132));
	$pdf->Row(array('Nombre del proyecto:',$NombreProyecto,));
	$pdf->Row(array('Nombre(s) del (de los) asesor (es):', $Asesores));
	$pdf->Row(array('Numero de estudiantes:', $numalum));
	$pdf->Ln(10);
	$pdf->Cell(192,5,"Datos de (de los) estudiante (s)",1);
	$pdf->Ln(5);
    $pdf->Cell(64,5,"No de Control",1);
	$pdf->Cell(64,5,"Nombre",1);
    $pdf->Cell(64,5,"Carrera",1);
    $pdf->Ln();
	$pdf->SetWidths(array(64,64,64));
	$pdf->Row(array($AlumInv_NC,$AlumInv_NombreAlumno,$AlumInv_Carrera));
	$pdf->Ln(10);
	$pdf->Cell(192,10, "Observaciones ", 1, 'L');
	$pdf->Ln(10);
	$pdf->MultiCell(192,10, $Observaciones, 1, 'L', 0);
	$pdf->Ln(15);
	$pdf->SetFont('Times','B',11);
	$pdf->Cell(192,10, 'ATENTAMENTE', 0, 0, 'C');
	$pdf->Ln(20);
	$pdf->Cell(192,10,$NombreJefe, 0, 0, 'C');
	$pdf->Ln(1);
	$pdf->Cell(192,10, "     ____________________________________________________________", 0, 0, 'C');
	$pdf->Ln(5);
	$pdf->Cell(192,10, 'Nombre y firma del (de la) Jefe(a) de Departamento Academico', 0, 0, 'C');
	//$pdf->Output();
	$pdf->Output("F");
	echo "ARCHIVO SUBIDO EXITOSAMENTE";
	$doc = addslashes(fread(fopen('doc.pdf',"r"), filesize('doc.pdf')));
	$servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd ="crud";
    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
    $consulta = "INSERT INTO proyecto_asesor (id, nombre, docente_id, documento) VALUES (0,'". $NombreProyecto ."-".$FechaActual."', NULL, '". $doc."');";
    $consultaE = "INSERT INTO proyecto_estudiante (idproyecto_estudiante, estudiante_id, nombre, documento) VALUES (0, NULL, '". $NombreProyecto ."-".$FechaActual."', '". $doc."');";
	$resultado = mysqli_query($conexion, $consulta);
	$resultado = mysqli_query($conexion, $consultaE);
	mysqli_close($conexion);
?>