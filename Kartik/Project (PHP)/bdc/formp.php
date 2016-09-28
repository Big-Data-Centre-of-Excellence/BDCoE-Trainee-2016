<!DOCTYPE html>

<html>

<?php
		include 'form.php';
			if(isset($_POST['email'])&&isset($_POST['password']))
			{
				$email = $_POST['email'];
				$pass = $_POST['password'];
				if(!empty($email)&&!empty($pass))
				{
					$query = "SELECT id FROM registration WHERE email='$email' AND  password='$pass'";
					if($query_run = mysql_query($query))
					{
						$query_num_rows = mysql_num_rows($query_run);
						$user_id = mysql_result($query_run,0,'id');
						if($query_num_rows==0)
						{
							echo "<center style='font-family : comic sans ms;'><b>User Not Recognized</b></center>";
						}
						else
						{
							$_SESSION['user_id'] = $user_id;
							header("Location: signin.php");
						}
						
/*						if(!empty($user_id))
						{
							$_SESSION['user_id'] = $user_id;
						}
						else
						{
							echo "<center style='font-family : comic sans ms;'><b>User Not Recognized</b></center>";
						}        */
					}
				}
				else
				{
					echo "Please Enter Username and Password...";
				}
			}
			else
			{
		//		echo "NOT SET";
			}
		?>

</html>