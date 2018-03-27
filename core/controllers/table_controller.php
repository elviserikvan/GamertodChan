<?php   

	// Scape the variable
	$search = ['/','*','\\','<','>','-','~','^',''];
	$table_name = str_replace($search, '', $_GET['table']);


	if (file_exists(TEMP_URL . $table_name . '_tb.php')) {

		$threads = get_threads_data($table_name);
		$replies = get_threads_replies($table_name);
		include TEMP_URL . $table_name . '_tb.php';

	}else {
		header('location: 404');
	}
?>