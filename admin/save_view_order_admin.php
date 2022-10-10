<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn, "utf8");
	$sql = "UPDATE orders SET 
			orderID = '".$_POST["orderID"]."' ,
			orderDate = '".$_POST["orderDate"]."' ,
			name = '".$_POST["name"]."' ,
            lastname = '".$_POST["lastname"]."' ,
			address = '".$_POST["address"]."' ,
			district = '".$_POST["district"]."',
			amphur = '".$_POST["amphur"]."',
            province = '".$_POST["province"]."',
            zipcode = '".$_POST["zipcode"]."',
			track = '".$_POST["track"]."',
			status = '".$_POST["status"]."',
            tel = '".$_POST["tel"]."',
            UserID = '".$_POST["UserID"]."'
			WHERE orderID = '".$_POST["orderID"]."' ";

$query = mysqli_query($conn,$sql)or die ("Error Query [".$sql."]");

	
	if($query) {
	 echo"<script language=\"javascript\"> alert('บันทึกเรียบร้อย'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=order.php'>";
	}

	mysqli_close($conn);
?>