<!doctype html>
<html lang="en">
	<head>
		<title> Registro </title>
	</head>

	<body>
        <form method="POST" action="crear.php" name="formulario" enctype="multipart/form-data">     
        <div align="center";>  
            <h2> ANEXO XXXII </h2>

            Jefe de division: <input type="text" name="NombreJefe" id="NombreJefe" style="width:1070px; height:40px;"> <br> <br>

            Departamento de: <input type="text" name="NomDep" id="NomDep" style="width:1040px; height:40px;"> <br> <br>

            Lugar: <input type="text" name="Lugar" id="Lugar" style="width:960px; height:40px;"> Fecha: <input type="date" name="FechaActual" id="FechaActual">

			<br> <br>

            Nombre del Proyecto: <input type="text" name="NomProy" id="NomProy" style="width:1030px; height:40px;"> <br> <br>

			Asesores: <br> <textarea name='Asesores' rows='10' cols='175' style='resize: none;' placeholder="Menciona a los asesores";></textarea>	
					
	    	<br> <br>

	    	Numero de alumnos: <input type="number" name="numalum" style="width:30px;">         Alumnos:
	    	<br> <br>

			<table border="1" id="cajas">
				<tr>
					<th> NC </th>
					<th> Alumno </th>
					<th> Carrera </th>
					<th> Semestre </th>				
		        </tr>
		        <tr>
		        	<th> <textarea name="NC" rows="10" cols="25" style="resize: none;" placeholder="Numeros de control"></textarea> </th>
		        	<th> <textarea name="NomAlumno" rows="10" cols="25" style="resize: none;" placeholder="Nombres"></textarea> </th>
		        	<th> <textarea name="Carrera" rows="10" cols="25" style="resize: none;" placeholder="Carrera"></textarea> </th>
		        	<th> <textarea name="Semestre" rows="10" cols="25" style="resize: none;" placeholder="Semestre"></textarea> </th>
		        </tr>
	    	</table>
	    	<br> <br>

	    	Observaciones: <br> <br>
				<textarea name="Observaciones" rows="15" cols="175" style="resize: none;" placeholder="menciona las observaciones"></textarea>
				<br>

            
            <input type="submit" value="Enviar">
            </div>
        </form>

	</body>

</html>