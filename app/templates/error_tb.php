<!DOCTYPE html>
<html lang="en">
<head>
	<?php include  HEAD; ?>
	<link rel="stylesheet" href="<?php echo CSS_URL ?>table_styles.css">
	<title>Error</title>
</head>
<body>
	<header>	

		<?php include NAV; ?>

	</header>
	<main>
		<div class="error_wrap">
			<h2><?php echo $_SESSION['error_msg']; unset($_SESSION['error_msg']); ?></h2>
		</div>
	</main>
	<?php include FOOTER; ?>
</body>
</html>