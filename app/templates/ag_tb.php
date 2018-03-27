<!DOCTYPE html>
<html lang="en">
<head>
	<?php include HEAD; ?>
	<title>/ag/ - Argentina</title>
	<link rel="stylesheet" href="<?php echo CSS_URL ?>table_styles.css">
</head>
<body>
	<?php  
		echo show_model(null, null, true);
	?>
	<header>
		<?php echo generate_table_header('/ag/ - Argentina', 'ag') ?>
	</header>
	<main>
		<section class="threads">		
			<?php 
				show_threads($threads,'ag', $replies);
			?>
		</section>
	</main>
	<!-- Footer -->
	<?php include FOOTER; ?>
	<script src="<?php echo JS_URL ?>table_scripts.js"></script>
</body>
</html>