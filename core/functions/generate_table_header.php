<?php  
	function generate_table_header($table_name, $form_direction)
	{
		$HTML = '
		<nav>
			<div class="regional_links">			
				[
				<a href="ve/" title="Venezuela">ve</a> /
				<a href="mx/" title="Mexico">mx</a> /
				<a href="ag/" title="Argentina">ag</a>
				]
			</div>

			<div class="interes_links">
				[
				<a href="pg/" title="Programacion">pg</a> /
				<a href="pl/" title="Politica">pl</a> /
				<a href="rl/" title="Religion">rl</a> /
				<a href="ec/" title="Economia">ec</a>
				]				
			</div>
		</nav>

		<h1>'. $table_name .'</h1>
		
		<hr>

		<!-- Thread Form -->
		<div class="new_thread_form">
			<form id="thread_form" method="POST" enctype="multipart/form-data" action="new_thread">

				<div class="titulo">
					<label for="title">Titulo</label>
					<input type="text" name="title" id="title">

					<input type="submit" value="Enviar">
				</div>

				<div class="post">
					<label for="post_msg">Post</label>
					<textarea name="post_msg" id="post_msg" form="thread_form"></textarea>
				</div>

				<div class="file">
					<label for="file">Archivo</label>
					<input type="file" name="file" id="file">
				</div>

				<input type="hidden" name="form_direction" value="'. $form_direction .'">
			</form>
		</div>
		
		<div class="info">
			<p>Lee las <a href="rules">reglas</a> antes de participar.</p>
			<p>Tipos de archivos: GIF, JPG, JPEG, PNG, WEBM</p>
		</div>';

		return $HTML;
	}
?>