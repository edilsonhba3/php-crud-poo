<?php 

	$controlador = new EstudianteController();	

	if(isset($_GET['id']))
	{
		$row = $controlador->ver($_GET['id']);
	}

?>

<p><label>Nombre : <?php echo $row['nombre']; ?></label></p>
<p><label>Apellido : <?php echo $row['apellido']; ?></label></p>
<p><label>Dui : <?php echo $row['dui']; ?></label></p>
<p><label>Edad : <?php echo $row['edad']; ?></label></p>
<p><label>Telefono : <?php echo $row['telefono']; ?></label></p>
<p><label>Promedio : <?php echo $row['promedio']; ?></label></p>
<a class="btn btn-success" href="?cargar=">Regresar</a>