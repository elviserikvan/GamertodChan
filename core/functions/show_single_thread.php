<?php  
	function show_single_thread($thread, $table_name, $replies)
	{

		$id = $thread['id'];
		$title = $thread['title'];
		$content = $thread['content'];
		$date = $thread['creado_fecha'];

		$img_size = $thread['img_size'];
		$img_name = $thread['img_name'];
		$img_dimen = $thread['dimensions'];
		$img_ori_name = $thread['img_original_name'];

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
							<p class="post_id" title="Responder a este post"><a id="reply_buttom" href="#">'.$id.'</a></p>
						</div>
						<P class="thread_msg">'. $content .'</P>
					</div>
				</div>';

				if (false != $replies) {
					echo '<div class="replies">';
						for ($i=0; $i < count($replies) ; $i++) { 

							$date = $replies[$i]['date'];
							$reply_id = $replies[$i]['id'];
							$reply_content = $replies[$i]['content'];


							if (NULL != $replies[$i]['img_name']) {
								

								$reply_img_name = $replies[$i]['img_name'];
								$reply_img_size = $replies[$i]['img_size'];
								$reply_img_dimensions = $replies[$i]['dimensions'];
								$reply_img_original_name = $replies[$i]['img_original_name'];

								echo '
								<div class="reply">
									<div class="reply_info">
										<span class="anonimo">Anònimo</span>
										<a href="#">'. $date .'</a>
										<a href="#">'. $reply_id .'</a>

										<div class="img_info">
											<a href="#">'. $reply_img_name .'</a>
											<span>( '. $reply_img_size .'kb, '. $reply_img_dimensions .', '. $reply_img_original_name .')</span>
										</div>
									</div>
									<div class="reply_body">
										<div class="reply_img">
											<img class="small" src="' . IMG_URL . $reply_img_name .'" alt="'. $reply_img_name .'">
										</div>

										<div class="reply_msg">
											<p> ' . $reply_content . ' </p>
										</div>
									</div>
								</div>';
							}else {
								echo '
								<div class="reply">
									<div class="reply_info">
										<span class="anonimo">Anònimo</span>
										<a href="#">'. $date .'</a>
										<a href="#">'. $reply_id .'</a>
									</div>
									<div class="reply_body">
										<div class="reply_msg">
											<p> ' . $reply_content . ' </p>
										</div>
									</div>
								</div>';
							}
						}
					echo '</div>';
				}else {			
					echo '</div>';
				}
				
	}
?>