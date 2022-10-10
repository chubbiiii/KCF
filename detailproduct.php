<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>KCF - รายละเอียดสินค้า</title>
	
	<!-- favicon -->
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
    <link rel="stylesheet" type="text/css" href="css/template.css" />
	<link href="fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen" />
	
	
	
</head>
<body>
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "kcf";

   $productID = null;

   if(isset($_GET["productID"]))
   {
	   $productID = $_GET["productID"];
   }
  
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "kcf";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   mysqli_set_charset($conn, "utf8");
   $sql = "SELECT * FROM product WHERE productID = '".$productID."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!-- Header
    ================================================== -->
	<header id="nino-header">
		<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand">
						<div class="logo"></div>
                    	</a>	
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#nino-header">หน้าแรก <span class="sr-only">(current)</span></a></li>
							</ul>
							<div class="logout"><a href="\kcf\kcfshopeex.php">กลับ</a></div>
						</div><!-- /.navbar-collapse -->
					</div>
				</div><!-- /.container-fluid -->
            </nav>
            <section id="nino-slider" class="carousel slide container" data-ride="carousel">
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">เคซีเอฟ เกษมชัยฟู๊ด</span>
						</h2>
					</div>
					<div class="item">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">เพราะทุกคำ คือ ความใส่ใจ</span>
						</h2>
					</div>
					<div class="item">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">ไข่ไก่สด จากฟาร์ม</span>
						</h2>
					</div>
					<div class="item">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">จำหน่ายสินค้าอื่นๆมากมาย</span>
						</h2>
					</div>
                </div>
                
                </section>
		</div>
    </header><!--/#header-->
<br><center><td><h1><input type="hidden" name="productName" value="<?php echo $result["productName"];?>"><?php echo $result["productName"];?></h1></td></center>
<br>
<center><table width="1200" border="0"></center>
<tr>
    <td width="700"><center><a target="" href="detailproduct.php?productID=<?php echo $result["productID"];?>"><img src="images/product/<?php echo $result["picture"];?>"></a></center></td>
	<td><h1><small>ราคา </small><input type="hidden" name="price" value="<?php echo $result["price"];?>"><?php echo $result["price"];?><small>฿</small></h1>
	<br><input type="hidden" name="detailproduct" value="<?php echo $result["detailproduct"];?>"><?php echo $result["detailproduct"];?></br>
	<br><div class="btn-group"><a target="_blank" href="order.php?productID=<?php echo $result["productID"];?>"><button class="button">หยิบใส่ตะกร้า</button></div></a></br></td>
  </tr>
</table>
<br></br>
 <!-- Footer
    ================================================== -->
    <footer id="footer">
			<div class="container">
				<div class="row">
				</div>
				<div class="nino-copyright">Copyright &copy; 2019 <a target="_blank" href="http://www.kcf.co.th/" title="kcf.co.th - Kasemchai Food">kcf.co.th</a><br/></div>
			</div>
		</footer><!--/#footer-->




     <!-- javascript -->
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/unslider-min.js"></script>
	<script type="text/javascript" src="js/template.js"></script>
	<script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
	<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
var name = "#float_banner"; 
var locateY= null;  
$(function(){
    locateY=parseInt($(name).css("top").replace("px",""));
    $(window).scroll(function(){
        offset=locateY+$(document).scrollTop()+"px";
        $(name).animate({top:offset},{duration:40,queue:false});
    });
});
</script>
<style type="text/css">
div#float_banner{
    position:absolute;
    width:100px;
    display:block;
	top:150px;
	right:0px;
    height:0px;
}
</style>
<div id="float_banner">
<a href="show.php" target="">
<img src="images/our-work/kcfshopee.jpg" alt="">
</a>
</div>
    <script>
$(document).ready(function () {

    $('#memberModal').modal('show');
    

});
</script>
</body>
</html>