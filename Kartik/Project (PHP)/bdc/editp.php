<!DOCTYPE html>
<html>
	<?php
		require 'conn.php';
			require 'sesi.php';
		if(isset($_POST['StudentNo'])&&isset($_POST['UniRoll'])&&isset($_POST['branch'])&&isset($_POST['section'])&&isset($_POST['year'])&&isset($_POST['mobile']))
		{
			$stno = $_POST['StudentNo'];
			$unroll = $_POST['UniRoll'];
			$branch = $_POST['branch'];
			$section = $_POST['section'];
			$year = $_POST['year'];
			$mobile = $_POST['mobile'];
			$user_id = $_SESSION['user_id'];
			$query2 = "SELECT fname FROM registration WHERE id='$user_id'";
			$query_run = mysql_query($query2);
			$user_name = mysql_result($query_run,0,'fname');
			if(!empty($stno)&&!empty($unroll)&&!empty($branch)&&!empty($section)&&!empty($year)&&!empty($mobile))
			{
				$conn = mysqli_connect("localhost","root","","bdcoe");
				$query = "UPDATE profile SET stno='$stno',unroll='$unroll',branch='$branch',section='$section',year='$year',mobile='$mobile'  WHERE username='$user_name'";
				if(mysqli_query($conn,$query))
				{
					echo "<center style='font-family : comic sans ms;'></br></br><b><u>Changes Successfully Registered...</b></u></center>";
					include 'Home.php';
				}
			}
			else
			 echo "Please enter the details completely";
		}	
	?>
</html>