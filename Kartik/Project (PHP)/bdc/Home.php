<!DOCTYPE hmtl>
<html>
	<head>
		<title> BDCOE | HOME </title>
		<link rel='stylesheet' type='text/css' href='css.css'/>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<style>
			#a
			{
				border : 2px solid DodgerBlue;
			}
			#z
			{
				margin-left: 220px;
			}
			#menu ul li ul
			{
				position : absolute;
				display : none;
			}
			#menu ul li:hover > ul
			{
				display : block;
			}
		</style>
	</head>
	<body>
		<div id="first">
			<img src="B.jpg"/>	
		</div>
		<img id="z" src="Text.jpg" height="350px" width="1000px" />
		<div id="menu" >
		<b>
				<ul> 	 
					<li><div id="a"> <a href="#"> <img src="home.jpg" width="15px" height="15px"/>HOME</a></div> </li>
					<li><div id="b"> <a href="#"> <img src="settings.png" width="20px" height="15px"/>WHAT WE DO</a></div> </li>
					<li><div id="c"> <a href="#"> <img src="pf.png" width="15px" height="15px"/> PORTFOLIO</a></div> </li>
					<li><div id="d"> <a href="#"> <img src="au.png" width="15px" height="15px"/>ABOUT US</a></div> </li>
					<li><div id="e"> <a href="#"> <img src="news.png" width="15px" height="15px"/>NEWS</a></div></li>
					<li><div id="f"> <a href="#"> <img src="cu.jpg" width="15px" height="15px"/>CONTACT US</a></div></li>
					<li> <div id="g"><a href="#"><img src="li.png" width="15px" height="15px"/> USER </a></div>
							<ul>
								<li><div id="i"><a href="#"><img src="li.png" width="15px" height="15px"/><a href="signin.php">LOGIN</a></div></li>
								<li><div id="j"><a href="#"><img src="li.png" width="15px" height="15px"/><a href="adli.php">ADMIN </a></div></li>
							</ul>
					</li>
					<li><div id="h"> <a href="signup.php"> <img src="su.png" width="15px" height="15px"/>SIGN UP</a></div></li>
				</ul>	
		</b>		
		</div>
		<?php
		//	include 'deletion.php';
		?>
	</div>
	</body>
</html>