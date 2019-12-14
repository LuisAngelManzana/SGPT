<!doctype html>
<html lang="en">

	<head>
		<title>Ingresar</title>
	</head>
	<body>
		<?php
		$nombre =$_GET['Nombre'];
		$pass=$_GET['Pass'];
		
		$servidor="localhost";
		$usuario="root";
		$clave="root";
		$bd="crud";

		$conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
		$consulta="SELECT tipo from usuario where usuario = '".$nombre. "' and contrasena = '".$pass. "';";
		$consulta2 = "SELECT id from usuario where usuario = '".$nombre. "' and contrasena = '".$pass. "';";
		
		$resultado=mysqli_query($conexion, $consulta);
		$resultado2=mysqli_query($conexion, $consulta2);

		$renglon=mysqli_fetch_array($resultado);
		$renglon2=mysqli_fetch_array($resultado2);

		mysqli_close($conexion);
	
		if($renglon['tipo'] == 1)
		{
			echo '<fieldset>Espere un momento...</fieldset>';
		?><script> window.location="Administrador.php?tipo=<?php echo $renglon['tipo'];?>&id=<?php echo $renglon2['id'];?>&Nombre=<?php echo $nombre;?>&Pass=<?php echo $pass;?>"; </script> <?php 

		} else if($renglon['tipo'] == 2)
		{
		echo '<fieldset>Espere un momento...</fieldset>';
		?><script> window.location="Estudiante.php?tipo=<?php echo $renglon['tipo'];?>&id=<?php echo       $renglon2['id'];?>&Nombre=<?php echo $nombre;?>&Pass=<?php echo $pass;?>"; </script> <?php 
		
	    } else if($renglon['tipo'] == 3)
		{
		echo '<fieldset>Espere un momento...</fieldset>';
		?><script> window.location="JefeDeDepartamento.php?tipo=<?php echo $renglon['tipo'];?>&id=<?php echo       $renglon2['id'];?>&Nombre=<?php echo $nombre;?>&Pass=<?php echo $pass;?>"; </script> <?php 
		 } else if($renglon['tipo'] == 4)
		{
		echo '<fieldset>Espere un momento...</fieldset>';
		?><script> window.location="Asesor.php?tipo=<?php echo $renglon['tipo'];?>&id=<?php echo       $renglon2['id'];?>&Nombre=<?php echo $nombre;?>&Pass=<?php echo $pass;?>"; </script> <?php 
		}
	?>
	</body>
</html>

	