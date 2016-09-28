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
				margin-left : 150px;
				color : purple;
				font-style : comic sans ms;
			}
			#a
			{
				border : 2px solid purple;
				border-bottom : 2px solid white;
				padding : 10px;
				text-shadow : 1px 1px 1px purple;
			}
			#b,#c,#d,#e,#f
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
					<li><div id='a'><a href='#'> Users</a></div> </li>
					<li><div id='b'><a href='chat.php'> Questions</a></div> </li>
					<li><div id='c'><a href='addmin.php'> Add Admin</a></div> </li>
	<!--				<li><div id='d'><a href='#'> Delete Admin </a></div></li>	-->
					<li><div id='f'><a href='workshop.php'> Workshops </a></div></li>
					<li><div id='e'> <a href='logout.php'> Logout </a></div> </li>
				</ul>
			</div>
			</div>
			</br></br></br></br>
		 </div>
		 
		 <?php
				$query="SELECT * FROM admin WHERE id!='$user_id'";
				$res = mysql_query($query);
				if(mysql_num_rows($res)!=0)
				{
					echo '</br></br>';	
					echo "<center style='font-style:comic sans ms; font-size: 40px; text-shadow: 1px 1px 1px purple;'> ADMINS </center>";
					echo "</br> </br><table style='width : 50%;'>";
					echo '<tr><th> Id</th>';
					echo '<th> Name </th> <th> Email Id</th> <th> Type </th></tr>';
					while($row = mysql_fetch_array($res))
					{	
						echo "<tr>";
						echo '<td>'.$row['id'].'</td>';
						echo '<td>'.$row['name'].'</td>';
						echo '<td>'.$row['email'].'</td>';
						if($row['type']=='M')
							echo '<td>'.'Master'.'</td>';
						else
							echo '<td>'.'Admin'.'</td>';
						echo '</tr>';
					}	
					echo '</table>';
				}
				
				$query="SELECT * FROM registration";
				$res = mysql_query($query);
				if(mysql_num_rows($res)!=0)
				{
					echo '</br></br>';	
					echo "<center style='font-style:comic sans ms; font-size: 40px; text-shadow: 1px 1px 1px purple;'> USERS </center>";
					echo "</br> </br><table style='width : 50%;'>";
					echo '<tr><th> Id</th>';
					echo '<th> First Name </th> <th> Last Name </th> <th> Email Id </th></tr>';
					while($row = mysql_fetch_array($res))
					{	
						echo "<tr>";
						echo '<td>'.$row['id'].'</td>';
						echo '<td>'.$row['fname'].'</td>';
						echo '<td>'.$row['lname'].'</td>';
						echo '<td>'.$row['email'].'</td>';
						echo '</tr>';
					}	
					echo '</table>';
				}
		 ?>
		 
		 
	</body>
</html>