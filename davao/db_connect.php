<?php
$host="localhost"; // Host name 
$db_name="stripesrun"; // Database name


$db_username = 'root';
$db_password = '';

/*
$db_username = 'lbadmin';
$db_password = 'c2VUZAcwav';
*/
// Connect to server and select databse.
$con= mysql_connect ($host, $db_username, $db_password );
if(!$con){
	die("Could not connect:".mysql_error());
}
mysql_select_db($db_name);