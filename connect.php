<?php 
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="databank"; // Database name

	$conn = new mysqli($host, $username, $password, $db_name);
	mysqli_report(MYSQLI_REPORT_ERROR);
?>