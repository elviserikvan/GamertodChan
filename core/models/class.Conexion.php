<?php  
	/**
	* This class helps us to connect to the database
	*/
	class Conexion extends mysqli
	{
		
		function __construct()
		{
			parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			$this->connect_errno ? die('Error en la conexion') : $x = 'Conectado';
			$this->set_charset('utf8');
			unset($x);
		}

		public function recorrer($query)
		{
			return mysqli_fetch_array($query);
		}

		public function liberar($query)
		{
			return mysqli_free_result($query);
		}

		public function escape($query)
		{
			return $this->real_escape_string($query);
		}

		public function rows($query)
		{
			return mysqli_num_rows($query);
		}
	}
?>