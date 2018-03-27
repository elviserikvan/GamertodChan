<?php  

	if ($_POST && $_FILES) {	
		// Inlcude the core 
		require '../core.php';


		// Check the thread data
		$thread = new Thread();
		$thread->title = $_POST['title'];
		$thread->content = $_POST['post_msg'];
		$thread->check_title();
		$thread->check_content();

		// Check the Image
		$img = new Image();
		$img->img = $_FILES['file'];
		$img->checkImg();
		$img->uploadImage();


		// Insert the data into the database
		$db = new Conexion();

		// Thread data
		$thread_title = $db->escape($_POST['title']);
		$thread_content = $db->escape($_POST['post_msg']);
		$thread_from = $db->escape($_POST['form_direction']);

		// Picture data
		$img_name = $img->img_name;
		$img_size = $img->img_size;
		$img_dimensions = $img->img_dimensions;
		$img_original_name = $img->img_original_name;


		$fecha = date('d/m/Y h:i');

		// Query to insert the data already scaped
		$sql = $db->query("INSERT INTO threads (title,content,table_from,img_name,img_size,dimensions,img_original_name,creado_fecha) 
		VALUES ('$thread_title', '$thread_content', '$thread_from', '$img_name', '$img_size', '$img_dimensions', '$img_original_name', '$fecha');");
		
		$db->close();

		// Redirect the user to the table that he was
		header('location: ' . $thread_from . '/');

	}else {
		header('location: home');
	}


?>