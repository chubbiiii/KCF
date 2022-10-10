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

	$strproductID = $_GET["productID"];
	$sql = "DELETE FROM product
			WHERE productID = '".$strproductID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
        echo "<script>alert('ลบสินค้าออกจากระบบเรียบร้อย')</script>";
		echo "<script>window.location='KCFShopee.php'</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>