<?php  

	// This function gets the data of every thread in the array and morkup it to show the threads in the document

	function show_threads($threads_array, $table_name, $replies)
	{
		if (false != $threads_array) {

			for ($i = 0; $i < count($threads_array); $i++) { 

				$id = $threads_array[$i]["id"];
				$title = $threads_array[$i]["title"];
				$date = $threads_array[$i]['creado_fecha'];
				$content = empty($threads_array[$i]["content"]) ? '' : $threads_array[$i]["content"];

				$img_name = $threads_array[$i]['img_name'];
				$img_size = $threads_array[$i]['img_size'];
				$img_dimen = $threads_array[$i]['dimensions'];
				$img_ori_name = $threads_array[$i]['img_original_name']; 


				// Get the amount of replies
				$replies_num = 0;
				if (false != $replies) {	
					for ($e=0; $e < count($replies); $e++) { 
						if ($replies[$e]['thread_id'] === $id) {
							$replies_num++;
						}else {
							continue;
						}
					}
				}

				echo '
				<div class="thread">
					<hr>
					<p class="t_i_info"><a target="_blank" href="'. SITE_URL .'picture/'.$img_name.'">'. $img_name .'</a>  ('.$img_size.' bytes, '.$img_dimen.', '. $img_ori_name .')</p>
					<div class="thread_data">
						<div class="img">
							<img class="small" src="' . IMG_URL . $img_name . '" alt="'.$img_name.'">
						</div>
						<div class="data">
							<div class="thread_info">
								<h4>'.$title.'</h4>
								<p class="anonimo">Anónimo</p>
								<p class="date"><a href="#">'.$date.'</a></p>
								<p class="post_id" title="Responder a este post"><a onclick="reply_thread(event,'.$id.', \''.$table_name.'\')" href="#">'.$id.'</a></p>
								<a href="'.$table_name.'/'.$id.'" class="reply">Ver/Responder</a>
							</div>
							<P class="thread_msg">'. $content .'</P>
						</div>
					</div>
					<p class="replies_obmitidos">Este hilo tiene '. $replies_num .' respuestas</p>
				</div>';


				// if (/* false != $replies */ false) {
				// 	echo '
				// 	<div class="thread">
				// 		<hr>
				// 		<p class="t_i_info"><a target="_blank" href="'. SITE_URL .'picture/'.$img_name.'">'. $img_name .'</a>  ('.$img_size.' bytes, '.$img_dimen.', '. $img_ori_name .')</p>
				// 		<div class="thread_data">
				// 			<div class="img">
				// 				<img class="small" src="' . IMG_URL . $img_name . '" alt="'.$img_name.'">
				// 			</div>
				// 			<div class="data">
				// 				<div class="thread_info">
				// 					<h4>'.$title.'</h4>
				// 					<p class="anonimo">Anónimo</p>
				// 					<p class="date"><a href="#">'.$date.'</a></p>
				// 					<p class="post_id" title="Responder a este post"><a href="#">'.$id.'</a></p>
				// 					<a href="'.$table_name.'/'.$id.'" class="reply">Ver/Responder</a>
				// 				</div>
				// 				<P class="thread_msg">'. $content .'</P>
				// 			</div>
				// 		</div>
				// 		<div class="replies">';

				// 		for ($e = 0; $e < count($replies); $e++)  { 


				// 			// Check if the reply is for this thread
				// 			if ($replies[$e]['thread_id'] != $threads_array[$i]['id']) {
				// 				echo 'reply: ' . $replies[$e]['thread_id'] . ' thread: ' . $threads_array[$i]['id'] . '<br>'; 
				// 				continue;
				// 			}


				// 			// We invert the array to show the lastest reply at the end
				// 			$replies = array_reverse($replies);

				// 			$reply_id = $replies[$e]['id'];
				// 			$reply_date = $replies[$e]['date'];
				// 			$reply_content = $replies[$e]['content'];

				// 			if ($replies[$e]['img_name'] != NULL ) {
								
				// 				$reply_img = $replies[$e]['img_name'];
				// 				$reply_img_size = $replies[$e]['img_size'];
				// 				$reply_img_dimensions = $replies[$e]['dimensions'];
				// 				$reply_img_original_name = $replies[$e]['img_original_name'];

				// 				echo '
				// 				<div class="reply">
				// 					<div class="reply_info">
				// 						<span class="anonimo">Anònimo</span>
				// 						<a href="#">'. $reply_date .'</a>
				// 						<a href="#" title="id">'. $reply_id .'</a>

				// 						<div class="img_info">
				// 							<a href="#">'. $reply_img .'</a>
				// 							<span>( '.$reply_img_size.'kb, '. $reply_img_dimensions .', '. $reply_img_original_name .' )</span>
				// 						</div>
				// 					</div>
				// 					<div class="reply_body">
				// 						<div class="reply_img">
				// 							<img src="'. IMG_URL . $reply_img .'" alt="'. $reply_img .'">
				// 						</div>

				// 						<div class="reply_msg">
				// 							<p>'. $reply_content .'</p>
				// 						</div>
				// 					</div>
				// 				</div>';

				// 			}else {
				// 				echo '
				// 				<div class="reply">
				// 					<div class="reply_info">
				// 						<span class="anonimo">Anònimo</span>
				// 						<a href="#">'. $reply_date .'</a>
				// 						<a href="#" title="id">'. $reply_id .'</a>
				// 					</div>
				// 					<div class="reply_body">
				// 						<div class="reply_msg">
				// 							<p>'. $reply_content .'</p>
				// 						</div>
				// 					</div>
				// 				</div>';
				// 			}
				// 		}
				// echo '</div>
				// 	</div>';

				// }else {				
				// }
			}
		}else {
			echo '
			<div class="empty">
				<h2>Este tablon no tiene Hilos</h2>
			</div>';
		}
	}
?>