<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="KCFShopee">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KCFShopee</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystylee.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<LINK REL="SHORTCUT ICON" HREF="img/favicon.png">
  </head>

  <?php
  	session_start();
      if($_SESSION['UserID'] == "")
      {
        echo "<body onload=\"window.alert('กรุณาเข้าสู่ระบบ');return history.go(-1)\">";
          exit();
      }
  
      if($_SESSION['Status'] != "USER" and $_SESSION['Status'] !="ADMIN")
      {
          echo "This page for User only!";
          exit();
      }

  $serverName = "localhost";
  $userName = "root";
  $userPassword = "";
  $dbName = "kcf";
  

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon, "utf8");
  $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
  <body>
	<div class="container-fluid">
		
		<div class="top1"></div>
		<img src="img/logo.png" height="100px" class="logo">
		
		<div class="top2">
        <a href="editprofile.php"><font style="color: white;"><p style="float: left;margin-left: 10px; margin-top: 9px;"><?php echo $objResult["email"];?></p></font></a>
			<a href="logout.php"><img src="img/logout.jpg" height="31px" style="float: right;margin-right: 20px; margin-top: 3px;"></a>
					</div>
                    <ul>
		  <li><a class="active" href="index-1_admin.php">หน้าหลัก</a></li>
		  <li><a href="kcfshopee.php">จัดการสินค้า</a></li>
		  <li><a href="user.php">จัดการ Users</a></li>
		  <li><a href="order.php">จัดการ Orders</a></li>
		  <li><a href="payment.php">ตรวจสอบการโอนเงิน</a></li>
		  <li><a href="addproduct.php">เพิ่มสินค้า</a></li>
		  <li><a target="_blank" href="/kcf/index-2.php">แสดงหน้าตัวอย่าง</a></li>
        </ul><br>	
        <?php
  $orderID = null;

if(isset($_GET["orderID"]))
{
  $orderID = $_GET["orderID"];
}
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "kcf";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($objCon, "utf8");
$strSQL = "SELECT * FROM orders WHERE orderID = '".$orderID."' ";
$objQuery = mysqli_query($objCon,$strSQL);

?>
     <?php
while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
{
?>
  
		<div class="mainmenu">
			<p>แก้ไขรายละเอียดของ Order</p>
			<hr>
		</div>
		    <form class="form-horizontal" action="save_view_order_admin.php" method="post">
		  <div class="form-group">
			<label class="col-sm-3 control-label">OrderID</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="orderID" name="orderID" value="<?=$objResult["orderID"];?>"readonly>
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">OrderDate</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="orderDate" name="orderDate" value="<?=$objResult["orderDate"];?>"readonly>
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">ชื่อ</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="name" name="name" value="<?=$objResult["name"];?>">
			</div>
		  </div>
          <div class="form-group">
			<label class="col-sm-3 control-label">นามสกุล</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="lastname" name="lastname" value="<?=$objResult["lastname"];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">ที่อยู่</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="address" name="address" value="<?=$objResult["address"];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">ตำบล</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="district" name="district" value="<?=$objResult["district"];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">อำเภอ</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="amphur" name="amphur" value="<?=$objResult["amphur"];?>">
			</div>
		  </div>
          <div class="form-group">
			<label class="col-sm-3 control-label">จังหวัด</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="province" name="province" value="<?=$objResult["province"];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">รหัสไปรษณีย์</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="zipcode" name="zipcode" value="<?=$objResult["zipcode"];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="tel" name="tel" value="<?=$objResult["tel"];?>">
			</div>
		  </div>
          <div class="form-group">
			<label class="col-sm-3 control-label">Status</label>
			<div class="col-sm-2">
			<select name="status" id="status" class="form-control">
            <option><?=$objResult["status"];?></option>
   			<option value="ชำระเงินแล้ว">ชำระเงินแล้ว</option>
            <option value="ยังไม่ได้ชำระเงิน">ยังไม่ได้ชำระเงิน</option>
            </select>
            </div>
            </div>
			<div class="form-group">
			<label class="col-sm-3 control-label">เลขพัสดุ</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="track" name="track" value="<?=$objResult["track"];?>" >
			</div>
		  </div>
            <div class="form-group">
			<label class="col-sm-3 control-label">UserID</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="UserID" name="UserID" value="<?=$objResult["UserID"];?>"readonly>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-3 col-sm-4 col-sm-offset-3">
			  <button type="submit" class="btn btn-success" onclick="return confirm('ยืนยันการบันทึกข้อมูล ?')">บันทึก</button>
			</div>
		  </div>
		</form>		
<?php
}
?>
        
	
		<form name="George">
	    <hr style="height: 4px;color: #a5c63b; background-color: #a5c63b;">
    </form>
<hr>
<div class="col-md-6 col-md-offset-0">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2474.002951648099!2d100.17558550590283!3d14.022132259580285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a8d2cc83d503ccb!2sKasemchaifood%20Co.%2C%20Ltd.!5e0!3m2!1sth!2sth!4v1583483263979!5m2!1sth!2sth" width="700" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
		<div class="col-md-2 col-md-offset-0">
			<p><h3><font color="#67ba44">ศูนย์ดูแลลูกค้า</font></h3></p>
			<hr style="height: 4px;color: #67ba44; background-color: #67ba44;">
        	<p><h4><font color="#a5c63b">Phone Contact</font></h4><h5>Call Center 034-301531-5</h5></p>
			<p><h4><font color="#a5c63b"><a href="#payment_type.html" style="color: #a5c63b;">การชำระเงิน</a></font></h4></p>
			<p><h4><font color="#a5c63b"><a href="#howto-buy.html" style="color: #a5c63b;">การสั่งซื้อสินค้า</a></font></h4></p>
			<p><h4><font color="#a5c63b"><a href="#delivery.html" style="color: #a5c63b;">การส่งสินค้า</a></font></h4></p>
		
	</div>
		<div class="col-md-2 col-md-offset-1">
			<p><h3><font color="#67ba44">เกี่ยวกับเรา</font></h3></p>
			<hr style="height: 4px;color: #67ba44; background-color: #67ba44;">
			<p><h4><font color="#a5c63b">FACEBOOK & LINE</font></h4></p>
			<a target="_blank" href="https://www.facebook.com/FanPageKCF/"><img src="img/facebook.png" class="img-responsive"></a>
			<a href="javascript:void(0)"><img src="img/app3.png" class="img-responsive" data-toggle="modal" data-target="#myModal3"></a>
		</div>
	<div class="footer">
		<p align="center"><font color="white">www.kcf.co.th Copyright 2020 All right reserved</font></p>
	</div>


</html>