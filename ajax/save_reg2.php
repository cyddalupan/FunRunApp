<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');
  
include('../db_connect.php');

$user_id = $_REQUEST['user_id'];

$addressNumber = $_REQUEST['addressNumber'];
$addressStreet = $_REQUEST['addressStreet'];
$addressCity = $_REQUEST['addressCity'];
$addressProvince = $_REQUEST['addressProvince'];
$addressZip = $_REQUEST['addressZip'];
$nationality = $_REQUEST['nationality'];
$userOccupation = $_REQUEST['userOccupation'];
$frequentlyVisited = $_REQUEST['frequentlyVisited'];
$RUEmployed = $_REQUEST['RUEmployed'];
$division = $_REQUEST['division'];
if($RUEmployed  !== 'no')
	$save_employed = $RUEmployed.' -- '.$division;
else
	$save_employed = 'no';

$sql=" UPDATE users SET 
progress = 4,
address_number = '$addressNumber',
address_street = '$addressStreet',
address_city = '$addressCity',
address_province = '$addressProvince',
address_zipcode = '$addressZip',
nationality = '$nationality',
occupation = '$userOccupation',
visited_branch = '$frequentlyVisited',
mcdonalds_employed = '$save_employed'

WHERE user_id = $user_id ";
if(!mysql_query($sql)){die("ERROR:" .mysql_error());}

//output
echo 'user address = '.$addressNumber.' '.$addressStreet.' '.$addressCity.' '.$addressProvince.' '.$addressZip.';';
echo 'nationality = '.$nationality.';';
echo 'occupation = '.$userOccupation.';';
echo 'frequently visited mcdonalds branch ='.$frequentlyVisited.';';
echo 'are you employed by mcdo = '.$RUEmployed.' '.$division.';';