<?php
include('../db_connect.php');
session_start();
include('../pdf_generator.php');

$pdf->Output();
