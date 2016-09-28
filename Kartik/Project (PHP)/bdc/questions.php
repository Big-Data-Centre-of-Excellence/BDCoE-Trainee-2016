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
			#chat
			{
				height : 400px; 
				width  : 1000px;
				border : 2px solid purple;
				margin-top : 30px; 
				overflow : scroll;
				font-size : 25px;
				color : purple;
				text-shadow : 2px 2px 2px #000;
			}
			#v
			{
				height : 1700px;
			}
			#msg
			{
				height : 400px; 
				width  : 1000px;
				border : 2px solid purple;
				margin-top : 30px; 
				margin-left : 40px;
				color : purple;
				font-size : 30px;
				text-shadow : 2px 2px 2px #000;
			}
			#l
			{
				border-bottom : 2px solid purple;
			}
			#msg input[type='tel']
			{
				margin-top : 20px;
				height : 30px;
				width : 200px;
				float : right;
				border : 2px solid purple;
				border-right : 0px;
				padding : 5px;
				text-align : center;
				font-family : comic sans ms;
				color : purple;
				font-size : 20px;
				border-radius : 5px;
			}
			#msg textarea
			{
				height : 200px;
				width : 800px;
				border : 2px solid purple;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				margin-top : 10px;
				margin-bottom : 26px;
			}
			#msg input[type="submit"]
			{
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid purple;
			}
			#msg input[type="submit"]:hover
			{
				background : gray;
			}
			#qs
			{
				float : left;
				text-align : right;
				background-color : purple;
				font-size : 16px;
				font-family : comic sans ms;
				color : white;
				margin-left : 5px;
				padding : 8px;
				margin-right : 10px;
				text-shadow : 0px 0px 0px;
				border-radius : 80px;
			}
			#an
			{
				float : right;
				text-align : right;
				border : 2px solid purple;
				background-color : white;
				font-size : 15px;
				font-family : comic sans ms;
				color : black;
				margin-left : 5px;
				padding : 8px;
				margin-right : 10px;
				text-shadow : 0px 0px 0px;
				border-radius : 80px;
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
					<li><div id='d'><a href='#'> Delete Admin </a></div></li>
					<li><div id='e'> <a href='logout.php'> Logout </a></div> </li>
				</ul>
			</div>
			</div>
			</br></br></br></br>
		 </div>
			</br></br>
				<center style='font-family : comic sans ms;font-size:30px;text-shadow: 1px 1px 1px purple;'>QUERIES </center>
			
			<div id='chat'>
				CHAT BOX
				<div id='l'> </div>
				<?php
					$i=0;
					$query="SELECT * FROM chat";
					$res = mysql_query($query);
					if(mysql_num_rows($res)!=0)
					{
						while($row = mysql_fetch_array($res))
						{
							$l[$i][0]=$row['name'];
							$l[$i][1]=$row['no'];
							$l[$i][2]=$row['question'];
							$l[$i][3]=$row['answer'];
							$i++;
						}
						while($i>0)
						{
							$i--;
							echo "</br><div id='an'>".$l[$i][3]."</div>";
							echo "</br><div id='qs'> ".$l[$i][0].' ('.$l[$i][1].') '.':'.$l[$i][2]."</div>";
							echo '</br>';
						}
					}	
				?>
			</div>
			</br></br>
			<div id='msg'>
				REPLY
				<div id='l'> </div>
				<form action='ques.php' method='post'>
					<input type='tel' name='no' placeholder='Question No...'>
					</br></br>
					<textarea name='reply' placeholder='Your Answer...'></textarea>
					</br>
					<input type='submit' name='submit' value='Submit'>
					</br></br>
				</form>
			</div>
		 
	</body>
</html>