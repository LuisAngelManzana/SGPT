<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM usuario WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: index.php');
	}


	if(isset($_POST['guardar'])){
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		$nombre_c=$_POST['nombre_c'];
		$e_mail=$_POST['e_mail'];
		$tipo=$_POST['tipo'];
		$id=(int) $_GET['id'];

		if(!empty($usuario) && !empty($contrasena) && !empty($nombre_c) && !empty($e_mail) && !empty($tipo) ){
			if(!filter_var($e_mail,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_update=$con->prepare(' UPDATE usuario SET  
					usuario=:usuario,
					contrasena=:contrasena,
					nombre_c=:nombre_c,
					e_mail=:e_mail,
					tipo=:tipo
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':usuario' =>$usuario,
					':contrasena' =>$contrasena,
					':nombre_c' =>$nombre_c,
					':e_mail' =>$e_mail,
					':tipo' =>$tipo,
					':id' =>$id
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
	<title>Editar usuario</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>Gestion de cuentas</h2>
		<form action="" method="post">
			<div class="form-group">
				<p>Usuario: </p>
				<input type="text" name="usuario" value="<?php if($resultado) echo $resultado['usuario']; ?>" class="input__text">
				<p>Contraseña: </p>
				<input type="password" name="contrasena" value="<?php if($resultado) echo $resultado['contrasena']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<p>Nombre Completo: </p>
				<input type="text" name="nombre_c" value="<?php if($resultado) echo $resultado['nombre_c']; ?>" class="input__text">
				<p>Correo Electrónico: </p>
				<input type="text" name="e_mail" value="<?php if($resultado) echo $resultado['e_mail']; ?>" class="input__text">
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
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
