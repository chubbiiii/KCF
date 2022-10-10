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
	<script language="javaScript">
function Checkemail(str){
      var email=/^([a-zA-Z0-9]+)@([a-zA-Z0-9]+)\.([a-zA-Z0-9]{2,5})$/
     if(!document.getElementById(str).value.match(email)){
           alert('รูปแบบ Email ไม่ถูกต้อง');
           document.getElementById(str).focus();
           return false;
     }
}
</script>
  </head>

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
        <br>
		<div class="mainmenu">
			<p>ลงทะเบียนกับ KCFShopee</p>
			<hr>
		</div>
		    <form class="form-horizontal" action="save_register.php" method="post">
		  <div class="form-group">
			<label class="col-sm-3 control-label">ชื่อ</label>
			<div class="col-sm-4">
			  <input type="username" class="form-control" id="name" name="name" required>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">นามสกุล</label>
			<div class="col-sm-4">
			  <input type="username" class="form-control" id="lastname" name="lastname" required>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
			<div class="col-sm-4">
			  <input type="username" class="form-control" id="tel" name="tel" required>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">อีเมล์</label>
			<div class="col-sm-4">
			  <input type="username" class="form-control" id="email" name="email" onchange="Checkemail('email');">
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">รหัสผ่าน</label>
			<div class="col-sm-4">
			  <input type="password" class="form-control" id="password1" name="password1" pattern=".{6,}" title="กรอกไม่น้อยกว่า 6 ตัว" required>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
			<div class="col-sm-4">
			  <input type="password" class="form-control" id="password2" name="password2" pattern=".{6,}" title="กรอกไม่น้อยกว่า 6 ตัว" required>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">เพศ</label>
			<div class="col-sm-4">
			<select name="sex" id="sex" class="form-control" placeholder="เพศ" required>
   			<option value="หญิง">หญิง</option>
            <option value="ชาย">ชาย</option>
          </select>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">วันเกิด</label>
			<div class="col-sm-1">
			<select name="birthday" id="birthday" class="form-control" required>
   			<option value="1">1</option>
            <option value="2">2</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="5">5</option>
            <option value="6">6</option>
			<option value="7">7</option>
            <option value="8">8</option>
			<option value="9">9</option>
            <option value="10">10</option>
			<option value="11">11</option>
            <option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			</select>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">เดือนเกิด</label>
			<div class="col-sm-1">
			<select name="birthmonth" id="birthmonth" class="form-control" required>
   			<option value="มกราคม">มกราคม</option>
            <option value="กุมภาพันธ์">กุมภาพันธ์</option>
			<option value="มีนาคม">มีนาคม</option>
            <option value="เมษายน">เมษายน</option>
			<option value="พฤษภาคม">พฤษภาคม</option>
            <option value="มิถุนายน">มิถุนายน</option>
			<option value="กรกฎาคม">กรกฎาคม</option>
            <option value="สิงหาคม">สิงหาคม</option>
			<option value="กันยายน">กันยายน</option>
            <option value="ตุลาคม">ตุลาคม</option>
			<option value="พฤศจิกายน">พฤศจิกายน</option>
            <option value="ธันวาคม">ธันวาคม</option>
			</select>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">ปีเกิด</label>
			<div class="col-sm-1">
			<select name="birthyear" id="birthyear" class="form-control" required>
   			<option value="2563">2563</option>
            <option value="2562">2562</option>
			<option value="2561">2561</option>
            <option value="2560">2560</option>
			<option value="2559">2559</option>
            <option value="2558">2558</option>
			<option value="2557">2557</option>
            <option value="2556">2556</option>
			<option value="2555">2555</option>
            <option value="2554">2554</option>
			<option value="2553">2553</option>
            <option value="2552">2552</option>
			<option value="2551">2551</option>
			<option value="2550">2550</option>
			<option value="2549">2549</option>
			<option value="2548">2548</option>
			<option value="2547">2547</option>
			<option value="2546">2546</option>
			<option value="2545">2545</option>
			<option value="2544">2544</option>
			<option value="2543">2543</option>
			<option value="2542">2542</option>
			<option value="2541">2541</option>
			<option value="2540">2540</option>
			<option value="2539">2539</option>
			<option value="2538">2538</option>
			<option value="2537">2537</option>
			<option value="2536">2536</option>
			<option value="2535">2535</option>
			<option value="2534">2534</option>
			<option value="2533">2533</option>
			<option value="2532">2532</option>
			<option value="2531">2531</option>
			<option value="2530">2530</option>
			<option value="2529">2529</option>
			<option value="2528">2528</option>
			<option value="2527">2527</option>
			<option value="2526">2526</option>
			<option value="2525">2525</option>
			<option value="2524">2524</option>
			<option value="2523">2523</option>
			<option value="2522">2522</option>
			<option value="2521">2521</option>
			<option value="2520">2520</option>
			<option value="2519">2519</option>
			<option value="2518">2518</option>
			<option value="2517">2517</option>
			<option value="2516">2516</option>
			<option value="2515">2515</option>
			<option value="2514">2514</option>
			<option value="2513">2513</option>
			<option value="2512">2512</option>
			<option value="2511">2511</option>
			<option value="2510">2510</option>
			</select>
			</div>
			<label class="col-sm-3"><font color="red">* จำเป็นต้องกรอก</font></label>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label">LINE ID</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" id="lineid" name="lineid">
			</div>
			
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-3 col-sm-4 col-sm-offset-3">
			<button type="submit" class="btn btn-success" onclick="return confirm('ยืนยันการสมัครสมาชิกกับ KCFShopee ของเราหรือไม่?')">สมัคร</button>
			</div>
		  </div>
		</form>		
	


  </body>
</html>