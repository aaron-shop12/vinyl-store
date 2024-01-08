<?php

require_once("../../../../wp-load.php");

global $wpdb;

//check we have username post var
if(isset($_POST["email"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	//try connect to db
	
	
	//trim and lowercase username
	$useremail =  strtolower(trim($_POST["email"])); 
	//echo $useremail; 
	//sanitize username
	$useremail = filter_var($useremail, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$useremail; 
	//check username in db
	//$results = mysqli_query($connecDB,"SELECT id FROM wp_users WHERE user_login='$useremail'");
	$results = $wpdb->get_results("select * from ".$wpdb->prefix."users WHERE user_email='$useremail'");
	//return total count
	$useremail_exist = $results; //total records
	
	//if value is more than 0, username is not available
	if($useremail_exist) {
		$ret=false;
	}else{
		$ret=true;
	}
	
	//close db connection
	

echo(json_encode($ret));
}
?>
