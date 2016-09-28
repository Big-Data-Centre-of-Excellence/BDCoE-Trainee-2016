<?php
	require 'sesi.php';
	session_destroy();
	echo "$http_referer";
	header ("Location:Home.php");
?>