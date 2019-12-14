<!doctype html>
<html lang="en">

	<head>
		<title> Revision </title>
	</head>

	<body>

        <form method="POST" action="p2.php" name="formulario" enctype="multipart/form-data">          
            <br> 
            <h2 style="font-size: 44px;" align="center" > Selecciona un proyecto </h2>

            <table border="1" align="center">
			<tr>
				<th> Seleccion </th>
	        </tr>
				<tr align="center">
						<?php

							$servidor = 'localhost';
							$usuario = 'root';
							$clave = 'root';
							$bd ='crud';
							$connect = mysqli_connect($servidor, $usuario, $clave, $bd);

							$c = "SELECT * FROM proyecto_estudiante WHERE SUBSTR(nombre,-7,3) = '-Pv'";
		            		$r = mysqli_query($connect, $c);
							if(mysqli_num_rows($r)>0)
							{								
							    while($rg = mysqli_fetch_array($r))
							    {
							        ?>
							        <tr align="center">
							        	<td> <a href="p2.php?nombre=<?php echo $rg['nombre'];?>&id=<?php echo $rg['id'];?>">  <?php echo $rg['nombre'] ?> </a> </td>
							        </tr> <?php
							    }
							}
							mysqli_close($connect);
						?> 
				</tr>
			</table>           
        </form>

	</body>

</html>