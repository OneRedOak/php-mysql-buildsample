<!-- Starting page - provides info about site & form for user to type in wanted actor. -->

<?php
include_once("common.php"); #allows access to common functions
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Movie Database (MyMDb)</title>
		<meta charset="utf-8" />
		
		<!-- Links to provided files.  Do not edit or remove these links -->
		<link href="https://webster.cs.washington.edu/images/kevinbacon/favicon.png" type="image/png" rel="shortcut icon" />
		<script src="https://webster.cs.washington.edu/js/kevinbacon/provided.js" type="text/javascript"></script>

		<!-- Link to your CSS file that you should edit -->
		<link href="bacon.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="frame">
			<?php
				banner();
			?>

			<div id="main">
                
			</div> <!-- end of #main div -->
			
            <?php
				footer();
			?>
		</div> <!-- end of #frame div -->
	</body>
</html>
