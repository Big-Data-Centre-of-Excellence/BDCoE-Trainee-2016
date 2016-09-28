<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="prof.css"/>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<style>
			#me ul li a#onlink
			{
				background-color : white;
				color : DodgerBlue;
				text-shadow : 1px 1px 1px #000;
				border : 2px solid DodgerBlue;
				border-bottom : .5px solid white;
			}
			.g
			{
				border : 2px solid DodgerBlue;
				border-radius : 50px;
			}
			#tabs
			{
				font-family : comic sans ms;
			}
			#edit_menu input[type="text"]
			{
				border-radius : 20px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				width : 250px;
				color : DodgerBlue;
				text-shadow : 1px 1px 1px #000;
			}
			#edit_menu input[type="password"],input[type='file']
			{
				border-radius : 20px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				width : 250px;
				color : DodgerBlue;
				text-shadow : 1px 1px 1px #000;
			}
			#edit_menu input[type="submit"]
			{
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid DodgerBlue;
			}
			#edit_menu input[type="submit"]:hover
			{
				background : gray;
			}
			#line
			{
				border-bottom : 2px solid DodgerBlue;
				width : 1000px;
			}
		</style>
	</head>
			<body>
	<?php
		require 'style.php';
	?>
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
				</ul>	
		</b>		
		</div>
		</br>
		</br>
		
		<?php
			require 'conn.php';
			require 'sesi.php';
			
			if(login())
			{
				$user_id = $_SESSION['user_id'];
				$query = "SELECT fname FROM registration WHERE id='$user_id'";
				$query_run = mysql_query($query);
				$user_name = mysql_result($query_run,0,'fname');
				echo "</br></br></br><center style='font-family : comic sans ms'><b><i> WELCOME , $user_name</center><b></i>";
				echo "<center style='font-family : comic sans ms'><b><i>You are logged in with ID = $user_id</cenetr></b></u></i>";
			
			}
			else
			{
				include 'formp.php';
			}
		?>
		</br>
		</br>
				<div id='box'>
				<div id='under'>
				<div id='me'>
						<ul id='tabs'>
						<li> <a href='prof.php'> Profile </a></li>
						<li> <a href='#'> Workshops </a></li>
						<li> <a id="onlink" href='#'> Settings </a></li>
						<li> <a href='#'> Confusions?? </a></li>
						<li> <a href='logout.php'> Logout </a></li>
					</ul>
				</div>
				</div>
					</br></br>
		<div id='line'> </div>		
		<form action="edit2p.php" method="post" enctype='multipart/form-data'>
		<div id="edit_menu">
		</br>
		<b><i>Enter Your First Name:</br></br>
			<input type="text" name="userfname" placeholder="First Name...">
			</br></br>Enter Your Last Name:</br></br>
			<input type="text" name="userlname" placeholder="Last Name...">
			</br></br>Enter your Password:</br></br>
			<input type="password" name="password" placeholder="Your Password...">
			</br></br></br>
			Place Your Dp:
			<input type='file' name='dp'></br></br>
			<input type="submit" value="Submit">
			</i></b>
		</div>
	</form>
				
				
				</div>
			</br>
			</br>
	</body>