<?php
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"backoffice/img_pro/all/". $_FILES["filUpload"]["name"]))

{	
	echo"<script language=\"javascript\"> alert('เพิ่มสินค้าเรียบร้อย'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=addproduct.php'>";

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "kcf";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($objCon, "utf8");

$strSQL = "
	INSERT INTO product (productName,category,price,picture)
	VALUES
	('".$_POST["nameproduct"]."','".$_POST["productcategory"]."','".$_POST["productprice"]."','".$_FILES["filUpload"]["name"]."') ";
	$objQuery = mysqli_query($objCon,$strSQL);
}

?>