<!doctype html>
<html lang="en">

	<head>
		<title>Jefe de Departamento</title>
	</head>
	
		<LINK REL=StyleSheet HREF="../../estilosboton/estilosboton.css" Type="text/css" MEDIA= screen>
		  <!-- Title -->
  <h1>Bienvenido Jefe de Departamento</h1>
 
  	<?php $nombre = $_GET['Nombre']; $pass = $_GET['Pass']; $id= $_GET['id']; $tipo = $_GET['tipo'];?>
  	

  <!-- Buttons Start!! -->
  <div class="buttons">
    <a class="btn blue" HREF="listareportes.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Lista Proyectos </a>
    
    <a class="btn green" HREF="listrepPeriodo.php"> Proyectos por Periodo </a>

    <a class="btn red" HREF="detalle.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Detalle de Proyecto</a>

    <a class="btn blue" HREF="detalleEstatus.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Estatus de Revision de Proyecto </a>
    
   
  <!--<a class="btn yellow">Yellow Button</a>-->
  </div>
    
	</body>
</html>

		