<!DOCTYPE html>
<html>
	<?php
	
		session_start();
	//	echo $_SESSION['secure'];
		
		if(isset($_POST['userfname'])&&isset($_POST['userlname'])&&isset($_POST['email'])&&isset($_POST['password']))
		{
			$capcha = $_POST['capcha'];
			$userfname = $_POST['userfname'];
			$userlname = $_POST['userlname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			if($capcha==$_SESSION['secure'])
			{
				if(!empty($userfname)&&!empty($userlname)&&!empty($email)&&!empty($password))
				{
					//$md5_password = md5(password);
					$conn = mysqli_connect("localhost","root","","bdcoe");
					$query = "INSERT INTO registration VALUES ('','$userfname','$userlname','$email','$password')";
				//	echo $userfname;
					if(mysqli_query($conn,$query))
					{
						echo "<center style='font-family : comic sans ms;'></br></br><b><u>Registration successful</b></u></center>";
						$query_profile = "INSERT INTO profile(username) VALUES('$userfname')";
						$conn = mysqli_connect("localhost","root","","bdcoe");
						mysqli_query($conn,$query_profile);
						$querydp = "INSERT INTO dp(username,name) VALUES ('$userfname','default.jpeg')";
						mysqli_query($conn,$querydp);
						include 'Home.php';
					}
					else
					echo 'HLOO';
				}
				else
				 echo "Please enter the details completely";
			}
			else
			{
				echo 'INVALID CAPCHA';
				include 'Home.php';
			}
		}
		else
			echo "FAILED";   
	?>
</html>