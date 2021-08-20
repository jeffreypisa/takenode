<!doctype html>
<html lang="en">
	<?php 
		// For demo purpose
		$activepage = 'tool';
	?>
	<head>
		<?php include 'parts/head-meta.php' ?>
		<title>TakeNode</title>
	</head>
	<body class="<?php echo $activepage ?>">
		<!-- Modals -->
		<?php include 'parts/modals/bestandstype.php' ?>	
		<?php include 'parts/modals/persoonsgegevens.php' ?>	
		<?php include 'parts/modals/toestemming.php' ?>	
		<?php include 'parts/modals/mijntakenode.php' ?>	
			
		<?php include 'parts/header.php' ?>
		<main>
			<?php include 'parts/tool.php' ?>
		</main>
		<script src="assets/js/main-min.js" type="text/javascript"></script>
	</body>
</html>