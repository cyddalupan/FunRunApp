<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');
  
include('../db_connect.php');

$user_id = $_REQUEST['user_id'];
$branchOfRgstrtn = $_REQUEST['branchOfRgstrtn'];

$sql=" UPDATE users SET 
progress = 2,
registration_branch = '$branchOfRgstrtn'
WHERE user_id = $user_id ";
if(!mysql_query($sql)){die("ERROR:" .mysql_error());}

echo 'registration_branch updated to '.$branchOfRgstrtn;