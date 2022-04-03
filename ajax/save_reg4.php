<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');
  
include('../db_connect.php');

$user_id = $_REQUEST['user_id'];

$emergencyFullname = $_REQUEST['emergencyFullname'];
$emergencyAddress = $_REQUEST['emergencyAddress'];
$emergencyRelationship = $_REQUEST['emergencyRelationship'];
$emergencyNumber = $_REQUEST['emergencyNumber'];
$termsAndCondition = $_REQUEST['termsAndCondition'];
$newsletter = $_REQUEST['newsletter'];



$sql=" UPDATE users SET 
progress = 6,

emergency_name = '$emergencyFullname',
emergency_address = '$emergencyAddress',
emergency_relationship = '$emergencyRelationship',
terms_condition = '$termsAndCondition',
emergency_number = '$emergencyNumber',
news_letter = '$newsletter',
date_registered = NOW()

WHERE user_id = $user_id ";
if(!mysql_query($sql)){die("ERROR:" .mysql_error());}

//output
echo 'emergencyFullname : '. $emergencyFullname .';';
echo 'emergencyAddress : '. $emergencyAddress .';';
echo 'emergencyRelationship : '. $emergencyRelationship .';';
echo 'emergencyNumber : '. $emergencyNumber .';';
echo 'termsAndCondition : '. $termsAndCondition .';';
echo 'newsletter : '. $newsletter .';';