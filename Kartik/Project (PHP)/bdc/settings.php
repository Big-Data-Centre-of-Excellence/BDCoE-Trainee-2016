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
			#setedit
			{
				margin-top : 50px;
				width : 800px;
				height : 600px;
				border : 3px solid DodgerBlue;
				border-radius : 50px;
			}
			#eit
			{
				text-decoration : none;
				font-size : 20px;
				color : DodgerBlue;
				text-shadow : 2px 2px 2px #000;
				height : 30px;
				width : 60px;
				line-height : 30px;
				border : 2px solid DodgerBlue;
				display : block;
				border-radius : 5px;
			}
			#setedit img
			{
				padding : 20px;
				height : 300px;
				width : 500px;
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
						<li> <a href='work.php'> Workshops </a></li>
						<li> <a id="onlink" href='#'> Settings </a></li>
						<li> <a href='confusions.php'> Confusions?? </a></li>
						<li> <a href='logout.php'> Logout </a></li>
					</ul>
				</div>
				</div>
				
				<div id='setedit'>
					
					<?php
						$query_new = "SELECT * FROM registration WHERE id='$user_id'";
								$res=mysql_query($query_new);
								if(mysql_num_rows($res)!=0)
								{
									$row = mysql_fetch_array($res);
									$user[0]['fname'] = $row['fname'];
									$user[0]['lname'] = $row['lname'];
									$user[0]['email'] = $row['email'];
								}
								$name = $user[0]['fname'] = $row['fname'];
								//	echo $name;
								$query = "SELECT name FROM dp WHERE id='$user_id'";
								$res = mysql_query($query);
								$dpname = mysql_result($res,0,'name');						
					//			echo $dpname;
								echo "<img src='dp/".$dpname."'/>";
								echo "</br>Id  : $user_id </br>";
								echo "Name : ".$user[0]['fname']." ".$user[0]['lname']."</br>";
								echo "Email Id : ".$user[0]['email']."</br>";
					?>
					</br></br>
					<a id='eit'  href="Edit2.php"> Edit </a>
				</div>
				
				
				</div>
			</br>
			</br>
	</body>