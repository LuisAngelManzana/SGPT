<!doctype html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

	<head>
		<title> Revision </title>
	        
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
	<link rel="stylesheet" type="text/css" href="static/css/user-form.css"
		th:href="@{/css/user-form.css}">
		
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
			
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Solicitud de Titulacion</a>
			
		</ul>
        <div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			<div class="card">
	<div class="card-header">
		<h4>SUBIR ARCHIVOS</h4>
	</div>
        
        <div class="card-body">
        
        <form method="POST" action="documento.php" name="formulario" enctype="multipart/form-data" class="form" role="form" autocomplete="off">

            <?php 
            	$Id = $_GET['id']; 
            	$nombre = $_GET['nombre'];
            ?>
     	            
            <br> <br> <br> <br>
            <div class="form-group row">
			<input type="hidden" name="Id" value="<?php echo $Id; ?>" id="Id">
			<input type="hidden" name="Nom" value="<?php echo $nombre; ?>" id="Nom">
            <table border="1" align="center">
			<tr>
				<th> ANEXO XXI </th>
				<th> CARTA NO INCONVENIENCIA </th>
				<th> INFORME </th>
	        </tr>

            <tr>
            	<td>
            	   <input type="file" id="anexo" name="anexo" accept="application/pdf">
            	</td>

            	<td>	            	 
					<input type="file" id="carta" name="carta" accept="application/pdf">	
            	</td>

            	<td>	            	 
					<input type="file" id="informe" name="informe" accept="application/pdf">
            	</td>
            </tr>

            <tr align="center">
            	<td></td> <td> <input type="submit" value="Enviar"> </td> <td></td>
            </tr>
        	</table>                                 
        </form>
	</body>
</html>