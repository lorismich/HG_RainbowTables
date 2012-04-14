<?php
	/*
		Author: Loris <BlackCode> Mich
		Email: loris@lorismich.it
		Web: www.lorismich.it
		
		File principale server
	*/
	
	// Include configuration files
	include("configuration/database.php");	// Include database configuration
	
	// Include module file
	include("database.php");				// Include database module


	// Create new database object
	$mysql = new mysql($mysql_host, $mysql_user, $mysql_password, $mysql_db, $mysql_prefix);
	
	// Debug information
	//$mysql->switchDebug();
	
	// Query example 
	//
	//	$mysql_query = $mysql->query("SELECT * FROM HG_rainbow_works");
	//	while($line = mysql_fetch_array($mysql_query)) {
	//		echo $line["id"];
	//	}
	
	// OR
	
	//$mysql_query = $mysql->query("SELECT * FROM HG_rainbow_works", "array");
	//echo $mysql_query["id"];
	
	// OR
	//$mysql_query = $mysql->query("SELECT * FROM HG_rainbow_works", "object");
	//echo $mysql_query->id;
	
?>
