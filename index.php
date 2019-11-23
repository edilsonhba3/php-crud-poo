<?php 
	include_once('modulos/Enrutador.php');
	include_once('modulos/EstudianteController.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<?php include_once('vistas/navbar.php'); ?>		
	
	<div class="container">	
		<section>
			<?php 
				$enrutador = new Enrutador();
				if(isset($_GET['cargar']))
				{
					if($enrutador->validarGET($_GET['cargar']))
					{
						$enrutador->cargarVista($_GET['cargar']);
					}				
				}	
				else
				{
					$enrutador->validarGET('');
				}		
			?>
		</section>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>