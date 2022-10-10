<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn, "utf8");
	$sql = "UPDATE member SET 
			name = '".$_POST["name"]."' ,
			lastname = '".$_POST["lastname"]."' ,
			tel = '".$_POST["tel"]."' ,
			email = '".$_POST["email"]."' ,
			sex = '".$_POST["sex"]."',
			birthday = '".$_POST["birthday"]."',
            birthmonth = '".$_POST["birthmonth"]."',
            birthyear = '".$_POST["birthyear"]."',
            LINE_ID = '".$_POST["lineid"]."'
			WHERE UserID = '".$_POST["UserID"]."' ";

	$query = mysqli_query($conn,$sql)or die ("Error Query [".$sql."]");

	if($query) {
	 echo"<script language=\"javascript\"> alert('แก้ไขเรียบร้อย'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=editprofile.php'>";
	}

	mysqli_close($conn);
?>