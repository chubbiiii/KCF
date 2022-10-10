
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strnumber = $_GET["number"];
	$sql = "DELETE FROM addressuser
			WHERE number = '".$strnumber."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
        echo"<script language=\"javascript\"> alert('ลบที่อยู่เรียบร้อย'); </script>";
        echo"<meta http-equiv='refresh' content='0;url=address.php'>";
       }

	mysqli_close($conn);
?>
