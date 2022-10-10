<?php
	ob_start();
	session_start();
	unset($_SESSION["intLine"]);

	header("location:show.php");
?>