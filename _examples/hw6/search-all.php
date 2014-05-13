<!-- Starting page - provides info about site & form for user to type in wanted actor. -->

<?php
include_once("common.php"); #allows access to common functions

if(isset($_GET["firstname"]) && isset($_GET["lastname"])) {
	$firstname = $_GET["firstname"];
	$lastname = $_GET["lastname"];
	querytotable(buildquery($firstname, $lastname));
}

function buildquery($firstname, $lastname) {
	$name = findname("SELECT id FROM actors WHERE last_name = '{$lastname}' AND first_name LIKE 
					 '{$firstname}%' ORDER BY film_count DESC id ASC LIMIT 1;");
	return "SELECT DISTINCT name, first_name, last_name, year FROM actors a JOIN roles r ON a.id
			= r.actor_id JOIN movies m ON m.id = r.movie_id WHERE a.id = $name['id'] ORDER BY
			year DESC, name ASC;";
}
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
