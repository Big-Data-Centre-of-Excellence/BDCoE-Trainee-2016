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
			#ch
			{
				height : 500px;
				width : 1100px;
				border : 2px solid purple;
				text-shadow : 1px 1px 1px purple;
				overflow : scroll;
			}
			#l
			{
				margin-top : 2px;
				border-bottom : 2px solid purple;
				width : 1090px;
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
			#ans
			{
				height : 200px;
				width : 1100px;
				margin-left : 40px;
				border : 2px solid purple;
				border-radius : 20px;
				margin-top : 30px;
			}
			#ans input[type='text']
			{
				height : 80px;
				width : 600px;
				margin-top : 20px;
				border : 2px solid purple;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
			}
			#ans input[type="submit"]
			{
				width : 200px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 20px;
				border-radius : 10px;
				background : #eef;
				border : 2px solid purple;
			}
			#ans input[type="submit"]:hover
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
					<li><div id='b'><a href='#'> Questions</a></div> </li>
					<li><div id='c'><a href='addmin.php'> Add Admin</a></div> </li>
					<li><div id='d'><a href='workshop.php'>Workshops </a></div></li>
					<li><div id='e'> <a href='logout.php'> Logout </a></div> </li>
				</ul>
			</div>
			</div>
			</br></br></br></br>
		 </div>
			</br></br> 
		<div id='ch'>
			CHAT BOX
			<div id='l'> </div>
			<?php
				if(isset($_POST['usr']))
				{
					$id = $_POST['usr'];
					if(!empty($id))
					{
		//				echo $id;
						$query = "SELECT * FROM chat WHERE id='$id'";
						$_SESSION['id'] = $id;
						$res = mysql_query($query);
						if(mysql_num_rows($res)!=0)
						{
							$i=0;
							while($row = mysql_fetch_array($res))
							{
								$l[$i][0]=$row['question'];
								$l[$i][1]=$row['answer'];
								$i++;
							}
							while($i>0)
							{
								$i--;
								if(!empty($l[$i][0]))
								echo "</br><div id='qs'> ".$l[$i][0]."</div></br>";
								if(!empty($l[$i][1]))
								echo "</br><div id='an'>".$l[$i][1]."</div></br>";
							}
						}
						else
						{
							echo "No Chat Found...";
						}
					}
				}
				else
				{
	//				echo 'Not Set';
					$id = $_SESSION['id'];
					if(!empty($id))
					{
		//				echo $id;
						$query = "SELECT * FROM chat WHERE id='$id'";
						$_SESSION['id'] = $id;
						$res = mysql_query($query);
						if(mysql_num_rows($res)!=0)
						{
							$i=0;
							while($row = mysql_fetch_array($res))
							{
								$l[$i][0]=$row['question'];
								$l[$i][1]=$row['answer'];
								$i++;
							}
							while($i>0)
							{
								$i--;
								if(!empty($l[$i][0]))
								echo "</br><div id='qs'> ".$l[$i][0]."</div></br>";
								if(!empty($l[$i][1]))
								echo "</br><div id='an'>".$l[$i][1]."</div></br>";
							}
						}
						else
						{
							echo "No Chat Found...";
						}
					}
				}	
			?>
			</div>
			
			<div id='ans'>
			<form action='chatpp.php' method='post'>
				<input type='text' name='ans' placeholder='Response'>
				</br>
				</br>
				<input type='submit' value='Submit'>
			</form>
			
		</div>
		
	</body>
</html>