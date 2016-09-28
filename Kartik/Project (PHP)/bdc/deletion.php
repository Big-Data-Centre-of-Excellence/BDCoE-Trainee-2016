<?php

	$conn = mysqli_connect("localhost","root","","bdcoe");
	$sql="DELETE FROM registration";
	if(mysqli_query($conn,$sql))
	{
		echo "Deletion Successful."; 		
	}
	else
	{
		echo "failed";
	}

?>