<?php

$user_id = $_SESSION['user_id'];

function cyd_decode($string){
	$convertedString = utf8_decode($string);
	$decoded = str_replace('?','`',$convertedString);
	$capitalized = ucfirst($decoded);
	return $capitalized;
}

function birthday($birthday) {
    $age = date_create($birthday)->diff(date_create('today'))->y;
    
    return $age;
}



$sql="SELECT * FROM users WHERE user_id= $user_id ";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

require('../classes/fpdf/fpdf.php'); 
class PDF extends FPDF {
 
}
 
//class instantiation
$pdf=new PDF("P","in","Letter");
$pdf->SetMargins(1,1,1);
$pdf->SetFillColor(240, 100, 100);
$pdf->SetFont('Times','',10);

/*
 * first page
 * Image Only
 */
$pdf->AddPage();
	$pdf->Image("../davao/ajax/pdfimg/page1.jpg", 0, 0, 8, 11, "JPG");
  
  
 
/*
 * Second page page
 * information page
 */
$pdf->AddPage(); 
	$pdf->Image("../davao/ajax/pdfimg/page3.jpg", 0.5, 0, 7, 11, "JPG");
  
/*
 * Thrid page
 * with form
 */
$pdf->AddPage(); 
	//back ground
	$pdf->Image("../davao/ajax/pdfimg/page2.jpg", 1, 0, 7, 11, "JPG");
	
	//mcdonals branch
	$pdf->Text(4.05 , 0.54 , cyd_decode($rows['registration_branch']) );
	
	//run category checkbox
		//check for 1k
		if($rows['race_category'] == '1k-children')
		$pdf->Image("../davao/ajax/pdfimg/check.png", 1.35, 0.85, 0.4, 0.3, "PNG");
		//check for 3k (children)
		if($rows['race_category'] == '3k-children')
		$pdf->Image("../davao/ajax/pdfimg/check.png", 1.90, 0.85, 0.4, 0.3, "PNG");
		//check for 3k (adult)
		if($rows['race_category'] == '3k-adult')
		$pdf->Image("../davao/ajax/pdfimg/check.png", 2.92, 0.85, 0.4, 0.3, "PNG");
		//check for 3k (family)
		if($rows['race_category'] == '3k-family')
		$pdf->Image("../davao/ajax/pdfimg/check.png", 3.84, 0.85, 0.4, 0.3, "PNG");
		//check for 5k
		if($rows['race_category'] == '5k-adult')
		$pdf->Image("../davao/ajax/pdfimg/check.png", 4.84, 0.85, 0.4, 0.3, "PNG");
		//check for 10k
		if($rows['race_category'] == '10k-adult')
		$pdf->Image("../davao/ajax/pdfimg/check.png", 5.42, 0.85, 0.4, 0.3, "PNG");
		
	//full name
		//first name
		$pdf->Text(1.35 , 1.80 , cyd_decode($rows['first_name']) );
		//last name
		$pdf->Text(4.3 , 1.80 ,  cyd_decode($rows['last_name']) );
		//middle initial
		$pdf->Text(6.95 , 1.80 , ucfirst(substr($rows['middle_name'],0,1) ) );
	
	//address
		//street
		$pdf->Text(1.35 , 2.45 ,  $rows['address_number'].' '. $rows['address_street']);
		//city
		$pdf->Text(6.15 , 2.45 , cyd_decode($rows['address_city']) );
		//province
		$pdf->Text(1.35 , 3.05 , cyd_decode($rows['address_province']) );
		//postal code
		$pdf->Text(6.15 , 3.05 , $rows['address_zipcode']);
	
	//birthday
		//month
		$pdf->Text(1.45 , 3.60 , date('m', strtotime($rows['date_birth'])) );
		//day
		$pdf->Text(2.05 , 3.60 ,  date('d', strtotime($rows['date_birth'])));
		//year
		$pdf->Text(2.55 , 3.60 , date('Y', strtotime($rows['date_birth'])));
		//age
		$rows['date_birth'];
		$pdf->Text(3.37 , 3.60 , birthday($rows['date_birth']) );
		//gender
		$pdf->Text(3.92 , 3.60 , ucfirst($rows['user_gender']) );
		//nationality
		$pdf->Text(4.67 , 3.60 , ucfirst($rows['nationality'])  );
	
	//mobile
	$pdf->Text(1.35 , 4.05 , $rows['mobile_network'].$rows['mobile_number'] );
	//email
	$pdf->Text(4.67 , 4.05 , $rows['user_email'] );
	
	//home number
	if($rows['landline_number'] == ''){
		$landline = '';
	}else{
		$landline = $rows['landline_network'].$rows['landline_number'];
	}
	$pdf->Text(1.35 , 4.43 , $landline);
	//occupation
	$pdf->Text(4.67 , 4.43 , ucfirst($rows['occupation']) );
	
	//mcdonals branch
	$pdf->Text(1.35 , 4.80 , ucfirst($rows['visited_branch']) );
	
	
	//are you employed by mcdonals philippines
		if($rows['mcdonalds_employed'] != 'no'){
		//yes
		$pdf->Image("../davao/ajax/pdfimg/check.png", 1.24, 5.36, 0.4, 0.3, "PNG");
			//department
			$pdf->Text(1.8 , 5.6 , substr($rows['mcdonalds_employed'],6,500) );
		}else{
			//no
			$pdf->Image("../davao/ajax/pdfimg/check.png", 1.24, 5.66, 0.4, 0.3, "PNG");
		}
	//do you have any family members joining with you
		if($rows['race_category'] == '3k-family'){
			//yes
			$pdf->Image("../davao/ajax/pdfimg/check.png", 1.24, 6.45, 0.4, 0.3, "PNG");
				if($rows['fam1_first_name'] != ''){
					//family_1
					//name_1
					$pdf->Text(1.3, 7.34 , ucfirst($rows['fam1_first_name']) .' '. ucfirst($rows['fam1_middle_name']) .' '. ucfirst($rows['fam1_last_name'])  );
					//birthdate_1
					$pdf->Text(4.1, 7.34 , $rows['fam1_birthday'] );
					//relationship_1
					$pdf->Text(5.9, 7.34 , ucfirst($rows['fam1_relationship']) );
				}
				if($rows['fam2_first_name'] != ''){
					//family_2
					//name_2
					$pdf->Text(1.3, 7.76 , ucfirst($rows['fam2_first_name']) .' '. ucfirst($rows['fam2_middle_name']) .' '. ucfirst($rows['fam2_last_name']) );
					//birthdate_2
					$pdf->Text(4.1, 7.76 , $rows['fam2_birthday'] );
					//relationship_2
					$pdf->Text(5.9, 7.76 , ucfirst($rows['fam2_relationship']) );
				}
				if($rows['fam3_first_name'] != ''){
					//family_3
					//name_3
					$pdf->Text(1.3, 8.16 , ucfirst($rows['fam3_first_name']) .' '. ucfirst($rows['fam3_middle_name']) .' '. ucfirst($rows['fam3_last_name']));
					//birthdate_3
					$pdf->Text(4.1, 8.16 , $rows['fam3_birthday'] );
					//relationship_3
					$pdf->Text(5.9, 8.16 , ucfirst($rows['fam3_relationship']));
				}
		}else{
			//no
			$pdf->Image("../davao/ajax/pdfimg/check.png", 1.22, 8.22, 0.4, 0.3, "PNG");
		}
	//would you like to recieve about mcdonals promotion
		if($rows['news_letter'] == 'checked'){
			//yes 
			$pdf->Image("../davao/ajax/pdfimg/check.png", 1.22, 8.98, 0.4, 0.3, "PNG");
				//new products
				$pdf->Image("../davao/ajax/pdfimg/check.png", 1.47, 9.23, 0.4, 0.3, "PNG");
				//new promotional items
				$pdf->Image("../davao/ajax/pdfimg/check.png", 1.47, 9.4, 0.4, 0.3, "PNG");
				//happy meals
				$pdf->Image("../davao/ajax/pdfimg/check.png", 1.47, 9.6, 0.4, 0.3, "PNG");
				//family events
				$pdf->Image("../davao/ajax/pdfimg/check.png", 1.47, 9.77, 0.4, 0.3, "PNG");
				//how would you live to be reached by this information
				//email
				$pdf->Image("../davao/ajax/pdfimg/check.png", 1.2, 10.25, 0.4, 0.3, "PNG");
				//mobile number
				$pdf->Image("../davao/ajax/pdfimg/check.png", 1.2, 10.43, 0.4, 0.3, "PNG");
				//home address
				$pdf->Image("../davao/ajax/pdfimg/check.png", 1.2, 10.63, 0.4, 0.3, "PNG");
		}else{
			//no
			$pdf->Image("../davao/ajax/pdfimg/check.png", 4.62, 8.98, 0.4, 0.3, "PNG");
		}
		
		
	
	

/*
 * Faourth page page
 * signature page
 */
$pdf->AddPage(); 
	$pdf->Image("../davao/ajax/pdfimg/page4.jpg", 0.8, 0, 7, 11, "JPG");
	
	//date
	$pdf->Text(1.5, 6.65 , date('m - d - Y') );
	
	//name
	$pdf->Text(1.5, 7.13 ,  ucfirst($rows['emergency_name']) );
	//relationship
	$pdf->Text(4.67, 7.13 ,  ucfirst($rows['emergency_relationship']) );
	
	//address
	$pdf->Text(1.55, 7.35 ,  ucfirst($rows['emergency_address']) );
	//contact number
	$pdf->Text(4.67, 7.35 , ucfirst($rows['emergency_number']));
 