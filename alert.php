<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "da0FZv4tnUsBaeUwzXUCW1gd4aa8Z4jC4UpaAm2TScX";
	$sMessage = "มีรายการสั่งซื้อเข้าจ้า....";

	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if(curl_error($chOne)) 
	{ 
	
	} 
	else { 
		$result_ = json_decode($result, true); 
		echo"<script language=\"javascript\"> alert('สั่งซื้อเรียบร้อยแล้วค่ะ'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=/kcf/kcf.php'>";
	} 
	curl_close( $chOne );   
?>