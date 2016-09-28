<?php
				
			include 'AdminHome.php';
			if(isset($_POST['name'])&&isset($_POST['password']))
			{
				$name = $_POST['name'];
				$pass = $_POST['password'];
				if(!empty($name)&&!empty($pass))
				{
					$query = "SELECT id FROM admin WHERE name='$name' AND  password='$pass'";
					if($query_run = mysql_query($query))
					{
					//	echo 'hii';
						$query_num_rows = mysql_num_rows($query_run);
						if($query_num_rows==0)
						{
					//		echo 'hii';
							echo "<center style='font-family : comic sans ms;'><b>User Not Recognized</b></center>";
						}
						else
			//				if($query_num_rows==1)
						{
							$user_id = mysql_result($query_run,0,'id');
							$_SESSION['user_id'] = $user_id;
							header("Location:adli.php");
						}
						
					}
					else
					{
						echo 'Failed';
					}
				}
				else
				{
					echo "Please Enter Username and Password...";
				}
			}
		?>