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
<html lang="en" xmlns:th="http://www.thymeleaf.org">
    
        <head>
                <title>Registro de Proyecto</title>
                
                <!--JQUERY-->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<!-- Los iconos tipo Solid de Fontawesome-->
	<link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="css/user-form.css"
		th:href="@{css/user-form.css}">
		
		<!-- DATA TABLE -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
		
                
        </head>
        <body>
        	<div class="container">
        	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		    <ul class="nav nav-tabs justify-content-end">
			
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Registro De Proyectos</a>
               </ul>
       
           <div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			<div class="card">
	    <div class="card-header">
       <h2> ANEXO XXXI </h2>
       </div>
	    
	            <div class="card-header">
				<form action="" method="post" role="form" autocomplete="off" class="form">
				
                   <div class="form-group row">
                   <label class="col-lg-3 col-form-label form-control-label">Nombre del proyecto</label>
                   
                   <div class="col-lg-9">
                    <input type="text" name="nombre" required style="width:400px; height:30px;"><br>
                   </div>
                    </div>
		        
		        <div class="form-group row">
		        <label class="col-lg-3 col-form-label form-control-label">Asesor 1:</label>
		        <div class="col-lg-9">
		        <input type="text" name="asesor" placeholder="Nombre Asesor" class="input__text">
		        <select name="asesor">
	
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
</div>
</div>
		       <br>
				<fieldset>Datos de los Estudiantes
				<br><br>
				
				<div class="form-group">
				<p>Datos del Estudiante 1</p><br>
				<input type="text" name="nombre_c" placeholder="Nombre completo" class="input__text">	
				<br><br>
				
				<div class="form-group row">
		        <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
				<div class="col-lg-9">
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
                    </div>
                    </div>
<br>
                <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Numero de Control:</label>
                <div class="col-lg-9">
				<input type="text" name="nc" placeholder="Numero control" class="input__text">
                    </div>
                    </div>
                    
                <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Carrera:</label>
                <div class="col-lg-9">
				<input type="text" name="carrera" placeholder="Carrera" class="input__text">
                    </div>
		</div>
				<p>Datos del Estudiante 2</p><br>
				
				
				<div class="form-group row">
				<label class="col-lg-3 col-form-label form-control-label">Nombre:</label>
				  <div class="col-lg-9">
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
                    </div>
                    </div>
            
                <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Numero de control:</label>
                <div class="col-lg-9">
				<input type="text">
                    </div>
                    </div>
				
				<div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Carrera</label>
                <div class="col-lg-9">
				<input type="text">
                    </div>
                    </div>
				<p>Datos del Estudiante 3</p>
				
				
				<div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
				<div class="col-lg-9">
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
                    </div>
                    </div>
                    
                <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Numero de Control: </label>
				<div class="col-lg-9">
				<input type="text">
                    </div>
                    </div>
				
				<div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Carrera: </label>
                <div class="col-lg-9">
				<input type="text">
                    </div>
                    </div>
                    
				<div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Observaciones </label>
                <div class="col-lg-9">
				<textarea name="comentarios" rows="5" cols="50"></textarea>
                    </div>
                    </div>
                    </div>
				</fieldset>
                    </form>
				<div class="form-group row">
		        <div class="col-lg-12 text-center">
				<a href="LoginITSZN/index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
                    </div>
            
</body>
</html>