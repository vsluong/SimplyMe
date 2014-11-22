<!DOCTYPE html>
<html lang = "en">
	<head></head>
	<body>
		Redirecting.....
		<!--
		<?php
			if ($_SESSION['logged_in'] == 1) {
			echo '<script type = "text/javascript"> var logged_in = true;</script>';
			} else {
			echo '<script type = "text/javascript"> var logged_in = false;</script>';
			}
		?>
		-->
		<script type = "text/javascript">
			var logged_in = false;
			if (logged_in) {
				window.location.href = "app.html";
			} else {
				window.location.href = "login.html";
			}
		</script>
	</body>
</html>
