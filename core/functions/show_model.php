<?php  
	function show_model($thread_id, $table_name, $to_table)
		{
			$HTML = '
			<div id="model" class="hide">
				<form action="new_reply" method="POST" enctype="multipart/form-data" class="reply_wrap">
					<div class="reply_header">
						<h2>Respuesta al hilo #<span id="thread_id_indicator"></span> '. $thread_id .'<a id="close_reply" href="#">[X]</a></h2>
					</div>
					<input type="submit" value="Enviar">
					<div class="body">
						<div class="msg">
							<label for="reply_msg">Post</label>
							<textarea name="reply_msg" id="reply_msg"></textarea>
						</div>
						<div class="reply_file">
							<label for="reply_img">Archivo</label>
							<input type="file" name="reply_img" id="reply_img">
						</div>
					</div>
					<input type="hidden" name="to_table" value="'. $to_table .'">
					<input type="hidden" id="thread_id" name="thread_id" value="' . $thread_id .'">
					<input type="hidden" id="table_from" name="table_from" value="'. $table_name .'">
				</form>
			</div>';

			return $HTML;
		}	
?>