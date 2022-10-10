<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn, "utf8");
	$sql = "UPDATE addressuser SET 
			number = '".$_POST["number"]."',
			UserID = '".$_POST["UserID"]."' ,
			name = '".$_POST["name"]."' ,
			lastname = '".$_POST["lastname"]."' ,
			email = '".$_POST["email"]."' ,
			LINE_ID = '".$_POST["lineid"]."',
			province = '".$_POST["province"]."',
            amphur = '".$_POST["amphoe"]."',
            district = '".$_POST["district"]."',
            zipcode = '".$_POST["zipcode"]."',
            tel = '".$_POST["tel"]."',
            address = '".$_POST["address"]."',
            address1 = '".$_POST["address1"]."'
			WHERE number = '".$_POST["number"]."' ";

	$query = mysqli_query($conn,$sql)or die ("Error Query [".$sql."]");

	if($query) {
	 echo"<script language=\"javascript\"> alert('แก้ไขเรียบร้อย'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=address.php'>";
	}

	mysqli_close($conn);
?>