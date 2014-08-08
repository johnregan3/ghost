<?php
/*
 * Primary file that loads all parts
 */
?>

<!DOCTYPE html>
<html class="no-js">
<head>
	<?php include( 'head.php' ) ?>
</head>
<body class="home-template">
		<?php include( 'header.php' ) ?>
		<?php include( 'body-home.php' ) ?>
		<!-- Footer -->
	<!-- jQuery for development -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="assets/js/jquery.mousewheel.js"></script>
	<script src="assets/js/jquery.jscrollpane.min.js"></script>
	<script src="assets/js/jquerypp.custom.js"></script>
	<script src="assets/js/jquery.bookblock.js"></script>
	<script src="assets/js/page.js"></script>
	<script>
		$(function() {
			Page.init();
			$(document).ready(function() {
				$('.menu-panel').jScrollPane();
			});
		});
	</script>
</body>
</html>