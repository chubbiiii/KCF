<?php
session_start();

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "kcf";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($objCon, "utf8");
date_default_timezone_set('Asia/Bangkok');
if (!$objCon) {
	echo $objCon->connect_error;
	exit();
}


  $Total = 0;
  $SumTotal = 0;
  $strSQL = "
	INSERT INTO orders (orderDate,name,lastname,address,district,amphur,province,zipcode,tel,UserID)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["name"]."','".$_POST["lastname"]."' ,'".$_POST["address"]."','".$_POST["district"]."','".$_POST["amphur"]."',
	'".$_POST["province"]."','".$_POST["zipcode"]."','".$_POST["tel"]."','".$_POST["UserID"]."') ";
	
	
  $objQuery = mysqli_query($objCon,$strSQL);
  if(!$objQuery)
  {
	echo $objCon->error;
	exit();
  }

  $strOrderID = mysqli_insert_id($objCon);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orderdetail (orderID,productID,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."') 
			  ";
			  mysqli_query($objCon,$strSQL);
	  }
  }


mysqli_close($objCon);
session_start();
	unset($_SESSION["intLine"]);
	
	header("location:view_order.php?orderID=".$strOrderID);
?>