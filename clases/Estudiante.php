<?php 

	include_once('Conexion.php');
	
	class Estudiante
	{
		private $id;
		private $dui;
		private $nombre;
		private $apellido;
		private $telefono;
		private $edad;
		private $promedio;
		private $fecha;
		private $con;

		
		public function __construct()
		{
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido)
		{
			$this->$atributo = $contenido;
		}

		public function get($atributo)
		{
			return $this->$atributo;
		}

		public function crear()
		{

			$sql2 = "select * from estudiante where dui = '{$this->dui}'";
			$resultado = $this->con->consultaRetorno($sql2);
			$num = mysqli_num_rows($resultado);

			if($num != 0)
			{
				return false;
			}
			else
			{
				$sql = "insert into estudiante (dui,nombre,apellido,telefono,edad,promedio,fecha) 
			        values ('{$this->dui}','{$this->nombre}','{$this->apellido}','{$this->telefono}',
			        '{$this->edad}','{$this->promedio}',now())";
				$this->con->consultaSimple($sql);
				return true;
			}			
		}

		public function eliminar()
		{
			$sql = "delete from estudiante where id = '{$this->id}'";
			return $this->con->consultaSimple($sql);		
		}

		public function ver()
		{
			$sql = "select * from estudiante where id = '{$this->id}'";
			$resultado = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($resultado);	

			$this->id = $row['id'];	
			$this->nombre = $row['nombre'];
			$this->apellido = $row['apellido'];
			$this->telefono = $row['telefono'];
			$this->edad = $row['edad'];
			$this->promedio = $row['promedio'];
			$this->fecha = $row['fecha'];
			//$this->printAll();
			return $row;
		}

		public function editar()
		{
			//print("aqui editar");
			//$this->printAll();
			$sql = "update estudiante set 	nombre = '{$this->nombre}',
											apellido = '{$this->apellido}',
											telefono = '{$this->telefono}',
											edad = '{$this->edad}'
			        where id = '{$this->id}'";
			return $this->con->consultaSimple($sql);						
		}

		public function listar()
		{

			$sql = "select * from estudiante";
			$resultado = $this->con->consultaRetorno($sql);
								
			return $resultado;
		}

		function printAll()
		{
			print("\n");
			print($this->id);
			print($this->nombre);
			print($this->apellido);
			print($this->telefono);
			print($this->edad);
			print("\n");
		}

	}
?>