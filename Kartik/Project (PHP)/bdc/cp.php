<!DOCTYPE html>

<html>
<?php
	
	require 'conn.php';
	require 'sesi.php';
	if(isset($_POST['ques']))
	{
		echo 'Hii';
		$user_id = $_SESSION['user_id'];
		$ques = $_POST['ques'];
		if(!empty($ques))
		{
		//	echo 'hii';
			$conn = mysqli_connect("localhost","root","","bdcoe");
			$query = "INSERT into chat(question,id) VALUES ('$ques','$user_id')";
			if(mysqli_query($conn,$query))
			{
		//		echo 'hii';
				echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>Your Question Has Been Successfully Sent</u></center>";
				header('location:confusions.php');
			}
		}
		else
		{
				echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>Please enter A question...</u></center>";
			header('location:confusions.php');
		}
	}
	
?>

</html>