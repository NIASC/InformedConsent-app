<?php

class DBM {
	
	// Connect
	public static function open($parameters) {
		
		$database_link = mysql_connect($parameters['host'], $parameters['username'], $parameters['password']);
		
		if (!$database_link) {
			return false;
		}

		$db_selected = mysql_select_db($parameters['database'], $database_link);
		
		if (!$db_selected) {
			return false;
		}
		
		mysql_query('SET CHARACTER SET utf8', $database_link);
		
		mysql_query("SET NAMES 'utf8'", $database_link);
		
		return $database_link;
		
	}
	
	// Close
	public static function close($database_link) {
		
		if (!$database_link) {
			return false;
		}
		
		mysql_close($database_link);
		
		return true;
		
	}
	
	// Query
	public static function query($query, $database_link = '') {
	
		if ($database_link) {
			return mysql_query($query, $database_link);
		} else {
			return mysql_query($query);
		}
		
	}
	
	// Num Rows
	public static function numRows($result) {
	
		return mysql_num_rows($result);
		
	}
	
	// Fetch Object
	public static function fetchObject($result) {
	
		return mysql_fetch_object($result);
		
	}
	
	// Fetch Array
	public static function fetchArray($result, $intMode = MYSQL_ASSOC) {
	
		return mysql_fetch_array($result, $intMode);
		
	}
	
	// Query Data
	public static function queryData($query, $database_link = '') {
	
		if ($database_link) {
			$result = mysql_query($query, $database_link);
		} else {
			$result = mysql_query($query);
		}
		
		if (mysql_num_rows($result)) {
			return $result;
		} else {
			return false;
		}
		
	}
	
	// Query Status
	public static function queryStatus($result) {
	
		return mysql_result_status($result);
		
	}
	
	// Insert ID
	public static function insertID($database_link = '') {
		
		if ($database_link) {
			return mysql_insert_id($database_link);
		} else {
			return mysql_insert_id();
		}
		
	}
	
	// Escape
	public static function escape($str) {
	
		return mysql_real_escape_string($str);
		
	}
	
}

?>