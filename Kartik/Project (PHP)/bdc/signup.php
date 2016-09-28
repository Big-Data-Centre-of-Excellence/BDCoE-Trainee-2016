<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css.css'/>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<style>
			.h
			{
				border : 2px solid DodgerBlue;
				border-radius : 50px;
			}
			#styl 
			{
			background : DodgerBlue;
			width : 500px;
			height : 900px;
			box-shadow :5px 5px 5px  rgba(0,0,0,.5);
			margin : 2px ;
			border : 2px solid white;
			border-radius : 20px;
			text-align : center;
			line-height : 50px;
			margin-top : 30px;
			margin-right : 150px;
			float : right;
			}	
			#styl input[type="text"]
			{
				border-radius : 20px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				width : 250px;
			}
			#styl input[type="email"]
			{	
				border-radius : 20px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				width : 250px;	
			}
			#styl input[type="password"]	
			{
				border-radius : 20px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				width : 250px;
			}
			#styl input[type="number"]	
			{
				border-radius : 20px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				width : 250px;
			}	
			#styl input[type="submit"]
			{
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid white;
			}
			#styl input[type="submit"]:hover
			{
				background : gray;
			}
			#photo
			{
				margin-left : 100px;
				margin-top : 200px;
				height : 250px;
				width : 500px;
				-webkit-transform : rotate(-20deg);
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
					<li><div id="g"> <a href="signin.php"> <img src="li.png" width="15px" height="15px"/>LOGIN</a></div></li>
					<li> <a class="h" href="#"> <img src="su.png" width="15px" height="15px"/>SIGN UP</a></li>
				</ul>	
		</b>		
		</div>
		</br></br></br></br>
		</br>	
		<h1 style="font-family:comic sans ms; font-size : 50px; " align=" center" ><u><b> Register </b></u></h1>
	<form action="sup.php" method="post">
	<img id="photo" src="signup.jpg">
		<div id="styl">
		</br>
		<b><i>Enter Your First Name:</br>
			<input type="text" name="userfname" placeholder="First Name...">
			</br>Enter Your Last Name:</br>
			<input type="text" name="userlname" placeholder="Last Name...">
			</br>Enter your Email Id:</br>
			<input type="email" name="email" placeholder="Your EmailId...">
			</br>Enter your Password:</br>
			<input type="password" name="password" placeholder="Your Password...">
			</br>
			Please Type the text Shown :</br>
			<input type='text' name='capcha' placeholder='Text...'>
			</br>
			<?php
				session_start();
				$_SESSION['secure'] = rand(100000,9999999);
			?>
			<img src='capcha.php' />
			</br>
			</br>
			<input type="submit" value="Submit">
			</br>
			Already Registered :<a href="signin.php"> Sign in </a>
			</i></b>
		</div>
	</form>
	</body>
</html>