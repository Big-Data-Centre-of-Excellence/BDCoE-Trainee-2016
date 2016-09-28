<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="prof.css"/>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<title> BDCOE | WORKSHOPS </title>
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
			#inb
			{
				height : 600px;
				width : 800px;
				border : 2px solid DodgerBlue;
				overflow : scroll;
			}
			embed
			{
				margin-top : 30px;
				float : left;
				margin-left : 250px;
			}
			#inb img
			{
				margin-top : 30px;
				float : left;
				margin-left : 250px;
			}
			#inb a
			{
				text-decoration : none;
				color : DodgerBlue;
				text-shadow : 1px 1px 1px black;
				border : 2px solid DodgerBlue;
				padding : 5px;
				border-radius : 10px;
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
				$query = "UPDATE profile SET id='$user_id' WHERE username='$user_name'";
				$conn = mysqli_connect("localhost","root","","bdcoe");
				mysqli_query($conn,$query);
			}
		?>
		</br>
		</br>
		</br>
				<div id='box'>
				<div id='under'>
				<div id='me'>
						<ul id='tabs'>
						<li> <a href='prof.php'> Profile </a></li>
						<li> <a id="onlink" href='#'> Workshops </a></li>
						<li> <a href='settings.php'> Settings </a></li>
						<li> <a href='confusions.php'> Confusions?? </a></li>
						<li> <a href='logout.php'> Logout </a></li>
					</ul>
				</div>
				</div>
				</br>
				</br>
				<div id='inb'> 
					<?php
						$query = "SELECT * FROM workshop WHERE id='$user_id'";
						$res = mysql_query($query);
						if(mysql_num_rows($res)!=0)
						{
							while($row = mysql_fetch_array($res))
							{
								$type = $row['type'];
								$name = $row['name'];
								if($type=='application/pdf')
								{
//									echo 'ok';
									$object = 'certi/'.$name;
							//		echo $object;
									echo "<embed src='".$object."' width='300px' height='300px'/>";
									echo "</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br><a href='".$object."' target='_blank'> Download </a>";
									echo "</br>";
								}
								else 
								{
									$type = $row['type'];
									$name = $row['name'];
									if($type=='image/jpeg')
									{
	//									echo 'ok';
										$object = 'certi/'.$name;
								//		echo $object;
										echo "<img src='".$object."' width='300px' height='300px'/>";
										echo "</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br><a href='".$object."' target='_blank'> Download </a>";
										echo "</br>";
									}
								}
							}
						}
						else
						{
							echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px DodgerBlue;margin-top : 50px;'><u>THERE ARE CURRENTLY NO CERTIFICATES TO SHOW...</u></center>";
						}
					?>
				</div>
		</div>
		</br>
		</div>
	</body>
</html>