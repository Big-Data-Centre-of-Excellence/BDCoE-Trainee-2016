<?php
	ob_start();
	session_start();
	$current_file = $_SERVER['SCRIPT_NAME'];
	function login()
	{	
		if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
		{
			return true;
		}
		else
		{
	//		echo 'jkj';  
			return false;
		}
	}
?>