<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";
		
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon, "utf8");

    $strSQL = "SELECT * FROM member WHERE email = '".trim($_POST['email'])."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    if($_POST["password1"] != $_POST["password2"])
	{
		echo "<body onload=\"window.alert('Password ไม่ตรงกัน');return history.go(-1)\">";
		exit();
	}
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
    {
			echo "<body onload=\"window.alert('Email มีผู้ใช้งานแล้ว');return history.go(-1)\">";
	}
	else
	{
        $strSQL = "INSERT INTO member (name,lastname,tel,email,password,sex,birthday,birthmonth,birthyear,LINE_ID) VALUES ('".$_POST["productName"]."', 
		'".$_POST["category"]."','".$_POST["price"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo "<script>alert('สมัครเรียบร้อย')</script>";
		echo "<script>window.location='index-2.php'</script>";
		
	}

	mysqli_close($objCon);
?>
</body>
</html>