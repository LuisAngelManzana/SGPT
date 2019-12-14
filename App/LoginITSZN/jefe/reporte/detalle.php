<!doctype html>
<html lang="en">

	<head>
		<title> Revision </title>
	</head>

	<body>

        <form method="POST" action="p3.php" name="formulario" enctype="multipart/form-data">

            <br> <br> <br> <br>
            <table border="1" align="center">
            <tr>
                <th> Archivo </th>
            </tr>

            <?php 
            	$servidor = "localhost";
                $usuario = "root";
                $clave = "root";
                $bd ="crud";
                $connect = mysqli_connect($servidor, $usuario, $clave, $bd);
                $c = "SELECT * FROM proyecto_asesor;";
                $r = mysqli_query($connect, $c);   
                                    
                if(mysqli_num_rows($r)>0)
                {
                    while($row = mysqli_fetch_array($r))
                    {
                        ?> 
                        <tr> 
                            <td>
                                <a href="documento.php?Doc=<?php echo $row['nombre'];?>">  
                                    <?php echo $row['nombre']; ?> 
                                </a>
                            </td>
                       </tr>
                    <?php
                    }
                }
                mysql_close($connect);
            ?>

            <tr align="center">
            	<td> <input type="submit" value="Enviar"> </td>
            </tr>
        	</table>                                 
        </form>
	</body>
</html>