<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KCFShopee</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystylee.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.bootstrap-growl.js"></script>
	<LINK REL="SHORTCUT ICON" HREF="img/favicon.png">
  </head>


<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "kcf";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
    echo $objCon->connect_error;
    exit();
}
$strSQL = "SELECT * FROM product WHERE category='producteggduckts'";
mysqli_set_charset($objCon, "utf8");
$objQuery = mysqli_query($objCon,$strSQL);
if(!$objQuery)
{
	echo $objCon->error;
	exit();
}
?>


<body>
<div class="container-fluid">
	  
	  <div class="top1"></div>
	  <img src="img/logo.png" height="100px" class="logo">
	  
	  	<div class="top2">
		  <a href="login.php"><img src="img/login_but.jpg" height="31px" style="float: right;margin-right: 40px; margin-bottom: 0px;"></a>
		  <a href="register.php"><img src="img/regis_but.jpg" height="31px" style="float: right;margin-right: 20px; margin-bottom: 0px;"></a>
		</div>
	  <ul>
		<li><a class="active" href="index-2.php">หน้าหลัก</a></li>
		<li><a href="kcfshopee.php?page=1">สินค้า</a></li>
		<li><a target="_blank" href="https://www.kcf.co.th">เว็บไซต์หลัก KCF</a></li>
	  </ul>	  
	  <p class="breadcrumb">หน้าหลัก > <font color="#000000">ไข่เป็ดแปรรูป อัพเดตวันที่ "<?=date('d-m-Y')?>"</font></p>
	  <hr>
	  <div class="row">
			<div class="col-sm-3">
				<div class="row">
				
					<div class="col-sm-10 col-sm-offset-1">
						<center><p><h4><font color="#a5c63b">หมวดหมู่ : ไข่เป็ดแปรรูป</font></h4></p></center>
						<hr style="height: 4px;color: #a5c63b; background-color: #a5c63b;">
						
						<div class="bs-example" data-example-id="vertical-button-group">
							<div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;"> 
								<a class="btn btn-success" href="kcfshopee.php?page=1"role="button">สินค้าโปรโมชั่น</a>
						        <a class="btn btn-success" href="productegg1.php?page=1&amp;cat=01&amp;cn=ไข่ไก่" role="button">ไข่ไก่</a>
                                <a class="btn btn-success" href="productegg1ts.php?page=1&amp;cat=02&amp;cn=ไข่ไก่แปรรูป" role="button">ไข่ไก่แปรรูป</a>
                                <a class="btn btn-success" href="producteggduck.php?page=1&amp;cat=03&amp;cn=ไข่เป็ด" role="button">ไข่เป็ด</a>
                                <a class="btn btn-success" href="producteggduckts.php?page=1&amp;cat=04&amp;cn=ไข่เป็ดแปรรูป" role="button">ไข่เป็ดแปรรูป</a>
                                <a class="btn btn-success" href="productchikents.php?page=1&amp;cat=05&amp;cn=เนื้อไก่แปรรูป" role="button">เนื้อไก่แปรรูป</a>
								<a class="btn btn-success" href="productquail.php?page=1&amp;cat=06&amp;cn=ไน่นกกระทา" role="button">ไข่นกกระทา</a>
								<br>
								<center><h4>เช็คสถานะสินค้าได้ที่นี่</h4></center>
								<br>
								<a href="#ems"><img src='img/thailandpost.png' width="100%"></a>
								<br></br>
								<a href="#kerry"><img src='img/kerry.png' width="100%"></a>
						    </div> 
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="row">
				  <div class="col-lg-8 col-sm-offset-4">
					<form action="kcf1/product.php?page=1" method="get">
						<div class="input-group">
							
							</span>
						</div><!-- /input-group -->
					</form>
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
                <br>		
  					<?php
  						while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
  					{
 					?>
					 <table style="width:100%">
					<tr>
							<th width="400px"><center><a target="" href="#detailproduct.php?productID=<?php echo $objResult["productID"];?>"><img src="admin/backoffice/img_pro/all/<?php echo $objResult["picture"];?>" class='img-responsive' style='min-height:150px;height:150px;'></a></center>
						
							<th width="700px"><center><h4 style="height:20px;"><?php echo  $objResult["productName"];?></h4></center>
							<div class="caption">
							<th><center><h4 style="height:20px;">ราคา <?php echo  $objResult["price"];?></h4></center>
							<th><center><div class="btn-group" style="height:50px;"><a target="" href="login.php?productID=<?php echo $objResult["productID"];?>"><img src='img/cart.png' width="300px"></div></a></center>
						</tr>
						</table>
						<hr>
					<?php
  					}
					?>
					</div>
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


<?php
mysqli_close($objCon);
?>

</body>
</html>