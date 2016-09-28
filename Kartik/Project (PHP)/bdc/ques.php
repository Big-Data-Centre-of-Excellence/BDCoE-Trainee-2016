<?php
	include 'conn.php';
	if(isset($_POST['no'])&&isset($_POST['reply']))
	{
		$no = $_POST['no'];
		$r = $_POST['reply'];
		if(!empty($no)&&!empty($r))
		{
			$query = "UPDATE chat set answer='$r' WHERE no='$no'";
			$conn = mysqli_connect("localhost","root","","bdcoe");
			if(mysqli_query($conn,$query))
			{
				echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>Answer Sent Successfully...</u></center>";
				include 'questions.php';
			}
		}
		else
		{
			echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>Please Enter the Details...</u></center>";
			include 'questions.php';
		}
	}
	else
	{
		echo 'Session not set';
	}
?>