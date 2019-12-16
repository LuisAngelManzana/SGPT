    <!doctype html>
    <html lang="en">

        <head>
            <title>Admin</title> 
         <LINK REL=StyleSheet HREF="estilosboton/estilosboton.css" Type="text/css" MEDIA= screen>
        </head>



              <!-- Title -->
      <h1>Bienvenido Administrador</h1>
     <?php $nombre = $_GET['Nombre']; $pass = $_GET['Pass']; $id = $_GET['id']; $tipo = $_GET['tipo'];?>



      <!-- Buttons Start!! -->
      <div class="buttons">
        <a class="btn blue" HREF="Crud/index.php?tipo=<?php echo $tipo;?>&id=<?php echo $id;?>&Nombre=<?php echo $nombre;?>&Pass=<?php echo $pass;?>"> Gestionar Cuentas</a>
        <a class="btn green" HREF="Consultar_ventas_por_dia.php">Hacer Respaldo del sistema</a>
       <a class="btn red" HREF="Respaldo.php?Nombre=<?php echo $nombre;?>&pass=<?php echo $pass;?>"> Hacer Restauracion del sistema</a>



        </body>
    </html>

		