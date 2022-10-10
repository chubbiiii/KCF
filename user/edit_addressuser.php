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
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
<link rel="stylesheet" href="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
<script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

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
		  <li><a class="active" href="index-1.php">หน้าหลัก</a></li>
		  <li><a href="kcfshopee.php?page=1">สินค้า</a></li>
          <li><a target="_blank" href="https://www.kcf.co.th">เว็บไซต์หลัก KCF</a></li>
          <li><a href="show.php">ตะกร้าสินค้า</a></li>
          <li><a href="payment1.php">ชำระเงิน</a></li>
		</ul>
        <br>
        <div class="mainmenu">
	<center><font style="font-size: 28px;color: black;">ที่อยู่จัดส่งสินค้า</font></center>
			<hr>

<form class="form-horizontal" action="update_editaddressuser.php" method="post">
<div class="container" style="width:600px;">

<?php
 $strnumber = null;

 if(isset($_GET["number"]))
 {
     $strnumber = $_GET["number"];
 }
$serverName = "localhost";
  $userName = "root";
  $userPassword = "";
  $dbName = "kcf";
  

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon, "utf8");
  $strSQL = "SELECT * FROM addressuser WHERE number = '".$strnumber."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<tr>
        <td width="100" class="text-right">
	  		Number
        </td>
        <td class="text-left">
            <input name="number" id="number" class="form-control" value="<?php echo $objResult["number"];?>"readonly>
        </td>        
    </tr>
<tr>
        <td width="100" class="text-right">
	  		UserID
        </td>
        <td class="text-left">
            <input name="UserID" id="UserID" class="form-control" value="<?php echo $objResult["UserID"];?>"readonly>
        </td>        
    </tr>
    <tr>
        <td width="100" class="text-right">
            ชื่อ
        </td>
        <td class="text-left">
            <input name="name" id="name" class="form-control" value="<?php echo $objResult["name"];?>"readonly>
        </td>        
    </tr>
    <tr>
	<td width="100" class="text-right">
	  		นามสกุล
        </td>
        <td class="text-left">
            <input name="lastname" id="lastname" class="form-control" value="<?php echo $objResult["lastname"];?>"readonly>
        </td>        
    </tr>
    <tr>
	<td width="100" class="text-right">
	  		อีเมล์
        </td>
        <td class="text-left">
            <input name="email" id="email" class="form-control" value="<?php echo $objResult["email"];?>"readonly>
        </td>        
    </tr>
    <tr>
	<td width="100" class="text-right">
	  		LINE ID
        </td>
        <td class="text-left">
            <input name="lineid" id="lineid" class="form-control" value="<?php echo $objResult["LINE_ID"];?>"readonly>
        </td>        
    </tr>
    <tr>
        <td class="text-right">
            ตำบล/แขวง
        </td>
        <td class="text-left">
        <input type="text" id="district" name="district" class="form-control" value="<?php echo $objResult["district"];?>">
        </td>        
    </tr> 
    <tr>
        <td class="text-right">
            อำเภอ/เขต
        </td>
        <td class="text-left">
        <input type="text" id="amphoe" name="amphoe" class="form-control" value="<?php echo $objResult["amphur"];?>">
        </td>        
    </tr>
    <tr>
        <td width="100" class="text-right">
            จังหวัด
        </td>
        <td class="text-left">
        <input type="text" id="province" name="province" class="form-control" value="<?php echo $objResult["province"];?>">
        </td>        
    </tr>
    <tr>
        <td class="text-right">
            รหัสไปรษณีย์
        </td>
        <td class="text-left">
        <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo $objResult["zipcode"];?>">
        </td>        
    </tr>
    <tr>
        <td class="text-right">
            เบอร์โทรศัพท์
        </td>
        <td class="text-left">
            <input name="tel" id="tel" class="form-control" value="<?php echo $objResult["tel"];?>">
                
            </select>
        </td>        
    </tr>
    <tr>
        <td class="text-right">
            ที่อยู่เลขที่
        </td>
        <td class="text-left">
            <textarea name="address" id="address" class="form-control"><?php echo $objResult["address"];?></textarea>
        </td>        
    </tr>
    <tr>
        <td class="text-right">
            จุดสังเกต
        </td>
        <td class="text-left">
            <textarea name="address1" id="address1" class="form-control" ><?php echo $objResult["address1"];?></textarea>
        </td>        
    </tr>
    <br></br>
	<div class="form-group">
			<div class="text-center">
			  <button type="submit" class="btn btn-success">บันทึก</button>
	</div>
</div>             
</form>
</div>
</div>

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

    <script type="text/javascript">
$.Thailand({
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
});</script>

</body>
</html>