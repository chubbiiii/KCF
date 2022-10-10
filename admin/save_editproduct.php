<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn, "utf8");
	$sql = "UPDATE product SET 
            productID = '".$_POST["productID"]."' ,
			productName = '".$_POST["productName"]."' ,
			category = '".$_POST["category"]."' ,
			price = '".$_POST["price"]."' ,
            picture = '".$_POST["picture"]."' 
			WHERE productID = '".$_POST["productID"]."' ";

$query = mysqli_query($conn,$sql)or die ("Error Query [".$sql."]");

	
	if($query) {
	 echo"<script language=\"javascript\"> alert('แก้ไขเรียบร้อยเรียบร้อย'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=KCFShopee.php'>";
	}

	mysqli_close($conn);
?>
