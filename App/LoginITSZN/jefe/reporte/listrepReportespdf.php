<?php
	require('fpdf/fpdf.php');

	$Inicio = $_POST['Inicio'];
	$Fin = $_POST['Fin'];

	$pdf = new FPDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',15);
	
	$pdf->Cell(192,10, 'Reportes desde ' . $Inicio. " hasta " . $Fin, 0, 0, 'C');

	$servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd ="crud";
    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
    $consulta = "SELECT proyecto_estudiante.nombre FROM proyecto_estudiante WHERE SUBSTR(proyecto_estudiante.nombre,-13,10) between '".$Inicio."' and '".$Fin."';";
	$resultado = mysqli_query($conexion, $consulta);
	$pdf->Ln(15);
	$pdf->SetWidths(array(60,132));

	if(mysqli_num_rows($resultado)>0)
    {
    	while($renglon = mysqli_fetch_array($resultado))
        {
        	$pdf->Row(array('Nombre del proyecto:',$renglon['nombre']));
        }
    }

	mysqli_close($conexion);
		
	$pdf->Output();
?>