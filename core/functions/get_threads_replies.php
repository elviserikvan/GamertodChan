<?php  
	function get_threads_replies($table_name)
	{
		$db = new Conexion();
		$table_name = $db->escape($table_name);
		$sql = $db->query("SELECT * FROM replies WHERE table_from = '$table_name' ;");

		if ($db->rows($sql) > 0) {
			
			while ($reply = $db->recorrer($sql)) {
				$replies[] = $reply;
			}

		}else {
			$replies = false;
		}

		return $replies;
		$db->liberar($sql);
		$db->close();
	}
?>