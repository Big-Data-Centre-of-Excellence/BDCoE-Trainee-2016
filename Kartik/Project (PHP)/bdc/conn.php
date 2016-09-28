<?php
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='';
	$mysql_data='bdcoe';
	if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_data))
	{
		die ("SOME ERROR OCCURREDN IN CONNECTING DATABASE......");
	}	
?>