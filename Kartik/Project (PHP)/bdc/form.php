<!DOCTYPE html>

<html>
	<head>
		<style>
			#styl 
			{
			background : DodgerBlue;
			width : 500px;
			height : 300px;
			box-shadow :5px 5px 5px  rgba(0,0,0,.5);
			margin : 2px ;
			border : 2px solid white;
			border-radius : 20px;
			text-align : center;
			line-height : 50px;
			margin-top : 30px;
			margin-right : 400px;
			float : right;
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
		</style>
	</head>
	
	<body>
	</br>
	</br>
	<h1 style="font-family : comic sans ms" align="center" ><u><b> LOG IN </b></u></h1>
		<form action="<?php echo $current_file; ?>" method="post">
		<div id="styl">
		</br>
			<input type="email" name="email" placeholder="Email Id...">
			</br>
			<input type="password" name="password" placeholder="Password...">
			</br>
			<input type="submit" value="Submit">
			</br>
			Not Registered??   <a href="signup.php"> Register Here </a></br>
			
<!--			Forgot Password?? <a href="forgot.php"> Forgot Password </a> -->
			</div>
		</form>
		
	</body>
</html>