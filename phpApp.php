<?php
class PhpApp {
	public function findData() {
		// connect to the server & database
		$link = mysqli_connect('127.0.0.1', 'shippable', '', 'test') or die("Error occurred during connection: " . mysqli_error($link));

		/* Creates table */
		mysqli_query($link, "CREATE TABLE IF NOT EXISTS 'Customer'");
		printf("Customer table created");
		
		/* Populates with sample data */
		mysqli_query($link, "INSERT INTO Customer (CustomerName, ContactName, Address) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');");
		printf("Customer table populated with data");

		/* Returns ContactName data */
		mysqli_real_query($link, "SELECT ContactName FROM test");
		if ($result = mysqli_use_result($link)) {
			while ($row = mysqli_fetch_row($result)) {
	            printf("%s\n", $row[0]);
	        }
    	}
		// printf("Returning Query result: " . $result->mysqli_fetch_array()["ContactName"]);
		// return $result->mysqli_fetch_array()["ContactName"];
	}
}
?>