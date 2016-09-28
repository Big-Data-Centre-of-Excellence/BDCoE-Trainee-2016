<!DOCTYPE html>
<html>
	<head>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<link rel='stylesheet' type='text/css' href='admin.css'/>
		<title> Admin | HOME </title>
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
			#b
			{
				border : 2px solid purple;
				border-bottom : 2px solid white;
				padding : 10px;
				text-shadow : 1px 1px 1px purple;
			}
			#a,#c,#d,#e
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
			#v
			{
				height : 1300px;
			}
			#chat
			{
				margin-top : 50px;
				height : 500px;
				width : 1150px;
				border : 2px solid purple;
				border-radius : 50px;
				text-shadow : 1px 1px 1px purple;
			}
			#chat input[type="submit"]
			{
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid purple;
			}
			#chat input[type="submit"]:hover
			{
				background : gray;
			}
			#chat select
			{
				margin-top : 50px;
				height : 50px;
				width : 200px;
				border : 2px solid purple;
				font-family : comic sans ms;
				font-size : 20px;
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
					<li><div id='b'><a href='#'> Questions</a></div> </li>
					<li><div id='c'><a href='addmin.php'> Add Admin</a></div> </li>
					<li><div id='d'><a href='workshop.php'> Workshops </a></div></li>
					<li><div id='e'> <a href='logout.php'> Logout </a></div> </li>
				</ul>
			</div>
			</div>
			</br></br></br></br>
		 </div>
			</br></br> 
			
			<div id='chat'>
			</br></br>
				Please Select User For Sending Messages
				<form action='chatp.php' id='ch' method='post'>
					<select form='ch' name='usr'>
					<?php
						$query =  "SELECT * FROM registration";
						$res = mysql_query($query);
						echo mysql_num_rows($res);
						 if(mysql_num_rows($res)!=0)
						 {
				//			 <option value="CS"> CS </option>
							while($row = mysql_fetch_array($res))
							{
								echo "<option value='".$row['id']."' >".$row['fname']."(".$row['id'].")</option>";
							}
						 }
					?>
					</select></br></br>
					<input type='submit' value='Chat....'/>
				</form>
				
				<?php
					include 'search.php';
				?>
				
			</div>
			
	</body>
</html>