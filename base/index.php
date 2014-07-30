<?php
/*
 * Primary file that loads all parts
 */
?>

<!DOCTYPE html>
<html>
<head>
	<?php include( 'head.php' ) ?>
</head>
<body>
	<div class="page-wrap">
		<?php include( 'nav-top.php' ) ?>
		<?php include( 'header.php' ) ?>
		<?php include( 'nav-primary.php' ) ?>
		<!-- body includes footer -->
		<?php include( 'body.php' ) ?>
		<!-- Footer -->
		<?php include( 'footer.php' ) ?>
	</div>
	<!-- Ghost Foot -->
	<!-- jQuery for development -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Boostrap.js -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>