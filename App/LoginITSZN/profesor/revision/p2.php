<!doctype html>
<html lang="en">

	<head>
		<title> Revision </title>
	</head>

	<body>

        <form method="POST" action="p3.php" name="formulario" enctype="multipart/form-data">

            <?php 
            	$Id = $_GET['id']; 
            	$nombre = $_GET['nombre'];
            ?>
     	            
            <br> <br> <br> <br>
			<input type="hidden" name="Id" value="<?php echo $Id; ?>" id="Id">
			<input type="hidden" name="Nom" value="<?php echo $nombre; ?>" id="Nom">
            <table border="1" align="center">
			<tr>
				<th> Archivo </th>
				<th> Estatus </th>
				<th> Comentario </th>
	        </tr>

            <tr>
            	<td>
            		<h2 style="font-size: 24px;" align="right"> 
	            	 
	            	<a href="documento.php?Doc=<?php echo $nombre;?>">  <?php echo $nombre; ?> </a> 
	            	</h2> 
            	</td>

            	<td>	            	 
						<input type="radio" name="calificacion" value="Correcion"> CORRECCION <br>
						<input type="radio" name="calificacion" value="Rechazado"> RECHAZADO <br>
						<input type="radio" name="calificacion" value="Aprobado"> APROBADO
            	</td>

            	<td>	            	 
						<textarea name="correcciones" id="correcciones" rows="15" cols="90" style="resize: none;"></textarea>
            	</td>
            </tr>

            <tr align="center">
            	<td> <input type="submit" value="Enviar"> </td>
            </tr>
        	</table>                                 
        </form>
	</body>
</html>