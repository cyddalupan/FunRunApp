<?php 
include('db_connect.php');
include('model.php');
include('function.php');
session_start();

if(isset($_SESSION['user_id'])){
	//test if the id is completed
	if(is_completed($_SESSION['user_id'])){
		detect_new_user();
		header('location:#home');
	}else{
		/*
		$rows = '';
		$user_id = $_SESSION['user_id'];
		$sql="SELECT * FROM users WHERE user_id= $user_id ";
		$result=mysql_query($sql);
		$rows=mysql_fetch_array($result);
		*/
		
	}
}else{
	detect_new_user();
	header('location:#home');
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="stylesheet" href="jmobile/jquery.mobile-1.4.4.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<script src="jmobile/jquery.js"></script>
<script src="jmobile/jquery.mobile-1.4.4.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<script src="js/javascript.js"></script>
<script>var user_id = <?php echo $_SESSION['user_id']; ?>;</script>
<title>Stripes Run</title>
</head>
<body>

<!--home page-->
<div data-role="page" id="no-longer-available">
  <?php include('no-longer-available.php'); ?>
</div>

<!--home page-->
<div data-role="page" id="home">
  <?php include('home.php'); ?>
</div>

<!--race category-->
<div data-role="page" id="race_category">
  <?php include('race_category.php'); ?>
</div>

<!--race category_davao-->
<div data-role="page" id="race_category_davao">
  <?php include('davao/race_category.php'); ?>
</div>

<!--branch for registration-->
<div data-role="page" id="branch_for_registration">
  <?php include('branch_for_registration.php'); ?>
</div>

<!--branch for registration-->
<div data-role="page" id="branch_for_registration_davao">
  <?php include('davao/branch_for_registration.php'); ?>
</div>

<!-- registration1-->
<div data-role="page" id="registration1">
  <?php include('registration1.php'); ?>
</div>

<!-- registration1-->
<div data-role="page" id="registration1_davao">
  <?php include('davao/registration1.php'); ?>
</div>

<!-- registration2-->
<div data-role="page" id="registration2">
  <?php include('registration2.php'); ?>
</div>

<!-- registration2-->
<div data-role="page" id="registration2_davao">
  <?php include('davao/registration2.php'); ?>
</div>

<!-- registration3-->
<div data-role="page" id="registration3">
  <?php include('registration3.php'); ?>
</div>

<!-- registration3-->
<div data-role="page" id="registration3_davao">
  <?php include('davao/registration3.php'); ?>
</div>


<!-- registration4-->
<div data-role="page" id="registration4">
  <?php include('registration4.php'); ?>
</div>

<!-- registration4-->
<div data-role="page" id="registration4_davao">
  <?php include('davao/registration4.php'); ?>
</div>

<!-- confirm-->
<div data-role="page" id="confirm">
  <?php include('confirm.php'); ?>
</div>

<!-- confirm-->
<div data-role="page" id="confirm_davao">
  <?php include('davao/confirm.php'); ?>
</div>

<!-- success-->
<div data-role="page" id="success">
  <?php include('success.php'); ?>
</div>

<!-- success-->
<div data-role="page" id="success_davao">
  <?php include('davao/success.php'); ?>
</div>

<!--cyd data-->
<?php  include('mechanics_list.php'); ?>
<div class="hidden"> <img src="img/race-category-map/children1k.png" /> <img src="img/race-category-map/children3k.png" /> <img src="img/race-category-map/adult3k.png" /> <img src="img/race-category-map/family3k.png" /> <img src="img/race-category-map/adult5k.png" /> <img src="img/race-category-map/adult10k.png" /> </div>
<div class="ui-popup-screen ui-overlay-b in adminoverlay"></div>
<div id="admin">
  <div id="getadmin"></div>
</div>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-36345827-3', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>
<!--code by Cyd cydmdalupan@gmail.com -->