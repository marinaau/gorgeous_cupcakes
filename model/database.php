<?php
	//database connection details
	$host = 'cfmysqldb.czo8wq4iq9p4.ap-southeast-2.rds.amazonaws.com';
	$user = 'admin';
	$password = 'Password123';
	$database = 'gorgeouscupcakesdb';

	//connect to database with a try/catch statement
	//if the connection is not successful display the error message via database_error.php
	//the PDOException class represents the error raised by PDO
	//the PDO error is stored in the variable $e
	//the PDO error is returned as a string via the getMessage() function
	try
	{
		$conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
	}
	catch(PDOException $e)
	{
		$error_message = $e->getMessage();
		include('../view/database_error.php');
		exit();
	}
?>
