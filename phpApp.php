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
		$query = mysqli_query($link, "SELECT ContactName FROM test");
		$result = mysqli_fetch_array($query);
		printf("Returning Query result: " . $result["ContactName"]);
		return $result["ContactName"];
	}
}
?>