<?php
	include 'sesi.php';
	include 'conn.php';
//	echo $_SESSION['id'];
	if(isset($_POST['ans']))
	{
		$id = $_SESSION['id'];
		$ans = $_POST['ans'];
//		echo $ans;
		$query = "INSERT INTO chat(answer,id) VALUES ('$ans','$id')";
		$conn = mysqli_connect("localhost","root","","bdcoe");
		if(mysqli_query($conn,$query))
		{
			header("Location:chatp.php");
		}
		else
		{
			echo 'Unsuccessful';
		}
	}
	else
	{
		echo 'NOT SET';
	}
?>