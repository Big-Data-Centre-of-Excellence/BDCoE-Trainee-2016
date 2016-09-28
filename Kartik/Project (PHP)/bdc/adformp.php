<!DOCTYPE html>
<html>

<?php
	include 'conn.php';
	{
		$name = $_POST['name'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		if(!empty($name)&&!empty($pass)&&!empty($email)&&!empty($type))
		{
			$query = "INSERT INTO admin VALUES ('','$name','$pass','$email','$type')";
			$conn = mysqli_connect("localhost","root","","bdcoe");
			if(mysqli_query($conn,$query))
			{
				echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>Admin Added Successfully...</u></center>";
				include 'admin.php';
			}
		}
		else
		{
			echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>Please Enter Valid Values...</u></center>";
			include 'admin.php'; 
		}
	}	
?>

</html>