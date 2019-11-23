
<?php 
	
	$controlador = new EstudianteController();

	if(isset($_GET['id']))
	{
		$row = $controlador->ver($_GET['id']);
	}

	if(isset($_POST['enviar']))
	{
		$nombre 	= $_POST['nombre'];
		$apellido 	= $_POST['apellido'];
		$telefono 	= $_POST['telefono'];
		$edad 		= $_POST['edad'];

		$res = $controlador->editar($_GET['id'], $nombre, $apellido, $telefono, $edad);
		if($res)
		{
			header("Location: ?cargar");
		}
		else
		{
			echo "error al modificar";
		}
	}

?>

<h3>Editar Estudiante</h3>

<form method="POST" action="">

  <div class="row">
  	
  	<div class="col-md-4">
  		<div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input value="<?php echo $row['nombre']; ?>" 
		    	   type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre" required="required">
		  </div>		  

		  <div class="form-group">
		    <label for="telefono">Telefono</label>
		    <input value="<?php echo $row['telefono']; ?>"  type="text" class="form-control" name="telefono" placeholder="Ingrese Telefono" required="required">
		  </div>
  	</div>
  	
  	<div class="col-md-4">
  		<div class="form-group">
		    <label for="apellnameo">Apellido</label>
		    <input value="<?php echo $row['apellido']; ?>" 
		     type="text" class="form-control" name="apellido" placeholder="Ingrese Apellido" required="required">
		  </div>

		  <div class="form-group">
		    <label for="edad">Edad</label>
		    <input value="<?php echo $row['edad']; ?>"  type="text" class="form-control" name="edad" placeholder="Ingrese Edad" required="required">
		  </div>		  
  	</div>

  	<div class="col-md-4">
  		<div class="form-group">
		    <label for="dui">Dui</label>
		    <input value="<?php echo $row['dui']; ?>"  type="text" class="form-control" name="dui" disabled="disabled">
		  </div>
  	</div>
  </div>
  
  <button type="submit" name="enviar" class="btn btn-primary">Editar</button>
</form>
