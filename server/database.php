<?php
	/*
		Author: Loris <BlackCode> Mich
		Email: loris@lorismich.it
		Web: www.lorismich.it
		
		File per la gestione del database
	*/
	
	class mysql {
		private $db = null;			// Database
		private $debug = false;		// Debug Flag
		private $tb_prefix = "";	// Table Prefix
		
		function __construct($db_host, $db_username, $db_password, $db_name, $db_prefix) {
			$this->tb_prefix = $db_prefix;
			$this->connect($db_host, $db_username, $db_password, $db_name);
		}
		
		function __destruct() {
			$this->close();
		}
		
		// Connect the database
		function connect($db_host, $db_username, $db_password, $db_name) {
			if(!$this->db = mysql_connect($db_host, $db_username, $db_password) or !mysql_select_db($db_name, $this->db)) {
				die("Impossibile connettersi al database");
			}	
		}
		
		// Close the database connection
		function close() {
			if(!mysql_close($this->db))
				die("Impossibile chiudere la connessione al database");
		}
		
		// Switch debug status
		function switchDebug() {
			if($this->debug == true)
				$this->debug = false;
			else
				$this->debug = true;
		}
		
		// Query 
		// Args: ($query, $type)
		//	$query: query
		//	$type: possible values: 
		//		- only_query: returs resurce
		//		- array: fetch in an array the results
		//		- object: fetch in a object the results		 
		function query($query, $type = "only_query") {
			$exec_query = mysql_query($query, $this->db);
			
			if($this->debug == true) {
				if($exec_query) 
					echo '<div style="color: green">'. $query .'</div>';
				else
					die('<div style="color: red">'. $query .'</div>');		
			}	
			
			switch($type) {
				case "array":
					return mysql_fetch_array($exec_query, MYSQL_ASSOC);
				break;
				case "object":
					return mysql_fetch_object($exec_query);
				break;	
				default:
					return $exec_query;
				break;
			}
		}

	}

?>
