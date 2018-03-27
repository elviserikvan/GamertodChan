<?php  
	
	$db = new Conexion();

	// Get the number of posts
	$sql = $db->query("SELECT id FROM replies;");
	$posts_num = $db->rows($sql);


	// Get the number of pictures
 	$img_1 = $db->query("SELECT count(img_name) from replies;");
 	$img_2 = $db->query("SELECT count(img_name) from threads;");

 	$img_1_num = $db->recorrer($img_1)[0];
 	$img_2_num = $db->recorrer($img_2)[0];

 	$img_num = $img_1_num  + $img_2_num;


 	// Get the ramdon images
 	$sql_img = $db->query("SELECT threads.img_name, replies.img_name FROM replies INNER JOIN threads ON replies.thread_id = threads.id;");

 	if ($db->rows($sql_img) > 0) {
 		while ($file = $db->recorrer($sql_img)) {
 			$images[] = $file;
 		}
 	}else {
 		$images = false;
 	}


 	if ($images != false) {
	 	// Create a new array with the random images
	 	$random_imgs = [];
	 	while (count($random_imgs) < 4) {

	 		$random = mt_rand(0, $db->rows($sql_img));

	 		// No añadir la misma imagen 2 veces
	 		if ( array_key_exists($random, $images) && !in_array($images[$random][1], $random_imgs))  {

	 			// Check the image ins't NULL
	 			if ($images[$random][0] != NULL) {
	 				$random_imgs[] = $images[$random][0];
	 		}else {
	 				continue;
	 			}
	 		}else {
	 			continue;
	 		}
	 	}
 	}


 	// Get last posts
	$replies_sql = $db->query("SELECT * FROM replies ORDER BY id DESC LIMIT 30;");
	if ($db->rows($replies_sql) > 0) {
	 		while ($row = $db->recorrer($replies_sql)) {
	 			$rows[] = $row;
	 		}
	 	}else {
	 		$rows = false;
	 	} 	

 	$db->liberar($sql,$img_1,$img_2,$sql_img);
	$db->close();


	// Include the template
	include TEMP_URL . 'home.php';
?>