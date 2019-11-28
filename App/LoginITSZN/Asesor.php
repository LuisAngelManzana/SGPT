<!doctype html>
<html lang="en">

	<head>
		<title>Docente</title>
	</head>
	
		<LINK REL=StyleSheet HREF="estilosboton/estilosboton.css" Type="text/css" MEDIA= screen>
		  <!-- Title -->
  <h1>Bienvenido Docente</h1>
 
  	<?php $nombre = $_GET['Nombre']; $pass = $_GET['Pass']; $id = $_GET['id']; $tipo = $_GET['tipo'];?>

  	

  <!-- Buttons Start!! -->
  <div class="buttons">
    <a class="btn blue" HREF="Dar_de_alta_restaurantes.php?tipo=<?php echo $tipo;?>&id=<?php echo $id;?>&Nombre=<?php echo $nombre;?>&Pass=<?php echo $pass;?>"> Validar Proyecto</a>
   
   
  <!--<a class="btn yellow">Yellow Button</a>-->
  </div>
    
  
	</body>
</html>

		