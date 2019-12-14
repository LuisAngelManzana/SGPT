<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		$nombre_c=$_POST['nombre_c'];
		$e_mail=$_POST['e_mail'];
		$tipo=$_POST['tipo'];

		if(!empty($usuario) && !empty($contrasena) && !empty($nombre_c) && !empty($e_mail) && !empty($tipo) ){
			if(!filter_var($e_mail,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO usuario(usuario,contrasena,nombre_c,e_mail,tipo) VALUES(:usuario,:contrasena,:nombre_c,:e_mail,:tipo)');
				$consulta_insert->execute(array(
					':usuario' =>$usuario,
					':contrasena' =>$contrasena,
					':nombre_c' =>$nombre_c,
					':e_mail' =>$e_mail,
					':tipo' =>$tipo
				));
				header('Location: index.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Usuario</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>Registro de usuario</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="usuario" placeholder="Usuario" class="input__text">
				<input type="password" name="contrasena" placeholder="Contraseña" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="nombre_c" placeholder="Nombre completo" class="input__text">
				<input type="text" name="e_mail" placeholder="E-mail" class="input__text">
			</div>
			<div class="form-group">
			<p>1=Administrador<br>2=Estudiante<br>3=Jefe de departamento<br>4=Revisor/Asesor</p>


<select name="id">
	
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
</select>
			<div class="btn__group">
				<a href="LoginITSZN/index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
