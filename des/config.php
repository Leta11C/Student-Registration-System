<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "cci";
	
	$con = mysql_connect($server, $username, $password);
	if(!$con){
		echo "Error : ".mysql_error();
		return;
	}
	$db = mysql_select_db($database,$con);
	if(!$db){
		echo "Error : ".mysql_error();
		return;
	}
	
	
?>