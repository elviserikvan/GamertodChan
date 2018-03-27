<?php  
	// Core Variables, functions, classes
	require 'core/core.php';

	// Router
	if (!isset($_GET['table']) && !isset($_GET['thread']) ) {
		// If neither the table nor the thread variable are defined, we show the dashboard
	
		include CONT_URL . 'home_controller.php';

	}elseif (isset($_GET['table']) && !isset($_GET['thread'])) {
		// If only the table variable is difenied, we show only the table

		include CONT_URL . 'table_controller.php';

	}elseif (isset($_GET['table']) && isset($_GET['thread'])) {

		// If the table variable and the thread varible are defined, we show the thread
		include CONT_URL . 'threads_controller.php';
	}
?>