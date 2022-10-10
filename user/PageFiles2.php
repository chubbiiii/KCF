<?php
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"Bill/". $_FILES["filUpload"]["name"]))

{
	echo"<script language=\"javascript\"> alert('ชำระเงินเรียบร้อย รอการตรวจสอบ 1-2 วัน ถ้าชำระเรียบร้อยร้อยสถานะไม่เปลี่ยนให้แจ้ง Admin ขอบคุณค่ะ'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=editprofile.php'>";

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "kcf";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($objCon, "utf8");

$strSQL = "
	INSERT INTO payment (orderID,Bill)
	VALUES
	('".$_POST["orderid"]."','".$_FILES["filUpload"]["name"]."') ";
	$objQuery = mysqli_query($objCon,$strSQL);
}

?>