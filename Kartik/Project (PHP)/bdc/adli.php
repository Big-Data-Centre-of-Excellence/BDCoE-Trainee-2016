<!DOCTYPE html>
<html>
	<head>
	<link rel='icon' type='image/jpg' href='bdc.jpg'/>
	<head>
	<body>
	  <?php
		include 'conn.php';
		include 'sesi.php';
		if(login())
		{
			$user_id = $_SESSION['user_id'];
			$query = "SELECT type FROM admin WHERE id='$user_id'";
			$query_run = mysql_query($query);
			$user_type = mysql_result($query_run,0,'type');
			echo "</br></br></br><center style='font-family : comic sans ms'><b><i> WELCOME , $user_type</center><b></i>";
			echo "<center style='font-family : comic sans ms; color : white;'><b><i>You are logged in with ID = $user_id</cenetr></b></u></i>";
	//		if($user_type=='M')
			header('Location:admin.php');
		//	else
	//		header('Location:')
		}
		else
		{	
			include 'adlip.php';
		}
	  ?>
	</body>
</html>