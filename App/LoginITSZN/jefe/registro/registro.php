<!doctype html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
	<head>
		<title> Registro </title>
		
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
			
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Registrar Proyecto</a>
       </ul>
       
       <div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			<div class="card">
	    <div class="card-header">
       <h2> ANEXO XXXII </h2>
       </div>
       
       <div class="card-body">
        <form method="POST" action="crear.php" name="formulario" enctype="multipart/form-data" class="form" role="form" autocomplete="off">     
        
            <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Jefe de division:</label>
            <div class="col-lg-9">
            <input type="text" name="NombreJefe" id="NombreJefe" style="width:400px; height:30px;">
            </div>
            </div>

           <div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label">Departamento de:</label>
           <div class="col-lg-9">
            <input type="text" name="NomDep" id="NomDep" style="width:400px; height:30px;">
            </div>
            </div>
            
            <div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label">Lugar:</label>
           <div class="col-lg-9">
            <input type="text" name="Lugar" id="Lugar" style="width:400px; height:30px;">
            </div>
            </div>
            
            <div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label">Fecha:</label>
           <div class="col-lg-9">
            <input type="date" name="FechaActual" id="FechaActual"><br><br>
            </div>
            </div>

            <div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label">Nombre del proyecto:</label>
           <div class="col-lg-9">
            <input type="text" name="NomProy" id="NomProy" style="width:400px; height:30px;"> 
            </div>
            </div>

			<div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label">Asesores:</label>
           <div class="col-lg-9">
            <textarea name='Asesores' rows='10' cols='175' style="width:400px; height:100px"'resize: none;' placeholder="Menciona a los asesores";></textarea>	
			</div>
            </div>		
	    	
            <div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label"># de alumnos</label>
           <div class="col-lg-9">
	    	<input type="number" name="numalum" style="width:70px;">   
	    	</div>
            </div>      
	    	
	    	
	    	Alumnos:
	    	<br> <br>
			<table border="1" id="cajas">
				<tr>
					<th> NC </th>
					<th> Alumno </th>
					<th> Carrera </th>
					<th> Semestre </th>				
		        </tr>
		        <tr>
		        	<th> <textarea name="NC" rows="10" cols="25" style="width:100px; height:245px""resize: none;" placeholder="Numeros de control"></textarea> </th>
		        	<th> <textarea name="NomAlumno" rows="10" cols="25" style="resize: none;" placeholder="Nombres"></textarea> </th>
		        	<th> <textarea name="Carrera" rows="10" cols="25" style="resize: none;" placeholder="Carrera"></textarea> </th>
		        	<th> <textarea name="Semestre" rows="10" cols="25" style="width:100px; height:245px""resize: none;" placeholder="Semestre"></textarea> </th>
		        </tr>
	    	</table>
	    	<br> 
            
            <div class="form-group row">
           <label class="col-lg-3 col-form-label form-control-label">Observaciones</label>
           <div class="col-lg-9">
	    	 <textarea name="Observaciones" rows="15" cols="175" style="width:400px; height:100px""resize: none;" placeholder="menciona las observaciones"></textarea>
                </div>
                </div>
                
                

            <div class="form-group row">
		    <div class="col-lg-12 text-center">
            <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
	        </div>
            </form>
            </div>
            </div>
           </div>
			<div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
			</div>
		</div>
	</div>
</div>
        

	</body>

</html>