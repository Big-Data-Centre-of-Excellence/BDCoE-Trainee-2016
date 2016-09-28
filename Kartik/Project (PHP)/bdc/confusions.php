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
			#oo
			{
				height : 350px;
				width : 700px;
				border : 3px solid DodgerBlue;
				overflow : scroll;
				text-align : center;
				color : DodgerBlue;
				text-shadow : 1px 1px 1px #000;
			}
			#aa
			{
				margin-top : 80px;
				height : 350px;
				width : 700px;
				border : 3px solid DodgerBlue;
				margin-bottom : 10px;
			}
			#box
			{
				border : 5px solid DodgerBlue;
				width : 1000px;
				height : 1000px;
				background-color : white;
				box-shadow : 5px 5px 5px #000;
			}
			#sb
			{
				background-image : url("b2.jpg");
				height : 1300px;
				width : 1350px;
			}
			#l
			{
				width : 683px;
				border-bottom : 3px solid DodgerBlue;
			}
			#aa input[type="submit"]
			{
				margin-top : 5px;
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid DodgerBlue;
			}
			#aa input[type="submit"]:hover
			{
				background : gray;
			}
			#ques
			{
				float : right;
				text-align : right;
				border : 2px solid DodgerBlue;
				background-color : white;
				font-family : comic sans ms;
				color : black;
				padding : 8px;
				margin-right : 10px;
				text-shadow : 0px 0px 0px;
				border-radius : 80px;
			}
			#ans
			{
				margin-top : 5px;
				margin-left : 5px;
				padding : 10px;
				float : left;
				text-align : left;
				background-color : DodgerBlue;
				color : white;
				border-radius : 80px;
			}
		</style>
	</head>
	<body>
	<?php
		require 'style.php';
	?>
		<div id="sb">
		<div id="menu" >
		<b>
				<ul> 	 
					<li><div id="a"> <a href="Home.php"> <img src="home.jpg" width="15px" height="15px"/>HOME</a></div> </li>
					<li><div id="b"> <a href="#"> <img src="settings.png" width="20px" height="15px"/>WHAT WE DO</a></div> </li>
					<li><div id="c"> <a href="#"> <img src="pf.png" width="15px" height="15px"/> PORTFOLIO</a></div> </li>
					<li><div id="d"> <a href="#"> <img src="au.png" width="15px" height="15px"/>ABOUT US</a></div> </li>
					<li><div id="e"> <a href="#"> <img src="news.png" width="15px" height="15px"/>NEWS</a></div></li>
					<li><div id="f"> <a href="#"> <img src="cu.jpg" width="15px" height="15px"/>CONTACT US</a></div></li>
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
		</br>
				<div id='box'>
					<div id='under'>
					<div id='me'>
							<ul id='tabs'>
							<li> <a href='prof.php'> Profile </a></li>
							<li> <a href='work.php'> Workshops </a></li>
							<li> <a href='settings.php'> Settings </a></li>
							<li> <a id="onlink" href='#'> Confusions?? </a></li>
							<li> <a href='logout.php'> Logout </a></li>
							</ul>
					</div>
					</div>
							</br>
							</br>
							</br>
						<div id='oo'>
								CHAT BOX</br>
								<div id='l'> </div>
								<?php
									$i = 0;
									$query="SELECT * FROM chat WHERE id='$user_id'";
									$res = mysql_query($query);
									if(mysql_num_rows($res)!=0)
									{
										while($row = mysql_fetch_array($res))
										{
											$l[$i][0] = $row['question'];
											$l[$i][1] = $row['answer'];
											$i++;
										}
										echo '</br>';
										while($i>0)
										{
											$i--;
											if(!empty($l[$i][1]))
											echo "<div id='ans'>".$l[$i][1]."</div></br></br>";
											if(!empty($l[$i][0]))
											echo "<div id='ques'>".$l[$i][0]."</div></br>";
											echo '</br>';
										}
									}
									?>
						</div>
						<div id='aa'>
							<form action='cp.php' method='post'>
								<textarea name='ques' rows='20' cols='90'> </textarea></br></br>
								<input type='submit' value='Submit'/>
							</form>
						</div>
				</div>
		</div>
		</br>
	</body>
</html>