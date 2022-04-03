<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('../db_connect.php');

//define a key
$lock = 'bdjv7254nfn4djv734hs63gdas765vhrif7';

$key = 'wrong key';
//request for a right key
if(isset($_REQUEST['key']))
    $key = $_REQUEST['key'];

$startcount = 0;
if(isset($_REQUEST['startcount']))
    $startcount = $_REQUEST['startcount'];

$printcount = 10;
if(isset($_REQUEST['printcount']))
    $printcount = $_REQUEST['printcount'];

if($key != $lock){
    die('only admin can access this page');
}else{

    $outp = "[";
    $sql="SELECT * FROM users LIMIT $startcount,$printcount";
    $result=mysql_query($sql);
    while($rows=mysql_fetch_array($result)){
        if ($outp != "[") {$outp .= ",";}

            $outp .= '{"user_id":"'                 . $rows["user_id"]                      . '",';
            $outp .= '"user_ip":"'                  . $rows["user_ip"]                      . '",';
            $outp .= '"race_category":"'            . $rows["race_category"]                . '",';
            $outp .= '"registration_branch":"'      . $rows["registration_branch"]          . '",';
            $outp .= '"first_name":"'               . $rows["first_name"]                   . '",';
            $outp .= '"last_name":"'                . $rows["last_name"]                    . '",';
            $outp .= '"middle_name":"'              . $rows["middle_name"]                  . '",';
            $outp .= '"mobile_network":"'           . $rows["mobile_network"]               . '",';
            $outp .= '"mobile_number":"'            . $rows["mobile_number"]                . '",';
            $outp .= '"user_email":"'               . $rows["user_email"]                   . '",';
            $outp .= '"landline_network":"'         . $rows["landline_network"]             . '",';
            $outp .= '"user_gender":"'              . $rows["user_gender"]                  . '",';
            $outp .= '"date_birth":"'               . $rows["date_birth"]                   . '",';
            $outp .= '"address_number":"'           . $rows["address_number"]               . '",';
            $outp .= '"address_street":"'           . $rows["address_street"]               . '",';
            $outp .= '"address_city":"'             . $rows["address_city"]                 . '",';
            $outp .= '"address_province":"'         . $rows["address_province"]             . '",';
            $outp .= '"address_zipcode":"'          . $rows["address_zipcode"]              . '",';
            $outp .= '"nationality":"'              . $rows["nationality"]                  . '",';
            $outp .= '"occupation":"'               . $rows["occupation"]                   . '",';
            $outp .= '"visited_branch":"'           . $rows["visited_branch"]               . '",';
            $outp .= '"mcdonalds_employed":"'       . $rows["mcdonalds_employed"]           . '",';
            $outp .= '"fam1_first_name":"'          . $rows["fam1_first_name"]              . '",';
            $outp .= '"fam1_last_name":"'           . $rows["fam1_last_name"]               . '",';
            $outp .= '"fam1_middle_name":"'         . $rows["fam1_middle_name"]             . '",';
            $outp .= '"fam1_birthday":"'            . $rows["fam1_birthday"]                . '",';
            $outp .= '"fam1_relationship":"'        . $rows["fam1_relationship"]            . '",';
            $outp .= '"fam2_first_name":"'          . $rows["fam2_first_name"]              . '",';
            $outp .= '"fam2_last_name":"'           . $rows["fam2_last_name"]               . '",';
            $outp .= '"fam2_middle_name":"'         . $rows["fam2_middle_name"]             . '",';
            $outp .= '"fam2_birthday":"'            . $rows["fam2_birthday"]                . '",';
            $outp .= '"fam2_relationship":"'        . $rows["fam2_relationship"]            . '",';
            $outp .= '"fam3_first_name":"'          . $rows["fam3_first_name"]              . '",';
            $outp .= '"fam3_last_name":"'           . $rows["fam3_last_name"]               . '",';
            $outp .= '"fam3_middle_name":"'         . $rows["fam3_middle_name"]             . '",';
            $outp .= '"fam3_birthday":"'            . $rows["fam3_birthday"]                . '",';
            $outp .= '"fam3_relationship":"'        . $rows["fam3_relationship"]            . '",';
            $outp .= '"emergency_name":"'           . $rows["emergency_name"]               . '",';
            $outp .= '"fam3_middle_name":"'         . $rows["fam3_middle_name"]             . '",';
            $outp .= '"emergency_address":"'        . $rows["emergency_address"]            . '",';
            $outp .= '"emergency_number":"'         . $rows["emergency_number"]             . '",';
            $outp .= '"emergency_relationship":"'   . $rows["emergency_relationship"]       . '",';
            $outp .= '"news_letter":"'              . $rows["news_letter"]                  . '",';
            $outp .= '"terms_condition":"'          . $rows["terms_condition"]              . '",';
            $outp .= '"date_registered":"'          . $rows["date_registered"]              . '",';
            $outp .= '"user_status":"'              . $rows["user_status"]                  . '"}'; 

    }
    $outp .="]";


    echo $outp;

}//if this page is accessed