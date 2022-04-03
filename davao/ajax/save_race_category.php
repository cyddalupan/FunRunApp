<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');
  
include('../db_connect.php');

$user_id = $_REQUEST['user_id'];
$race_category = $_REQUEST['race_category'];

$sql=" UPDATE users SET 
progress = 1,
race_category = '$race_category'
WHERE user_id = $user_id ";
if(!mysql_query($sql)){die("ERROR:" .mysql_error());}

echo 'race_category updated to '.$race_category;