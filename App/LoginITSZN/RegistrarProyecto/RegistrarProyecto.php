<?php 
	include_once 'conexion.php';
	

	if(isset($_POST['guardar'])){
		$nombre=$_POST['id'];
		$NombreP=$_POST['nombre'];
		$Asesor=$_POST['asesor'];
		$Revisor=$_POST['revisor'];

		

		

		if(!empty($NombreP) && !empty($Asesor) && !empty($Revisor) && !empty($nombre))
		{
			}else{
				$consulta_insert=$con->prepare('INSERT INTO proyecto (id,nombre,asesor,revisor) VALUES(:nombre,:NombreP,:Asesor,:Revisor)');
				$consulta_insert->execute(array(
					':id' =>$nombre,
					':nombre' =>$NombreP,
					':asesor' =>$Asesor,
					':revisor' =>$Revisor,
					
				));
				header('Location: JefeDepartamento.php');
			}
		}else {
			echo "<script> alert('Los campos estan vacios');</script>";
		
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
				<input type="text" name="hhh" placeholder="jjj" class="input__text">
				<input type="password" name="contrasena" placeholder="Contraseña" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="nombre_c" placeholder="Nombre completo" class="input__text">
				<input type="text" name="e_mail" placeholder="E-mail" class="input__text">
			</div>
			


<select name="id">
	
  <option value=0>Seleccione un estudiante</option>
  <?php 
  $servidor='localhost';
  $usuario='root';
  $clave ='';
  $bd='crud';
  $cone=mysql_connect($servidor, $usuario, $clave, $bd);
  $consultanombre="SELECT usuario.nombre_c
FROM usuario
INNER JOIN estudiante ON usuario.id = estudiante.id
WHERE usuario.tipo = 2";
	$resultado=mysqli_query($cone, $consultanombre);
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon=mysqli_fetch_array($resultado))
		{
			?><option value= <?php echo $renglon['nombre_c'];?> ><?php echo $renglon['nombre_c'];?></option> 
		}
	}
		
					
?>
</select>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>