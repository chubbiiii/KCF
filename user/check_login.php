<?php
	session_start();
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "kcf";
	

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon, "utf8");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['username'])."' 
	and Password = '".mysqli_real_escape_string($objCon,$_POST['password1'])."'" ;
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    if(!$objResult)
    if(!$objResult)
	{
			
			echo "<body onload=\"window.alert('รหัสผู้ใช้งานไม่ถูกต้อง');return history.go(-1)\">";
			exit;
	}
	{
            $_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:admin/index-2_admin.php");
			}
			else
			{
				header("location:index-1.php");
			}
			
	}
	
	mysqli_close($objCon);
?>
