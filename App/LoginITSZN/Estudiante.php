<!doctype html>
<html lang="en">

	<head>
		<title>Gerente</title>
	</head>
	
		<LINK REL=StyleSheet HREF="estilosboton/estilosboton.css" Type="text/css" MEDIA= screen>
		  <!-- Title -->
  <h1>Bienvenido Estudiante</h1>
 
  	<?php $nombre = $_GET['Nombre']; $pass = $_GET['Pass']; $id = $_GET['id']; $tipo = $_GET['tipo'];?>

  	

  <!-- Buttons Start!! -->
  <div class="buttons">
    <a class="btn blue" HREF="alumno/solicitud/p2.php?tipo=<?php echo $tipo;?>&id=<?php echo $id;?>&Nombre=<?php echo $nombre;?>&Pass=<?php echo $pass;?>"> Solicitar Titulacion</a>
   
   <a class="btn red" HREF="Actualizar_datosGerente.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Consultar Resultados</a>
    
   
  <!--<a class="btn yellow">Yellow Button</a>-->
  </div>
    
  
	</body>
</html>

		