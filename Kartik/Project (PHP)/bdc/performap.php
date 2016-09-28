<!DOCTYPE html>
<html>
	<head>
		<link rel='icon' type='image/jpg' href='bdc.jpg'/>
		<link rel='stylesheet' type='text/css' href='admin.css'/>
		<title> BDC | Certificates</title>
		<style>
			#v
			{
				height : 1700px;
				width  : 40px;
				float : left;
				background-color : black;
			}
			#dp
			{
				margin-top : 100px;
				margin-right : 200px;
				height : 300px;
				width : 300px;
				float : right;
				border : 2px solid purple;
				border-radius : 250px;
			}
			#in
			{
				margin-left : 300px;
				font-family : jokerman;
				font-size : 30px;
				text-shadow : 1px 1px 1px purple;
				text-decoration : underline;
				float : left;
			}
			.text
			{
				margin-top : 20px;
				margin-left : 450px;
				font-family : comic sans ms;
				font-size : 50px;
				text-shadow : 2px 2px 2px purple;
			}
			#l
			{
				border-bottom : 2px solid purple;
			}
			#o
			{
				margin-left : 300px; 
				font-family : comic sans ms;
				font-size : 30px; 
				color : purple;
				text-shadow : 1px 1px 1px #000;
				margin-top : 50px;
			}
			#certi
			{
				margin-top : 50px;
				margin-left : 100px;
				border : 2px solid purple;
			}
			#cert
			{
				margin-top : 50px;
				margin-left : -280px;
				border : 2px solid purple;
			}
			#sd a
			{
				margin-left : 300px;
				text-decoration : none;
				color : black;
				padding : 5px;
				border : 2px solid purple;
				font-family : comic sans ms;
				text-shadow : 1px 1px 1px purple;
				border-radius : 5px;
			}
			#bx
			{
				height : 300px;
				width : 500px;
				border : 2px solid purple;
				float : right;
				margin-top : -300px;
				margin-right : 100px;
				border-radius : 50px;
				text-align : center;
				font-family : comic sans ms;
				font-size : 22px;
				text-shadow : 1px 1px 1px purple;
			}
		</style>
	</head>
	<body>
		<div id='h'> </div>
		<div id='v'> </div>
		<div id="uu">
			<img src="bdc.jpg"/> 
		</div>
		<div id='sd'>
	<p class='text'>	BIG DATA CENTER </br>&nbsp OF EXCELLENCE </p>
	<div id='l'> </div>
 <?php
	include 'conn.php';
	if(isset($_GET['cid']))
	{
		$cid = $_GET['cid'];
		$q = "SELECT uid FROM work WHERE cid='$cid'";
		$r = mysql_query($q);
		$uid = mysql_result($r,0,'uid');
//		$uid = $_GET['uid'];
		if(!empty($cid))
		{
	//		echo "Hii";
	//		echo $uid;
	//		echo $cid;
			$query = "SELECT * FROM work WHERE cid='$cid'";
			$res = mysql_query($query);
			$row = mysql_fetch_array($res);
			if(mysql_num_rows($res)==0)
			{
				echo 'SORRY WRONG PAGE';
			}
			else
			{
				if($uid!=0)
				{	
					$query = "SELECT name FROM dp WHERE id='$uid'";
					$run = mysql_query($query);
					$dp = mysql_result($run,0,'name');
					echo "<img id='dp' src='dp/".$dp."'/>";
				}
				echo "<p id='o'> Certifies </p><p id='o' style='margin-top : 10px; color : black; text-shadow : 1px 1px 1px purple; margin-left : 320px; '>".$row['name']." for</p>";
				echo "</br></br></br></br></br><p id='in'>".$row['workshop']."</p>";
	//			echo $row['status'];
				$query = "SELECT name,type FROM workshop WHERE cid='$cid'";
				$run2 = mysql_query($query);
//				echo mysql_num_rows($run2);
				$row2 = mysql_fetch_array($run2);
				if($row2['type']=='application/pdf')
				{
					if($uid!=0)
					{	
						echo "<embed id='certi' src='certi/".$row2['name']."' width='500px' height='500px'/>";
						echo "</br></br></br><a href='certi/".$row2['name']."' target='_blank'> Download </a>";
					}
					else
					{
						echo "<embed id='cert' src='certi/".$row2['name']."' width='500px' height='500px'/>";
						echo "</br></br></br><a href='certi/".$row2['name']."' target='_blank'> Download </a>";
					}
				}
				else
				{
//					echo $row2['name'];
					if($uid!=0)
					echo "<img id='certi' src='certi/".$row2['name']."' width='500px' height='500px'/>";
					else
					echo "<img id='cert' src='certi/".$row2['name']."' width='500px' height='500px'/>";
					echo "</br></br></br><a href='certi/".$row2['name']."' target='_blank'> Download </a>";
				}
			}
//			echo mysql_num_rows($res);
		
	
?>
	<div id='bx'>
			<?php
				echo "</br></br></br>Status : ".$row['status']."</br>";
				echo "Duration : ".$row['stdate']."-".$row['endate']."</br>";
				echo "Email Id : ".$row['email']."</br>";		
		}
	}
			?>
	</div>
	</div>
</body>
</html>