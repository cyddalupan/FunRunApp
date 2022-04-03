<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');
  
include('../db_connect.php');

$user_id = $_REQUEST['user_id'];

$fullname = $_REQUEST['fullname'];
$fullname2 = $_REQUEST['fullname2'];
$fullname3 = $_REQUEST['fullname3'];
$mobileNetwork = $_REQUEST['mobileNetwork'];
$mobileNumber = $_REQUEST['mobileNumber'];
$useremail = $_REQUEST['useremail'];
$dateofbirth = $_REQUEST['dateofbirth'];
$phonenetwork = $_REQUEST['phonenetwork'];
$landlinenumber = $_REQUEST['landlinenumber'];
$usergender = $_REQUEST['usergender'];

$sql=" UPDATE users SET 
progress = 3,
first_name = '$fullname',
last_name = '$fullname2',
middle_name = '$fullname3',
mobile_network = '$mobileNetwork',
mobile_number = '$mobileNumber',
user_email = '$useremail',
date_birth = '$dateofbirth',
landline_network = '$phonenetwork',
landline_number = '$landlinenumber',
user_gender = '$usergender'

WHERE user_id = $user_id ";
if(!mysql_query($sql)){die("ERROR:" .mysql_error());}

echo 'name = '.$fullname.' '.$fullname3.' '.$fullname2.';';
echo 'mobile number = '.$mobileNetwork.$mobileNumber.';';
echo 'email = '.$useremail.';';
echo 'birthday = '.$dateofbirth.';';
echo 'landline number = '.$landlinenumber.';';
echo 'gender = '.$usergender;