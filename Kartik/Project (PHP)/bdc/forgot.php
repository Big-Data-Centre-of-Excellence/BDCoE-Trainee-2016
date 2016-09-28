<!DOCTYPE html>
<html>
	<head>
	
		<style>
			body div
			{
				margin-top : 200px;;
				margin-left : 450px;;
				height : 100px;
				width : 280px;
				border : 2px solid DodgerBlue;
				padding : 60px;	
			}
			div form input[type="email"]
			{	
				border-radius : 20px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				width : 250px;	
			}
			body div form input[type="submit"]
			{
				margin-left : 35px;
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid DodgerBlue;
			}
			body div form input[type="submit"]:hover
			{
				background : gray;
			}
		</style>
	
	</head>
	<body>
		<div>
			<form action='forgotp.php' method='get'>
				<input type='email' name='email' placeholder='Your Email ID...'/>
				</br></br>
				<input type='submit' name='suubmit'>
			</form>
		</div>
	</body>
</html>