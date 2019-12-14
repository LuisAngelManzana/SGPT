<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$nombreproyecto=$_POST['nombre'];
		$nombreasesor=$_POST['idasesor'];

		$nombreestudiante=$_POST['idestudiante'];
		$nc=$_POST['nc'];
		$carrera=$_POST['carrera'];
		
		

		if(!empty($nombreproyecto) && !empty($nombreasesor) && !empty($nombreestudiante) && !empty($nc) && !empty($carrera) ){
			
				$consulta_insert=$con->prepare('INSERT INTO proyecto(id,nombre,asesor) VALUES("",:nombre,:asesor)');
				$consulta_insert->execute(array(
					':nombre' =>$nombreproyecto,
					'nombre_c'=>$renglonA
				));

				 $consultaid="SELECT usuario.id, 
									FROM usuario
									WHERE usuario.nombre_c = '".$renglonE['id']."'";
				$resultado=mysqli_query($cone, $consultaid);

				$consulta_insert=$con->prepare('INSERT INTO estudiante(id,Carrera,NC) VALUES(:id,:carrera,:nc)');
				$consulta_insert->execute(array(
					':id'=>$resultado,
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
								WHERE proyecto.nombre = '".$nombreproyecto=['nombre']."'";
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
<html lang="es">
<head>
	<meta charset="UTF-8">
	 <title>Registro de Proyecto</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		 <h1><center>Formato Anexo XXXI.</h1></center>
		<form action="" method="post">
			<div class="form-group">
				 Nombre del Proyecto:<input type="text" name="nombre" placeholder="Escriba nombre del proyecto" class="input__text">
				 Nombre Asesor 1: 
				 <option value=0 type="text" name="idasesor"  class="input__text">Seleccione un Asesor</option>
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
		while($renglonA=mysqli_fetch_array($resultado))
		{
			?><option value= <?php echo $renglonA['id'];?> ><?php echo $renglonA['nombre_c'];?></option>  <?php
		}
	}
	mysqli_close($cone);
	?>
</select>
			</div>

			<fieldset><p>Datos de los Estudiantes<p><br>
			<div class="form-group">
				 Nombre Estudiante 1: 
				 <option value=0 type="text" name="idestudiante"  class="input__text">Seleccione un Asesor</option>
				 <select name="idestudiante">
	
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
		while($renglonE=mysqli_fetch_array($resultado))
		{
			?><option value= <?php echo $renglonE['nombre_c'];?> ><?php echo $renglonE['nombre_c'];?></option>  <?php
		}
	}
	mysqli_close($cone);
	?>
</select>
Numero de Control:<input type="text" name="nc" placeholder="Numero control" class="input__text"><br><br>
				<SELECT NAME="carrera" input type="text"  value= class="input__text"  >
  <OPTION >ISC
  <OPTION >IGE
  <OPTION >IEM
  <OPTION >IIA
  <OPTION >IA
  <OPTION >CP
</SELECT>

				<input type="text" name="e_mail" placeholder="E-mail" class="input__text">
			</div>
			<div class="form-group">
			<p>1=Administrador<br>2=Estudiante<br>3=Jefe de departamento<br>4=Revisor/Asesor</p>


<SELECT NAME="tipo" input type="text"  value="<?php if($resultado) echo $resultado['tipo']; ?>" class="input__text"  >
  <OPTION >1
  <OPTION >2
  <OPTION >3
  <OPTION >4
</SELECT>
			<div class="btn__group">
				<a href="LoginITSZN/JefeDeDepartamento.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>