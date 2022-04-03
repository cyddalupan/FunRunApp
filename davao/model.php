<?php

function get_user_count(){
	//get count of users
	$sql="SELECT * FROM users ORDER BY user_id DESC LIMIT 1";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_array($result)){
		$latest_id =  $rows['user_id'];
	}
	return $latest_id;
}

function add_new_user(){
	$sql="INSERT INTO users (user_status) VALUES('incomplete')";
	if(!mysql_query($sql)){die("ERROR:" .mysql_error());}
}

function is_completed($user_id){
	//check if the user id completed the registration
	$sql="SELECT * FROM users WHERE user_id = $user_id";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_array($result)){
		$user_status =  $rows['user_status'];
	}
	if($user_status == 'incomplete'){
		return false;
	}else{
		return true;
	}
}