<?php
	$dbHost = 'localhost'; 
	$dbName = 'shop';
	$dbUser = 'root';
	$dbPass = '';
	//connection to the database
	$dbhandle = mysql_connect($dbHost, $dbUser, $dbPass) 
	  or die("Unable to connect to MySQL");
	echo "Connected to SHOP MySQL<br>";
?>