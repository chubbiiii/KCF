<?php
	session_start();
	session_destroy();
	header("location:index-2.php");
?>