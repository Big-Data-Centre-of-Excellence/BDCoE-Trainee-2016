<!DOCTYPE html>
<html>
	<head>
		<style>
			body form input[type='text'],input[type='password'],input[type='email'],select
			{
				margin-top : 50px;
				height : 50px;
				width : 300px;
				float : center;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border : 2px solid purple;
				border-radius : 5px;
			}
			body form input[type="submit"]
			{
				margin-top : 50px;
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid purple;
			}
			body form input[type="submit"]:hover
			{
				background : gray;
			}
			body form 
			{
				text-shadow : 0px 0px 0px;
			}
		</style>
	</head>
	<body>
		<form id='addmin' action='adformp.php' method='post'>
			Enter Your Name: <input type='text' name='name' placeholder='Name...'></br></br>
			Password :<input type='password' name='password' placeholder='Password...'></br></br>
			Email Id :<input type='email' name='email' placeholder='Email Id...'></br></br>
			Type : <select form='addmin' name='type'>
				<option value="M">Master</option>
				<option value="A">Admin</option>
			</select></br></br>
			<input type='submit' name='submit' value='Submit'>
		</form>
	</body>
</html>