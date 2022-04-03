<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');
  
include('../db_connect.php');

$user_id = $_REQUEST['user_id'];

$fam1Text1 = $_REQUEST['fam1Text1'];
$fam1Text2 = $_REQUEST['fam1Text2'];
$fam1Text3 = $_REQUEST['fam1Text3'];
$fam1Date = $_REQUEST['fam1Date'];
$fam1relationship = $_REQUEST['fam1relationship'];

$fam2Text1 = $_REQUEST['fam2Text1'];
$fam2Text2 = $_REQUEST['fam2Text2'];
$fam2Text3 = $_REQUEST['fam2Text3'];
$fam2Date = $_REQUEST['fam2Date'];
$fam2relationship = $_REQUEST['fam2relationship'];

$fam3Text1 = $_REQUEST['fam3Text1'];
$fam3Text2 = $_REQUEST['fam3Text2'];
$fam3Text3 = $_REQUEST['fam3Text3'];
$fam3Date = $_REQUEST['fam3Date'];
$fam3relationship = $_REQUEST['fam3relationship'];


$sql=" UPDATE users SET 
progress = 5,

fam1_first_name = '$fam1Text1',
fam1_last_name = '$fam1Text2',
fam1_middle_name = '$fam1Text3',
fam1_birthday = '$fam1Date',
fam1_relationship = '$fam1relationship',

fam2_first_name = '$fam2Text1',
fam2_last_name = '$fam2Text2',
fam2_middle_name = '$fam2Text3',
fam2_birthday = '$fam2Date',
fam2_relationship = '$fam2relationship',

fam3_first_name = '$fam3Text1',
fam3_last_name = '$fam3Text2',
fam3_middle_name = '$fam3Text3',
fam3_birthday = '$fam3Date',
fam3_relationship = '$fam3relationship'

WHERE user_id = $user_id ";
if(!mysql_query($sql)){die("ERROR:" .mysql_error());}


//output
echo 'fam1Text1 : '. $fam1Text1 .';';
echo 'fam1Text2 : '. $fam1Text2 .';';
echo 'fam1Text3 : '. $fam1Text3 .';';
echo 'fam1Date : '. $fam1Date .';';
echo 'fam1relationship : '. $fam1relationship .';';

echo 'fam2Text1 : '. $fam2Text1 .';';
echo 'fam2Text2 : '. $fam2Text2 .';';
echo 'fam2Text3 : '. $fam2Text3 .';';
echo 'fam2Date : '. $fam2Date .';';
echo 'fam2relationship : '. $fam2relationship .';';

echo 'fam3Text1 : '. $fam3Text1 .';';
echo 'fam3Text2 : '. $fam3Text2 .';';
echo 'fam3Text3 : '. $fam3Text3 .';';
echo 'fam3Date : '. $fam3Date .';';
echo 'fam3relationship : '. $fam3relationship .';';