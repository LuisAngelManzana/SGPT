<!doctype html>
<html lang="en">

	<head>
		<title>Jefe de Departamento</title>
	</head>
	
		<LINK REL=StyleSheet HREF="estilosboton/estilosboton.css" Type="text/css" MEDIA= screen>
		  <!-- Title -->
  <h1>Bienvenido Jefe de Departamento</h1>
 
  	<?php $nombre = $_GET['Nombre']; $pass = $_GET['Pass']; $id= $_GET['id']; $tipo = $_GET['tipo'];?>
  	

  <!-- Buttons Start!! -->
  <div class="buttons">
    <a class="btn blue" HREF="Actualizar_datosCliente.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Registrar Proyecto</a>
    <a class="btn green" HREF="CONSULTACLIENTE.php">Validar Requisitos</a>

    <a class="btn red" HREF="Actualizar_datosGerente.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Asignar Asesores/Revisores</a>

    <a class="btn blue" HREF="Actualizar_datosGerente.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Obtener Reportes</a>
    
   
  <!--<a class="btn yellow">Yellow Button</a>-->
  </div>
    
  
	</body>
</html>

		