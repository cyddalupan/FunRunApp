<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');
  
include('../db_connect.php');

$user_id = $_REQUEST['user_id'];

$sql=" UPDATE users SET 
progress = 7,
user_status = 'completed'


WHERE user_id = $user_id ";
if(!mysql_query($sql)){die("ERROR:" .mysql_error());}


//output
echo ' registration complete ';