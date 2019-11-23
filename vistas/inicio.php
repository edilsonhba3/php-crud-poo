<?php 

	$controlador = new EstudianteController();
	$resultado = $controlador->index();

	if(isset($_POST['eliminar']))
	{
		$id = $_POST['id'];
		$res = $controlador->eliminar($id);
		if($res)
		{
			header("Location: ?cargar");
			print("borrado");
		}
		else
		{
			print("error al borrar");	
		}
		
	}

?>

<h3>Estudiantes</h3>

<table id="tblEstudiante" class="table table-hover">
	<thead>
		<th>id</th>
		<th>dui</th>
		<th>nombre</th>
		<th>apellido</th>
		<th>promedio</th>
		<th>accion</th>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['dui']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['apellido']; ?></td>
				<td><?php echo $row['promedio']; ?></td>
				<td>
					<form action="" method="POST">
						<a class="btn btn-success" href="?cargar=ver&id=<?php echo $row['id']; ?>">Ver</a>
						<a class="btn btn-primary" href="?cargar=editar&id=<?php echo $row['id']; ?>">Editar</a>					
						
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<button class="btn btn-danger" name="eliminar" type="submit">Eliminar</button> 
					</form>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
