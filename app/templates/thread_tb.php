<!DOCTYPE html>
<html lang="en">
<head>
	<?php include HEAD; ?>
	<link rel="stylesheet" href="<?php echo CSS_URL ?>table_styles.css">
	<title><?php echo $thread['title'] ?></title>
</head>
<body>
	<?php  
		echo show_model($thread['id'], $thread['table_from'], false);
	?>
	<header>
		<?php  
			echo generate_table_header('/' . $_GET['table'] . '/', $_GET['table']);
		?>
	</header>
	<main>
		<section class="threads">
			<?php 
				// Some of these variables are in the controller
				show_single_thread($thread, $_GET['table'], $replies);
			?>
		</section>
	</main>
	<!-- Footer -->
	<?php include FOOTER; ?>
	<script src="<?php echo JS_URL ?>reply_thread.js"></script>
</body>
</html>