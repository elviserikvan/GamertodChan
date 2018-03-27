<?php  
	function exception_handler($e)
	{


		// Every exceptions wich begins width a 9 it's considered like a development exception, so it will only show the message
		if (preg_match("/^9([0-9])?/", $e->getCode())) {

			$_SESSION['error_msg'] = "<strong>Error de desarrollo</strong>: " . $e->getMessage();
		}else {
			$_SESSION['error_msg'] = $e->getMessage();
		}

		header('location: error');
		exit();
	}
?>