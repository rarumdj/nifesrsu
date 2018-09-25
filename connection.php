<?php 
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'nifes_rsu';

if ($connection = mysql_connect($db_host, $db_username, $db_password)) {
	
	if ($database = mysql_select_db($db_name, $connection)) {
	}
	else {
		
	}
}

?>