<?php
    require('fpdf/fpdf.php');

    $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','B',15);
    
    $pdf->Cell(192,10, 'Reportes estatus de proyectos', 0, 0, 'C');
	$servidor = "localhost";
    $usuario = "root";
    $clave = "root";
    $bd ="crud";
    $connect = mysqli_connect($servidor, $usuario, $clave, $bd);
    $c = "SELECT * FROM evaluacion INNER join proyecto_estudiante where SUBSTR(proyecto_estudiante.nombre,1,7) = 'INFORME' and proyecto_estudiante.idproyecto_estudiante = evaluacion.proyecto_estudiante_idproyecto_estudiante";
    $r = mysqli_query($connect, $c);
    $pdf->Ln(15);
    $pdf->SetWidths(array(60,132)); 
    $pdf->Row(array('Nombre del proyecto:','Estatus')); 
                        
    if(mysqli_num_rows($r)>0)
    {
        while($row = mysqli_fetch_array($r))
        {
            $pdf->Row(array($row['nombre'],$row['calificacion']));
        }
    }
    mysql_close($connect);
    $pdf->Output();
?>
