<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$nombreproyecto=$_POST['nombre'];
		$nombreasesor=$_POST['asesor'];

		$nombreestudiante=$_POST['nombre_c'];
		$nc=$_POST['nc'];
		$carrera=$_POST['carrera'];
		

		$nombreestudiante2=$_POST['nombre_c'];
		$nc2=$_POST['nc'];
		$carrera3=$_POST['carrera'];
		

		$nombreestudiante3=$_POST['nombre_c'];
		$nc3=$_POST['nc'];
		$carrera3=$_POST['carrera'];
		
		

		if(!empty($nombreproyecto) && !empty($nombreasesor) && !empty($nombreestudiante) && !empty($nc) && !empty($carrera) ){
			
				$consulta_insert=$con->prepare('INSERT INTO proyecto(id,nombre,asesor) VALUES("",:nombre,:asesor)');
				$consulta_insert->execute(array(
					':nombre' =>$nombreproyecto,
					':asesor' =>$nombreasesor
				));

				 $consultaid="SELECT usuario.id, 
									FROM usuario
									WHERE usuario.tipo = 4";
				$resultado=mysqli_query($cone, $consultanombre);

				$consulta_insert=$con->prepare('INSERT INTO estudiante(id,Carrera,NC) VALUES(:id,:carrera,:nc)');
				$consulta_insert->execute(array(
					':id'=>$renglon,
					':carrera' =>$carrera,
					':nc' =>$nc
				));

				 
  				$servidor='localhost';
  				$usuario='root';
 				 $clave ='';
 				 $bd='crud';
 				 $cone=mysqli_connect($servidor, $usuario, $clave, $bd);
 				 $consultaidproyecto="SELECT id
							FROM proyecto
								";
				$idproyecto=mysqli_query($cone, $consultaidproyecto);
				
				 $consultaidestudiante="SELECT id
							FROM estudiante
								";
				$idestudiante=mysqli_query($cone, $consultaidestudiante);

				$consulta_insert=$con->prepare('INSERT INTO proyecto_estudiante(id_proyecto,id_usuario) VALUES(:idproyecto,:idestudiante)');
				$consulta_insert->execute(array(
					':id_proyecto'=>$idproyecto,
					':id_estudiante' =>$idestudiante
				));
				mysqli_close($cone);
				header('Location: JefeDeDepartamento.php');
			
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="en">
    
        <head>
                <title>Registro de Proyecto</title>
        </head>
        <body>
        	<div class="contenedor">
	
        <header>
	        
    	</header>
            <br><br>
            <h1><center>Formato Anexo XXXI.</h1></center>
			<center>
				<p></p>
				<form action="" method="post">
				<div class="form-group">
		        Nombre del Proyecto: <input type="text" name="nombre" required><br>
		        Nombre Asesor 1: <input type="text" name="asesor" placeholder="Nombre Asesor" class="input__text"><select name="asesor">
	
  <option value=0>Seleccione un Asesor</option>
  <?php 
  $servidor='localhost';
  $usuario='root';
  $clave ='';
  $bd='crud';
  $cone=mysqli_connect($servidor, $usuario, $clave, $bd);
  $consultanombre="SELECT usuario.nombre_c, usuario.id
FROM usuario
INNER JOIN docente ON usuario.id = docente.id
WHERE usuario.tipo = 4";
	$resultado=mysqli_query($cone, $consultanombre);
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon=mysqli_fetch_array($resultado))
		{
			?><option value= <?php echo $renglon['id'];?> ><?php echo $renglon['nombre_c'];?></option>  <?php
		}
	}
	mysqli_close($cone);
	?>
</select>
</div><br>
		       <br>
				<fieldset><p>Datos de los Estudiantes<p><br>
					<div class="form-group">
				<p>Datos del Estudiante 1</p><br>
				<input type="text" name="nombre_c" placeholder="Nombre completo" class="input__text">	
				Nombre: <select name="id">
	
  <option value=0>Seleccione un estudiante</option>
  <?php 
  $servidor='localhost';
  $usuario='root';
  $clave ='';
  $bd='crud';
  $cone=mysqli_connect($servidor, $usuario, $clave, $bd);
  $consultanombre="SELECT usuario.nombre_c
FROM usuario
WHERE usuario.tipo = 2";
	$resultado=mysqli_query($cone, $consultanombre);
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon=mysqli_fetch_array($resultado))
		{
			?><option value= <?php echo $renglon['nombre_c'];?> ><?php echo $renglon['nombre_c'];?></option>  <?php
		}
	}
	mysqli_close($cone);
	?>
</select>
<br>

				Numero de Control:<input type="text" name="nc" placeholder="Numero control" class="input__text"><br><br>
				Carrera:<input type="text" name="carrera" placeholder="Carrera" class="input__text"><br><br>
		</div>
				<p>Datos del Estudiante 2</p><br>	
				Nombre: <select name="id">
	
  <option value=0>Seleccione un estudiante</option>
  <?php 
  $servidor='localhost';
  $usuario='root';
  $clave ='';
  $bd='crud';
  $cone=mysqli_connect($servidor, $usuario, $clave, $bd);
  $consultanombre="SELECT usuario.nombre_c
FROM usuario
INNER JOIN estudiante ON usuario.id = estudiante.id
WHERE usuario.tipo = 2";
	$resultado=mysqli_query($cone, $consultanombre);
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon=mysqli_fetch_array($resultado))
		{
			?><option value= <?php echo $renglon['nombre_c'];?> ><?php echo $renglon['nombre_c'];?></option>  <?php
		}
	}
	mysqli_close($cone);
	?>
</select><br>
				Numero de Control: <input type="text"><br><br>
				Carrera: <input type="text"><br><br>
				<p>Datos del Estudiante 3</p><br>	
				Nombre:<select name="id">
	
  <option value=0>Seleccione un estudiante</option>
  <?php 
  $servidor='localhost';
  $usuario='root';
  $clave ='';
  $bd='crud';
  $cone=mysqli_connect($servidor, $usuario, $clave, $bd);
  $consultanombre="SELECT usuario.nombre_c
FROM usuario
WHERE usuario.tipo = 2";
	$resultado=mysqli_query($cone, $consultanombre);
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon=mysqli_fetch_array($resultado))
		{
			?><option value= <?php echo $renglon['nombre_c'];?> ><?php echo $renglon['nombre_c'];?></option>  <?php
		}
	}
	mysqli_close($cone);
	?>
</select><br>
				Numero de Control: <input type="text"><br><br>
				Carrera: <input type="text"><br><br>
				<br><textarea name="comentarios" rows="5" cols="50">Observaciones</textarea>
				</fieldset>
				<div class="btn__group">
				<a href="LoginITSZN/index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
            </center>
</body>
</html>