<?php 
	
	class Conexion
	{
		private $host;
		private $user;
		private $pass;
		private $db;
		private $con;
		
		public function __construct()
		{
			$this->host = "localhost";
			$this->user = "root";
			$this->pass = "";
			$this->db = "poo_db";

			$this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
			
		}

		public function consultaSimple($sql)
		{
			print("\n");
			$res = mysqli_query($this->con, $sql);
			if($res == 1 ) return true;
			else return false;

		}

		public function consultaRetorno($sql)
		{
			$consulta = mysqli_query($this->con, $sql);
			return $consulta;
		}

		public function close()
		{
			$this->con->close();
		}
	}
?>