<?php
	
	$servername="localhost";
	$user="root";
	$pwd="";
	$db="project";
	$conn=mysql_connect($servername,$user,$pwd,$db);

	if(isset($_POST['submit']))
	{

		mysql_select_db('project');
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pwd'];
		$tech=$_POST['opt'];
		if(!empty($name)&&!empty($email)&&!empty($pass)&&!empty($tech))
		{
	
			$query=mysql_query("INSERT INTO login (name, email, password, technology) VALUES ('$name', '$email', '$pass', '$tech')");
			if(!$query)
				echo "Failed";
			else
				header("Location:LogIn.php");
		}
		else
		{
		   	echo "Enter Complete Details";
		}
	}

	?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Sign Up</title>
<link  rel="icon"  href="logo.png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	body{background:linear-gradient(#E6E6F2,#b3e0ff);}
	.container{background-color:#f2f2f2;
	width:35%;
	align:center;
	margin-top:7%;
	margin-bottom:5%;
	border-radius:20px;
	
	}

	</style>
	</head>
	
	<body>
	<div class="container">
	
	<form class="form-horizontal" style="margin-top:40px;" action='' method="post">
	<div class="form-group">
	<label class="control-label col-sm-2" for="name">Name:</label>
	 <div class="col-sm-10">
        <input type="name" class="form-control"  name="name" placeholder="Username">
      </div>
	  </div>
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
	<label style="margin-left:10px;">Select Technology:</label>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="radio">
          <label><input type="radio" name="opt" value="Hadoop"> Hadoop</label>
        </div>
		<div class="radio">
          <label><input type="radio" name="opt" value="Hive"> Hive</label>
        </div>
		<div class="radio">
          <label><input type="radio" name="opt" value="Hbase"> Hbase</label>
        </div>
		<div class="radio">
          <label><input type="radio" name="opt" value="MapReduce"> MapReduce</label>
        </div>
		<div class="radio">
          <label><input type="radio" name="opt" value="MongoDB"> MongoDB</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button  style="background-color:#33d6ff;"type="submit" class="btn btn-default" id="submit" name="submit">Sign Up</button>
      </div>
    </div>
  </form>
<br>
<p style="margin-left:20px;">Already Registered?
<a href="LogIn.php">Login Here</a></p>
	

	</div>
	</body>
	</html>
	