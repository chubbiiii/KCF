<?php
	session_start();
	session_destroy();
	echo "<script language=\"JavaScript\">";
	echo "alert('ออกจากระบบเรียบร้อย');window.location='/kcf/index-2.php';";
	echo "</script>";
?>