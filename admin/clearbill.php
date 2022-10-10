<?php

	echo"<script language=\"javascript\"> alert('ลบบิลทั้งหมดเรียบร้อย'); </script>";
	 echo"<meta http-equiv='refresh' content='0;url=payment.php'>";

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "kcf";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($objCon, "utf8");

$strSQL = "DELETE FROM payment";
	$objQuery = mysqli_query($objCon,$strSQL);

?>