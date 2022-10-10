<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";
		
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon, "utf8");

        $strSQL = "INSERT INTO addressuser (UserID,name,lastname,email,LINE_ID,province,amphur,district,zipcode,tel,address,address1) VALUES ('".$_POST["UserID"]."','".$_POST["name"]."', 
		'".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["lineid"]."','".$_POST["province"]."','".$_POST["amphoe"]."','".$_POST["district"]."','".$_POST["zipcode"]."'
		,'".$_POST["tel"]."','".$_POST["address"]."','".$_POST["address1"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo "<script>alert('บันทึกที่อยู่การจัดส่งเรียบร้อย')</script>";
		echo "<script>window.location='address.php'</script>";
		

	mysqli_close($objCon);
?>
</body>
</html>