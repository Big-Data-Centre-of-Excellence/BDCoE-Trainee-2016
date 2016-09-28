<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css.css'/>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<style>
			.g
			{
				border : 2px solid DodgerBlue;
				border-radius : 50px;
			}
		</style>
	</head>
	<?php
			require 'style.php';
	?>
	<body>
		<div id="sub">
		<div id="menu" >
		<b>
				<ul> 	 
					<li><div id="a"> <a href="Home.php"> <img src="home.jpg" width="15px" height="15px"/>HOME</a></div> </li>
					<li><div id="b"> <a href="#"> <img src="settings.png" width="20px" height="15px"/>WHAT WE DO</a></div> </li>
					<li><div id="c"> <a href="#"> <img src="pf.png" width="15px" height="15px"/> PORTFOLIO</a></div> </li>
					<li><div id="d"> <a href="#"> <img src="au.png" width="15px" height="15px"/>ABOUT US</a></div> </li>
					<li><div id="e"> <a href="#"> <img src="news.png" width="15px" height="15px"/>NEWS</a></div></li>
					<li><div id="f"> <a href="#"> <img src="cu.jpg" width="15px" height="15px"/>CONTACT US</a></div></li>
					<li> <a class="g" href="#"> <img src="li.png" width="15px" height="15px"/>LOGIN</a></li>
					<li> <div id="h"><a href="signup.php"> <img src="su.png" width="15px" height="15px"/>SIGN UP</a></div></li>
				</ul>	
		</b>		
		</br>
		</br>
		</div>
		<?php
			require 'conn.php';
			require 'sesi.php';
			if(!login())
			{   
             		include 'formp.php';
			}
			else
			{	
				$user_id = $_SESSION['user_id'];
				$query = "SELECT fname FROM registration WHERE id='$user_id'";
				$query_run = mysql_query($query);
				$user_name = mysql_result($query_run,0,'fname');
				echo "</br></br></br><center style='font-family : comic sans ms'><b><i> WELCOME , $user_name</center><b></i>";
				echo "<center style='font-family : comic sans ms'><b><i>You are logged in with ID = $user_id</cenetr></b></u></i>";
				header('location:prof.php');
			}
		?>
		</div>
		</body>
</html>