<?php 

	// Client Constants
	define('CSS_URL', 'app/css/');
	define('IMG_URL', 'app/img\'s/');
	define('HEAD', 'app/overall/head.php');
	define('FOOTER', 'app/overall/footer.php');
	define('JS_URL', 'app/js/');
	define('NAV', 'app/overall/just_nav.php');
	
	// Server constants 
	define('CONT_URL', 'core/controllers/');
	define('TEMP_URL', 'app/templates/');
	define('FUNC_URL', dirname(__DIR__) . '\core/functions/');
	define('CLASS_URL', dirname(__DIR__) . '\core/models/');
	define('UPLOAD_IMG_DIR', dirname(__DIR__) . '\app\img\'s\\');
	define('SITE_URL', 'http://localhost:8085/GamertodChan/');

	// Database constants
	define('DB_USER', 'root');
	define('DB_PASS', '21042001');
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'gamertodchan');

	// Developing constants
	define('THREADS_RELLENO', 'app/overall/threads_relleno.php');

	// Fcuntions
	require FUNC_URL . 'generate_table_header.php';
	require FUNC_URL . 'exception_handler.php';
	require FUNC_URL . 'get_threads.php';
	require FUNC_URL . 'show_threads.php';
	require FUNC_URL . 'show_single_thread.php';
	require FUNC_URL . 'get_threads_replies.php';
	require FUNC_URL . 'show_model.php';

	// Classes
	require CLASS_URL . 'class.Conexion.php';
	require CLASS_URL . 'class.checkImg.php';
	require CLASS_URL . 'class.generateThread.php';

	// Configuration
	session_start();
	set_exception_handler('exception_handler');
	date_default_timezone_set('America/Caracas');
?>