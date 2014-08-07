<?php
/*
 * Primary file that loads all parts
 */
?>

<!DOCTYPE html>
<html>
<head>
	<?php include( 'head.php' ) ?>
</head class="red">
<body>
	<div class="page-wrap">
		<?php include( 'header.php' ) ?>
		<div id="below-header" class="animated fadeIn">
			<?php include( 'nav-primary.php' ) ?>
			<?php include( 'body.php' ) ?>
		</div>
		<!-- Footer -->
		<?php include( 'footer.php' ) ?>
	</div>
	<!-- Ghost Foot -->
	<!-- jQuery for development -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Boostrap.js -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/elemental.js"></script>
</body>
</html>