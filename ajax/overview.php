<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access');

include('../db_connect.php');
session_start();

//include('../pdf_generator.php');

$pdf->Output('../pdfs/'.$rows['first_name'].'-'.$rows['last_name'].'-'.$rows['user_id'].'.pdf');

