<?php  
	if ($_POST && $_FILES) {
		require '../core.php';
		

		if ( strlen($_POST['reply_msg']) <= 290 ) {

			$db = new Conexion();

			$date = date('d/m/Y h:i');
			$content = $db->escape($_POST['reply_msg']);
			$thread_id = $db->escape($_POST['thread_id']);
			$table_from = $db->escape($_POST['table_from']);

			if ($_FILES['reply_img']['error'] == 0 ) {

				// check the image
				$img = new Image();
				$img->img = $_FILES['reply_img'];
				$img->checkImg();
				$img->uploadImage();
				
				$img_name = $img->img_name;
				$img_size = $img->img_size;
				$img_dimensions = $img->img_dimensions;
				$img_original_name = $img->img_original_name;


				$sql = $db->query("INSERT INTO replies (thread_id,table_from,content,img_name,img_size,dimensions,img_original_name,date) 
				VALUES ('$thread_id', '$table_from', '$content', '$img_name', '$img_size', '$img_dimensions', '$img_original_name','$date');");

			}else {
				$sql = $db->query("INSERT INTO replies (thread_id,table_from,content,date) VALUES ('$thread_id', '$table_from', '$content', '$date');");

			}
			
			$db->close();

			if ($_POST['to_table']) {
				header('location: ' . $_POST['table_from'] . '/');
			}else {
				header('location: ' . $_POST['table_from'] . '/' . $_POST['thread_id']);
			}


		}else {
			throw new Exception("El mensaje es demasiado largo", 20);
		}

	}else {
		header('location: home');
	}
?>