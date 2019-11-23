
<?php 
	
	$controlador = new EstudianteController();

	if(isset($_POST['enviar']))
	{

		$dui 		= $_POST['dui'];
		$nombre 	= $_POST['nombre'];
		$apellido 	= $_POST['apellido'];
		$telefono 	= $_POST['telefono'];
		$edad 		= $_POST['edad'];
		$nota1 		= $_POST['nota1'];
		$nota2 		= $_POST['nota2'];
		$nota3 		= $_POST['nota3'];

		$res = $controlador->crear($dui, $nombre, $apellido, $telefono, $edad, $nota1, $nota2, $nota3);
		if($res)
		{
			header("Location: ?cargar");
		}
		else
		{
			echo "existe dui";
		}
	}

?>

<h3>Nuevo Estudiante</h3>

<form method="POST" action="">

  <div class="row">
  	
  	<div class="col-md-4">
  		<div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre" required="required">
		  </div>		  

		  <div class="form-group">
		    <label for="telefono">Telefono</label>
		    <input type="text" class="form-control" name="telefono" placeholder="Ingrese Telefono" required="required">
		  </div>
  	</div>
  	
  	<div class="col-md-4">
  		<div class="form-group">
		    <label for="apellnameo">Apellido</label>
		    <input type="text" class="form-control" name="apellido" placeholder="Ingrese Apellido" required="required">
		  </div>

		  <div class="form-group">
		    <label for="edad">Edad</label>
		    <input type="text" class="form-control" name="edad" placeholder="Ingrese Edad" required="required">
		  </div>		  
  	</div>

  	<div class="col-md-4">
  		<div class="form-group">
		    <label for="dui">Dui</label>
		    <input type="text" class="form-control" name="dui" placeholder="Ingrese Dui" required="required">
		  </div>

		  <div class="form-group">
		    <label for="txtNombre">Notas</label>
		    <input type="text" class="form-control" name="nota1" placeholder="Ingrese Nota 1" required="required">
		    <input type="text" class="form-control" name="nota2" placeholder="Ingrese Nota 2" required="required">
		    <input type="text" class="form-control" name="nota3" placeholder="Ingrese Nota 3" required="required">
		  </div>
  	</div>
  </div>
  
  <button type="submit" name="enviar" class="btn btn-primary">Guardar</button>
</form>
