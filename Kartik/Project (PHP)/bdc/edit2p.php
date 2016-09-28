<!DOCTYPE html>
<html>
	<?php
		require 'conn.php';
			require 'sesi.php';
		if(isset($_POST['userfname'])&&isset($_POST['userlname'])&&isset($_POST['password']))
		{
			$user_id=$_SESSION['user_id'];
			$fname = $_POST['userfname'];
			$lname = $_POST['userlname'];
			$password = $_POST['password'];
			$name = $_FILES['dp']['name'];
			$type = $_FILES['dp']['type'];
			$tmp_name = $_FILES['dp']['tmp_name'];
			if(!empty($fname)&&!empty($lname)&&!empty($password)&&!empty($name)&&$type=='image/jpeg')
			{
			
				$conn = mysqli_connect("localhost","root","","bdcoe");
				$query = "UPDATE registration SET fname='$fname',lname='$lname',password='$password' WHERE id='$user_id'";
				if(mysqli_query($conn,$query))
				{
					
					$query = "UPDATE profile SET username='$fname' WHERE id='$user_id'";
					mysqli_query($conn,$query);
					$query = "UPDATE chat SET name='$fname' WHERE id='$user_id'";
					mysqli_query($conn,$query);
					$location = 'dp/';
					move_uploaded_file($tmp_name,$location.$name);
					$query = "UPDATE dp SET name='$name',username='$fname' WHERE id='$user_id'";
					mysqli_query($conn,$query);
					echo "<center style='font-family : comic sans ms;'></br></br><b><u>Changes Successfully Registered...</b></u></center>";
					include 'Home.php';
				}
			}
			else
			 echo "Please enter the details completely Or Enter The Dp in jpeg format";
		}	
	?>
</html>