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

	$strUserID = $_GET["UserID"];
	$sql = "DELETE FROM member
			WHERE UserID = '".$strUserID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
        echo "<script>alert('ลบออกจากระบบเรียบร้อย')</script>";
		echo "<script>window.location='user.php'</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>