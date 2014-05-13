<?php

class PhpApp {

	public function findData() {
		$link = mysql_connect('localhost', 'root', '');
		/* If database exists, drop it */
		if ($link) {
			mysql_query('DROP DATABASE my_db', $link);
		}
	    mysql_query("CREATE DATABASE testPhpDb");
	    mysql_select_db('testPhpDb');

		/* Creates table, populates with sample data */
		$createTableQuery = "CREATE TABLE Customer;";
		$setDataQuery = "INSERT INTO Customer (CustomerName, ContactName, Address) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');";
		mysql_query($createTableQuery, $link);
		mysql_query($setDataQuery, $link);

		/* Returns ContactName data */
		return mysql_query("SELECT ContactName FROM testPhpDb;", $link);
	}
}

?>