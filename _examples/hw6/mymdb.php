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
				<h1>The One Degree of Kevin Bacon</h1>
				<p>Type in an actor's name to see if he/she was ever in a movie with Kevin Bacon!</p>
				<p><img src="https://webster.cs.washington.edu/images/kevinbacon/kevin_bacon.jpg" alt="Kevin Bacon" /></p>

				<!-- form to search for every movie by a given actor -->
				<?php
					findform("search-all.php", "autofocus='autofocus'");
				?>

				<!-- form to search for movies where a given actor was with Kevin Bacon -->
				<?php
					findform("search-kevin.php", "");
				?>
                
			</div> <!-- end of #main div -->
			
            <?php
				footer();
			?>
		</div> <!-- end of #frame div -->
	</body>
</html>
