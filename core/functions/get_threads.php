<?php  
	function get_threads_data($thread)
	{
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM threads WHERE table_from = '$thread' ORDER BY id DESC;");

		if ($db->rows($sql) > 0) {	

			while ($thread_data = $db->recorrer($sql)) {
				$thread_info[] = $thread_data; 
			}
		}else {
			$thread_info = false;
		}

		return $thread_info;
		$db->liberar($sql);
		$db->close();
	}
?>