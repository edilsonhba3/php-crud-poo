<?php 


	include_once('./clases/Estudiante.php');

	class EstudianteController 
	{
		
		private $estudiante;

		public function __construct()
		{
			$this->estudiante = new Estudiante();
		}

		public function index()
		{
			$resultado = $this->estudiante->listar();
			return $resultado;
		}

		public function crear($dui, $nombre, $apellido, $telefono, $edad, $nota1, $nota2, $nota3)
		{
			$promedio = ($nota1 + $nota2 + $nota3) / 3;
			$this->estudiante->set("dui", $dui);
			$this->estudiante->set("nombre", $nombre);
			$this->estudiante->set("apellido", $apellido);
			$this->estudiante->set("telefono", $telefono);
			$this->estudiante->set("edad", $edad);
			$this->estudiante->set("promedio", $promedio);

			$resultado = $this->estudiante->crear();
			return $resultado;
		}

		public function eliminar($id)
		{
			$this->estudiante->set("id", $id);
			return $this->estudiante->eliminar();
		}

		public function ver($id)
		{
			$this->estudiante->set("id", $id);
			return $this->estudiante->ver();
		}

		public function editar($id, $nombre, $apellido, $telefono, $edad)
		{
			$this->estudiante->set("id", $id);			
			$this->estudiante->set("nombre", $nombre);
			$this->estudiante->set("apellido", $apellido);
			$this->estudiante->set("telefono", $telefono);			
			$this->estudiante->set("edad", $edad);
			return $this->estudiante->editar();
		}
	}

?>