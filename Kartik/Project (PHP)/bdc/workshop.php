<!DOCTYPE html>

<html>

	<head>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<link rel='stylesheet' type='text/css' href='admin.css'/>
		<title> Workshops </title>
		<style>
			#menu ul li
			{
				list-style : none;
				float : left;
				margin-top : 49px;
				margin-left : 150px;
				color : purple;
				font-style : comic sans ms;
			}
			#f
			{
				border : 2px solid purple;
				border-bottom : 2px solid white;
				padding : 10px;
				text-shadow : 1px 1px 1px purple;
			}
			#b,#c,#d,#e,#a
			{
				border : 2px solid purple;
				padding : 10px;
				text-shadow : 1px 1px 1px purple;
			}
			#menu ul li a
			{
				text-decoration : none;
				color : black;
				display : block;
			}
			#down
			{
				border-bottom : 2px solid purple;
				width : 1350px;
			}
			#up
			{
				border-bottom : 2px solid purple;
			}
			#bo
			{
				margin-top : 30px;
				margin-left : 50px;
				height : 900px;
				width : 1200px;
				border  : 2px solid purple;
				text-align : center;
				text-shadow : 1px 1px 1px purple;
				font-family : comic sans ms;
				font-size : 20px;
			}
			#v
			{
				height : 1500px;
				width  : 40px;
				float : left;
				background-color : black;
			}
			#l
			{
				border-bottom : 2px solid purple;
			}
			body form input[type='tel'],body form input[type='text'],body form input[type='email']
			{
				align : center;
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
			body form input[type='file']
			{
				align : center;
				margin-top : 50px;
				height : 50px;
				width : 300px;
				float : center;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border : 2px solid purple;
				padding : 10px;
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
		</style>
	</head>
	
	<body>
	
		<div id='h'> </div>
		<div id='v'> </div>
		<div id="uu">
			<img src="bdc.jpg"/> 
		</div>
		<?php
			include 'conn.php';
			include 'sesi.php';
			$user_id = $_SESSION['user_id'];
			$query = "SELECT name FROM admin WHERE id='$user_id'";
			$query_run = mysql_query($query);
			$user_name = mysql_result($query_run,0,'name');
			echo "</br></br></br><div style='font-family : comic sans ms; margin-left : 590px'><b><i> WELCOME , $user_name</div><b></i>";
			echo "<center style='font-family : comic sans ms; color : black;'><b><i>You are logged in with ID = $user_id</cenetr></b></u></i>";
		?>
		<div id='up'>
		<div id='down'>
			<div id='menu'>
				<ul>
					<li><div id='a'><a href='admin.php'> Users</a></div> </li>
					<li><div id='b'><a href='chat.php'> Questions</a></div> </li>
					<li><div id='c'><a href='addmin.php'> Add Admin</a></div> </li>
	<!--				<li><div id='d'><a href='#'> Delete Admin </a></div></li>		-->
					<li><div id='f'><a href='#'> Workshops </a></div></li>
					<li><div id='e'> <a href='logout.php'> Logout </a></div> </li>
				</ul>
			</div>
			</div>
			</br></br></br></br>
		 </div>
		<div id='bo'>
				Workshop Certificates Updation
			<div id='l'> </div>
			
			<form action='workshopp.php' method='post' enctype='multipart/form-data'>
			
              <input type='tel' name='id' placeholder='User Id...'>               <input type='email' name='email' placeholder='Email Id...'> </br></br>
          <input type='text' name='name' placeholder='Users Name...'>                 <input type='text' name='status' placeholder='Status...'> </br></br>
<input type='text' name='stdate' placeholder='Start Date...'>             <input type='text' name='endate' placeholder='End Date...'> </br></br>
<input type='text' name='workname' placeholder='Workshop Name...'> </br></br>
<input type='file' name='certi'></br></br>
<input type='submit' name='submit' value='Send...'>
			</form>
			
		</div>
		
	</body>

</html>	