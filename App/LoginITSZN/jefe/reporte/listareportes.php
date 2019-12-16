<?php
	require('fpdf/fpdf.php');

    $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','B',15);
    
    $pdf->Cell(192,10, 'Reportes estatus de proyectos', 0, 0, 'C');
	$servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd ="crud";
    $connect = mysqli_connect($servidor, $usuario, $clave, $bd);
    $c = "SELECT * FROM proyecto_asesor INNER join docente where proyecto_asesor.docente_id = docente.id";
    $r = mysqli_query($connect, $c);
    $pdf->Ln(15);
    $pdf->SetWidths(array(102,60,30)); 
    $pdf->Row(array('Nombre del proyecto:','Encargado','Carrera')); 
                        
    if(mysqli_num_rows($r)>0)
    {
        while($row = mysqli_fetch_array($r))
        {
            $pdf->Row(array($row['nombre'],$row['Nombre'],$row['Carrera']));
        }
    }
    mysql_close($connect);
    $pdf->Output();
?>