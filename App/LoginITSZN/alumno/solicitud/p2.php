<!doctype html>
<html lang="en">

	<head>
		<title> Revision </title>
	</head>

	<body>

        <form method="POST" action="documento.php" name="formulario" enctype="multipart/form-data">

            <?php 
            	$Id = $_GET['id']; 
            	$nombre = $_GET['nombre'];
            ?>
     	            
            <br> <br> <br> <br>
			<input type="hidden" name="Id" value="<?php echo $Id; ?>" id="Id">
			<input type="hidden" name="Nom" value="<?php echo $nombre; ?>" id="Nom">
            <table border="1" align="center">
			<tr>
				<th> ANEXO XXI </th>
				<th> CARTA NO INCONVENIENCIA </th>
				<th> INFORME </th>
	        </tr>

            <tr>
            	<td>
            	   <input type="file" id="anexo" name="anexo" accept="application/pdf">
            	</td>

            	<td>	            	 
					<input type="file" id="carta" name="carta" accept="application/pdf">	
            	</td>

            	<td>	            	 
					<input type="file" id="informe" name="informe" accept="application/pdf">
            	</td>
            </tr>

            <tr align="center">
            	<td></td> <td> <input type="submit" value="Enviar"> </td> <td></td>
            </tr>
        	</table>                                 
        </form>
	</body>
</html>