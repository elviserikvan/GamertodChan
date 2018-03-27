<?php  
	if (isset($_GET['table']) && isset($_GET['thread'])) {

		$db = new Conexion();
		$thread_id = intval($_GET['thread']);
		$table = $db->escape($_GET['table']);
		$sql = $db->query("SELECT * FROM threads WHERE id = '$thread_id' AND table_from = '$table' LIMIT 1 ;");

		if ($db->rows($sql) > 0) {
			
			// Data of the thread in a array
			$thread = $db->recorrer($sql);


			// Get the threads replies
			$th_id = $thread['id'];
			$sql_2 = $db->query("SELECT * FROM replies WHERE thread_id = '$th_id' ;");

			if ($db->rows($sql_2) > 0) {
				
				while ($reply = $db->recorrer($sql_2)) {
					$replies[] = $reply;
				}

			}else {
				$replies = false;
			}

			// Thread Templates
			include TEMP_URL . 'thread_tb.php';

		}else {
			header('loaction: 404');
		}

		$db->liberar($sql);
		$db->close();

	}else{
		header('location: home');	
	}
?>