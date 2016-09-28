	
	<?php
	$servername="localhost";
	$user="root";
	$pwd="";
	$db="project";
	$conn=mysql_connect($servername,$user,$pwd,$db);

	if(isset($_POST['submit']))
	{ 
	mysql_select_db('project');
	$query=mysql_query("SELECT * FROM login");
	$email=$_POST['email'];
	$pass=$_POST['pwd'];
	while($row=mysql_fetch_array($query))
	{
		if($email==$row['email'] && $pass==$row['password'])
	{ 
		echo "<script type=\"text/javascript\">
		 window.alert(\"LOGIN SUCCESSFULL\");
		</script>";
	}
	if($email==$row['email'] && $pass==$row['password'])
	{
		
		session_start();
		
		$_SESSION['name']=$row['name'];
		$_SESSION['technology']=$row['technology'];
		if($_SESSION['technology']=="Hbase")
			header("Location:BDCOE.php");
		 else if($_SESSION['technology']=="Hive")
			 header("Location:Hive.php");
		else if($_SESSION['technology']=="Hadoop")
			header("Location:Hadoop.php");
		else if($_SESSION['technology']=="MapReduce")
			header("Location:MapReduce.php");
		else if($_SESSION['technology']=="MongoDB")
			header("Location:MongoDB.php");
		
	}
	
	
	}
	
	}
	?>
	
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Log In</title>
<link  rel="icon"  href="logo.png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	body{background:linear-gradient(#E6E6F2,#b3e0ff);}
	.container{background-color:#f2f2f2;
	width:32%;
	align:center;
	margin-top:10%;
	margin-bottom:30%;
	border-radius:20px;
	
	}
	<script>
		function k()
		{
			alert ("LOGIN SUCCESSFUL");
		}
	</script>
	</style>
	</head>
	
	<body>
	<div class="container">
	
	<form class="form-horizontal" style="margin-top:40px;" action='' method="post">
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button  style="background-color:#33d6ff;"type="submit" id="submit" name="submit" class="btn btn-default">Log In</button>
      </div>
    </div>
  </form>
<br>
<p style="margin-left:20px;">Not Registered?
<a href="signUp.php">Create an Acoount</a></p>
	</div>
	</body>
	</html>
	
