<?php
	include 'conn.php';
//	include 'sesi.php';
	$name = $_FILES['certi']['name'];
	$tmp_name = $_FILES['certi']['tmp_name'];
//	echo $tmp_name;
//	$size = $_FILES['certi']['size'];
	$type = $_FILES['certi']['type'];
//	echo $type;
//	echo $tmp_name;
//	echo $size;                 
	//echo $type;
	//echo $name;
	if(isset($name)&&isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['status'])&&isset($_POST['stdate'])&&isset($_POST['endate'])&&isset($_POST['workname']))
	{
		$id=$_POST['id'];
		$username = $_POST['name'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$stdate = $_POST['stdate'];
		$endate = $_POST['endate'];
		$workname = $_POST['workname'];
		if(!empty($name)&&!empty($username)&&!empty($email)&&!empty($status)&&!empty($stdate)&&!empty($endate)&&!empty($workname))
		{
			if($type=='application/pdf'||$type='image/jpeg')
			{
				$location = 'certi/';
		//		echo 'ok';
		//		echo $name;	
		//		echo $location.$name;
		//		echo $tmp_name;
				if(move_uploaded_file($tmp_name,$location.$name))
				{	
					if(!empty($id))
					{	$query = "INSERT INTO workshop(id,name,type) VALUES ('$id','$name','$type')";
						$conn = mysqli_connect("localhost","root","","bdcoe");
						mysqli_query($conn,$query);
						$query2="INSERT INTO work(email,name,status,uid,stdate,endate,workshop) VALUES ('$email','$username','$status','$id','$stdate','$endate','$workname')";
						mysqli_query($conn,$query2);
					}
					else
					{
						$query = "INSERT INTO workshop(name,type) VALUES ('$name','$type')";
						$conn = mysqli_connect("localhost","root","","bdcoe");
						mysqli_query($conn,$query);
						$query2="INSERT INTO work(email,name,status,stdate,endate,workshop) VALUES ('$email','$username','$status','$stdate','$endate','$workname')";
						mysqli_query($conn,$query2);
					}
				echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>FILE UPLOADED...</u></center>";
				include 'unlink.php';
				include 'admin.php';
				}
				else
				{
					echo "Failed";
				}
			}
			else
			{
				echo "<center style='font-family : comic sans ms; font-family: 50px; text-shadow:2px 2px 2px purple;margin-top : 50px;'><u>Please Upload the file in appropriate format(.pdf/.jpg/.jpeg)...</u></center>";
				include 'admin.php';	
			}
		}
		else
		{
			echo 'You must fill the form completely';
		}
	}
	
	//<embed src='certi/1.pdf' width='800px' height='2000px'/>
?>