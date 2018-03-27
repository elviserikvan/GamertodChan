<!DOCTYPE html>
<html lang="en">
<head>
	<?php include HEAD ?>
	<title>/ve/ - Venezuela - GamertodChan - Tablon de imagenes anonimo</title>
	<link rel="stylesheet" href="<?php echo CSS_URL ?>table_styles.css">
</head>
<body>
	<?php  
		echo show_model(null, null, true);
	?>
	<header>
		<?php  
			 echo generate_table_header('/ve/ - Venezuela', 've');
		?>
	</header>
	<main>
		<section class="threads">		
			<?php 
				// Some of these variable are in the controller
				show_threads($threads,'ve', $replies);
			?>
		</section>
	</main>

	<!-- Footer -->
	<?php include FOOTER; ?>
	<script src="<?php echo JS_URL ?>table_scripts.js"></script>
</body>
</html>