<!DOCTYPE html>
<html lang="en">
<head>
	<?php include HEAD; ?>
	<title>GamertodChan - Tablon de imagenes anonimo</title>
	<link rel="stylesheet" href="<?php echo CSS_URL ?>home_styles.css">
</head>
<body>
	<header>
		<h1>GamertodChan</h1>
		<div class="description">
			<p>
				GamertodChan es un tablón de imágenes anónimo en español (también llamado imageboard o chan) donde cualquiera puede escribir mensajes y compartir imágenes. Está especialmente dedicado a toda la comunidad hispanohablante de internet y no es necesario estar registrado para participar. ¡Lee las Reglas, elige los tablones que más te interesen y participa!
			</p>
		</div>
		<nav>

			<!-- regional tables -->
			<div class="regional">
				<h3>Regional</h3>
				<a href="ve/">Venezuela</a>
				<a href="mx/">Mexico</a>
				<a href="ag/">Argentina</a>
			</div>

			<!-- Hobbi table -->
			<div class="interes">
				<h3>Interes</h3>
				<a href="pg/">Programacion</a>
				<a href="pl/">Politica</a>
				<a href="rl/">Religion</a>
				<a href="ec/">Economia</a>
			</div>

		</nav>
	</header>
	<main>
		<!-- Information on the side -->
		<div class="side_info">
			<p><span>Posts:</span> <?php echo $posts_num ?></p>
			<p><span>Imagenes:</span> <?php echo $img_num; ?> </p>
			<p><span>Creador:</span> Gamertod Ark</p>
		</div>

		<!-- last posts -->
		<div class="last_posts">
		
		<?php  
			if (false != $rows) {
				
				for ($i=0; $i < count($rows) ; $i++) { 

					$msg = $rows[$i]['content'];
					$tb = $rows[$i]['table_from'];
					$thread_id = $rows[$i]['thread_id'];

					echo '<a href="'. $tb . '/' . $thread_id .'">'.'/'. $tb .'/: '. $msg .'</a>';
				}

			}else {
				echo '
				<div class="no_posts">
					<h2>No hay posts para mostrar</h2>
				</div>';
			}
		?>
		</div>

		<!-- Random Images -->
		<div class="random_images">
			<h3>Random Imagenes</h3>

			<?php  
				if (false != $images) {
					for ($i=0; $i < count($random_imgs) ; $i++) { 
						echo '<img src="'. IMG_URL . $random_imgs[$i] .'" alt="'. $random_imgs[$i] .'">';
					}
				} else {
					echo '
					<div class="no_images">
						<h2>No hay imagenes para mostrar</h2>
					</div>';
				}
			?>
		</div>
	</main>

	<!-- Add the footer -->
	<?php include FOOTER ?>
</body>
</html>