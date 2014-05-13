<!-- This file containts all of the common (redunetent) code used throughout the other HTML & PHP files -->
<?php

# displays basic HTML banner for all pages
function banner() {
	?>
        <div id="banner">
            <a href="index.php"><img src="https://webster.cs.washington.edu/images/kevinbacon/mymdb.png" alt="banner logo" /></a>
            My Movie Database
        </div>
    <?php
}	

# displays basic HTML footer for all pages
function footer() {
	?>
        <div id="w3c">
            <a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML5" /></a>
            <a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
        </div>
    <?php
}

# search form for actors
function findform($sendsearchto, $autofocus) {
	?>
    	<form action="<?= $sendsearchto ?>" method="get">
			<fieldset>
                <legend>Movies with Kevin Bacon</legend>
                <div>
                    <input name="firstname" type="text" size="12" placeholder="first name"<?= $autofocus ?>/> 
                    <input name="lastname" type="text" size="12" placeholder="last name" /> 
                    <input type="submit" value="go" />
                </div>
			</fieldset>
		</form>
    <?php
}
?>

<!-- ---------------------------------------------------------------------------
SELECT DISTINCT name, first_name, last_name, year FROM actors a
JOIN roles r ON a.id = r.actor_id
JOIN movies m ON m.id = r.movie_id
WHERE a.id = 444807
ORDER BY year DESC, name ASC;

SELECT id FROM actors
WHERE last_name = 'smith' AND first_name LIKE 'will%'
ORDER BY film_count DESC, id ASC
LIMIT 1;

SELECT DISTINCT name, year FROM roles r1
JOIN roles r2 ON r1.movie_id = r2.movie_id
JOIN movies m ON m.id = r1.movie_id
WHERE r1.actor_id = 444807 AND r2.actor_id = 475665
ORDER BY year DESC, name ASC;
--------------------------------------------------------------------------- -->

<?php
function findname($query) {
	$db = new PDO("mysql:dbname=database;host=localhost", "oneoak", "KNjLEiTzVdgVt");
	return $db->query($query);
}

function querytotable($query) {
	$db = new PDO("mysql:dbname=database;host=localhost", "oneoak", "KNjLEiTzVdgVt");
	$rows = $db->query($query);
	if($rows) {
		?>
        	<table>
            	<tr>#</td>
                    <th>Title</th>
                    <th>Year</th>
                </tr>
            
		<?php
			$i = 1;
			foreach($rows as $row) {
				?>
                	<tr>
                    	<td><?= $i ?></td>
                		<td><?= $row["name"] ?></td>
                        <td><?= $row["year"] ?></td>
                	</tr>
                <?php
				$i++;
			}
		}
		?>
        	</table>
        <?php
	}
}
?>