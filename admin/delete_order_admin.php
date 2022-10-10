<html>
<head>
<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strorderID = $_GET["orderID"];
	$sql = "DELETE FROM orders
			WHERE orderID = '".$strorderID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
        echo "<script>alert('ลบออกจากระบบเรียบร้อย')</script>";
		echo "<script>window.location='order.php'</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>