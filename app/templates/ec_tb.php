<!DOCTYPE html>
<html lang="en">
<head>
	<?php include HEAD; ?>
	<title>/ec/ - Economia</title>
	<link rel="stylesheet" href="<?php echo CSS_URL ?>table_styles.css">
</head>
<body>
	<?php  
		echo show_model(null, null, true);
	?>
	<header>
		<?php echo generate_table_header('/ec/ - Economia', 'ec') ?>
	</header>
	<main>
		<section class="threads">		
			<?php 
				// Some of these variable are in the controller
				show_threads($threads,'ec', $replies);
			?>
		</section>
	</main>

	<!-- Footer -->
	<?php include FOOTER; ?>
	<script src="<?php echo JS_URL ?>table_scripts.js"></script>
</body>
</html>