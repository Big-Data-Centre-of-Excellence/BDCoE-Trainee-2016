<!DOCTYPE html>
<html>
	<head>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<link rel='stylesheet' type='text/css' href='admin.css'/>
		<title> ADMIN </title>
		<style>
			#menu ul li
			{
				list-style : none;
				float : left;
				margin-top : 49px;
				margin-left : 140px;
				color : purple;
				font-style : comic sans ms;
			}
			#c
			{
				border : 2px solid purple;
				border-bottom : 2px solid white;
				padding : 10px;
				text-shadow : 1px 1px 1px purple;
			}
			#b,#a,#d,#e
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
			th,td
			{
				text-align : center;
			}
			table,th,td
			{
				border : 2px solid purple;
				border-collapse : collapse;
				padding : 10px;
			}
			th
			{
				font-size : 20px;
				color : black;
				text-shadow : 1px 1px 1px purple;
			}
			#v
			{
				height : 1500px;
				width  : 40px;
				float : left;
				background-color : black;
			}
			#ad
			{
				height : 800px;
				width : 1100px;
				margin-top : 50px;
				padding : 10px;
				border : 2px solid purple;
				border-radius : 50px;
				text-align : center;
				color : purple;
				text-shadow : 2px 2px 2px #000;
				font-size : 20px;
				box-shadow : 5px 5px 5px #000;
			}
			#l
			{
				border-bottom : 2px solid purple;	
				margin-top : 10px;
				width : 1100px;
				float : center;
				box-shadow : 5px 5px 5px #000;
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
					<li><div id='c'><a href='#'> Add Admin</a></div> </li>
					<li><div id='d'><a href='workshop.php'> Workshops </a></div></li>
					<li><div id='e'> <a href='logout.php'> Logout </a></div> </li>
				</ul>
			</div>
			</div>
			</br></br></br></br>
		 </div>
		 
		 <div id='ad'>
				ADDING ADMINS
				<div id='l'> </div>
				<?php
					$query = "SELECT type FROM admin WHERE id='$user_id'";
					$query_run = mysql_query($query);
					$type = mysql_result($query_run,0,'type');
					if($type=='M')
							include 'adform.php';
					else
						echo "</br></br><div style='text-shadow : 0px 0px 0px ; color : black;'>You are not Authorized For this...</br> Please ask any Master Admin</div>";
				?>
		 </div>

	</body>
</html>