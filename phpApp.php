<?php
class PhpApp {
	public function findData() {
		// connect to the server & database
		$link = mysqli_connect('127.0.0.1', 'shippable', '', 'test') or die("Error occurred during connection: " . mysqli_error($link));

		// Creates table
		$test1 = mysqli_query($link, "CREATE TABLE IF NOT EXISTS Customer (CustomerName varchar(20), ContactName varchar(20), Address varchar(20));");

		echo "---" . $test1 . "---";

		// Checks for table
		if (!$test1) {
		    echo("Customer Table Creation Error: " . mysqli_error($link));
		    exit();
		}
		
		// Populates with sample data
		mysqli_query($link, "INSERT INTO Customer (CustomerName, ContactName, Address) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');");

		// Returns ContactName data

		/*
		$result = mysqli_query($link, "SELECT ContactName FROM test");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		printf("%s\n", $row["ContactName"]);
		*/
		
		$result = mysqli_query($link, "SELECT ContactName FROM test");
		    /* fetch associative array */
		echo "|---" . serialize($result) . "---|";

	    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	        echo "+++" . $row["ContactName"] . "+++";
	        return $row["ContactName"];
	    }
	    /* free result set */
	    mysqli_free_result($result);
		// printf("Returning Query result: " . $row["ContactName"]);
		// return $row["ContactName"];
	}
}
?>