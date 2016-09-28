<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css?family=Lemon" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>biG DATA Coe project</title>
<link  rel="icon"  href="logo.png">
<link rel="stylesheet" type="text/css" href="csswithbootpage.css" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery-1.12.4.min.js"></script>
  <style>
	body{background:linear-gradient(#E6E6F2,#b3e0ff);}
	
	.container{background-color:white;
	width:80%;
	margin:0% 10% 3% 10%;}
		
		.linksdesigning{
	font-size:18px;
	font-family: 'Lemon', cursive;
	color:white;
	font-weight:bold;
	}
	
	.linksdesigning:hover{
	background-color:#142044;
	color:white;
	
	
	}
	#map {
        height: 400px;
        width: 100%;
       }
	.jumbotron{
	background-color:#142044;
	padding:6px;
	color:white;
	font-weight:bold;
	font-family:monospace serif;}
	
	.btn-default:hover{
	background-color:white;
	font-weight:bold;
	text-decoration:underline;
	}
	
	.itemsdesigning{
	background-color:#00cc99;
	font-family: 'Fugaz One', cursive;
	
	}
	
	.navbar-default{
	background-color:white;
	border:1px solid white;}
	
	.itemsdesigning:hover{
	border:1px solid #142044;
	}
	
	.frsp{
		background-color:gray;
		text-align:center;
	}
	
	.frfp{
		background-color:gray;
		text-align:center;
	}
	
	.carousel-inner > .item > img,
	
	.carousel-inner > .item > a > img{
	margin:auto;
	height:40px;
	}
	
  </style>
  <script>
			
$(document).ready(function(){
    $(".informationforthebigdatapeoples").hover(function(){
        $(".animation").show();
    },
	function(){
	$(".animation").hide();
});
}); 
  </script>
  
  
  </head>
<body>
<div class="container">
<nav class="navbar">
      <ul class=" nav navbar-nav  navbar-right ">
	        <li class="itemsdesigning"><a style="background-color:white" href="#dfh" > <span class="glyphicon glyphicon-earphone"></span>
					+ 91- 8743065529</a> </li>
			<li class="itemsdesigning"><a style="background-color:white"href="#ankit" class=""><span class="glyphicon glyphicon-envelope"></span>
					@ankitgupta1243.co.in </a></li>
	  
	  </ul>
</nav>
<img src="download (1).png" width="270px" height="100px"/>

<img src="na.jpeg" width="270px" height="100px" align="right"/>



<div class="navbar navbar-default">
	<ul class="nav navbar-nav  navbar-left ">
				<li class="itemsdesigning"><a href="http://localhost/BDCOE%20PROJECT/BDCOE.php" style="background-color:#00cc99;color:black;"class="linksdesigning"><span class="glyphicon glyphicon-home"></span> Home</a></li>
								<li class="itemsdesigning">
						<a href="#"class="linksdesigning" style="background-color:#00cc99;color:black;"><span class="glyphicon glyphicon-exclamation-sign"></span> About Big Data CoE</a>				
						</li>
				<li class="itemsdesigning"><a href="whatWeDo.php" class="linksdesigning"style="background-color:#00cc99;color:black;"><span class="glyphicon glyphicon-cog"></span> What We DO</a></li>
				
				<li class="dropdown itemsdesigning">
						<a href="#" class="linksdesigning  dropdown-toggle" data-toggle="dropdown"style="background-color:#00cc99;color:black;"><span class="glyphicon glyphicon-picture"></span> Portfolio
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>SAKSHAM APP</li>
								<li class="divider"></li>
								<li>JSPLASH JAVAIDE</li>
								<li class="divider"></li>
								<li>PIG & SQOOP WORKSHOP</li>
							</ul>
			
				
				<li class="itemsdesigning"><a href="Contact.php"class="linksdesigning"style="background-color:#00cc99;color:black;"><span class="glyphicon glyphicon-list-alt"></span> Members</a></li>
				<?php if(!isset($_SESSION['name'])){ ?><li class="itemsdesigning"><a href="LogIn.php" class="linksdesigning"style="background-color:#00cc99;color:black;"><span class="glyphicon glyphicon-user"></span> Log In/Sign Up</a></li><?php }
				else { ?><li class="itemsdesigning"><a href="LogOut.php" class="linksdesigning"style="background-color:#00cc99;color:black;"><span class="glyphicon glyphicon-user"></span> Log Out</a></li><?php } ?>
				
	</ul>

</div>
<br>
<div class="row">
	<div class="col-md-6">
<div id="myCarousel" class="carousel slide">
<ol class="carousel-indicators">
<li class="item1 active"></li>
<li class="item2"></li>
</ol>
<div class="carousel-inner">
	<div class="item active">
		<img src="img9.png" style="width:800px;height:300px;"/>
		</div>
	<div class="item">
		<img src="crousel.jpeg" style="width:800px;height:300px;"/>
		</div>
</div>

<div class="left carousel-control" href="#myCarousel">
	<span class="glyphicon glyphicon-chevron-left"></span>
</div> 
<!--
<div class="right carousel-control" href="#myCarousel">
	<span class="glyphicon glyphicon-chevron-right"></span>
</div> -->
</div>
</div>

<div class="col-md-6">
<div id="myCarousel2" class="carousel slide">
<ol class="carousel-indicators">
<li class="item3 active"></li>
<li class="item4"></li>
</ol>
<div class="carousel-inner">
	<div class="item active">
		<img src="hiv.jpeg" style="width:650px;height:300px;"/>
		</div>
	<div class="item">
		<img src="nav.jpeg" style="width:650px;height:300px;"/>
		</div>
</div>
<!--
<div class="left carousel-control" href="#myCarousel2">
	<span class="glyphicon glyphicon-chevron-left"></span>
</div> -->
<div class="right carousel-control" href="#myCarousel2">
	<span class="glyphicon glyphicon-chevron-right"></span>
</div>
</div>
</div>
</div>

<br>
<br>
<div class="row">
		<div class="col-md-3">
			<a href="#" class="thumbnail"style="background-color:#f2f2f2">
			<img  src="k.jpeg"  height="300px" width="176px"/>
			<h5 style="font-weight:bold; font-family: 'Ceviche One'; text-decoration:none;color:#142044;text-align:center;"> Knowledge Generation</h5>
			<p style="color:4169E1;font-family: 'Sansita One', cursive;text-align:center; font-size:12px;">strategic and technological consulting</p>
			</a>
		</div>
		<div class="col-md-3">
			<a href="#" class="thumbnail"style="background-color:#f2f2f2">
			<img src="b.jpeg"  height="170px" width="134px"/>
			<h5 style="font-weight:bold; font-family: 'Lilita One', cursive; text-decoration:none;color:#142044;text-align:center;"> Service Provision For big-data Value</h5>
			<p style="color:4169E1;text-align:center; font-size:12px;">Innovation projects and Proofs of concept</p>
			</a>
		</div>
		<div class="col-md-3">
			<a href="#" class="thumbnail"style="background-color:#f2f2f2">
			<img src="computers.jpg"  height="140px" width="126px"/>
			<h5 style="font-weight:bold; font-family: 'Pacifico', cursive; text-decoration:none;color:#142044;text-align:center;"> Training</h5>
			<p style="color:4169E1;font-family: 'Oleo Script Swash Caps', cursive;text-align:center;font-size:12px;">Training activities in Big-data</p>
			</a>
		</div>
		<div class="col-md-3">
			<a href="#" class="thumbnail"style="background-color:#f2f2f2">
			<img src="event.jpeg"  height="170px" width="600px"/>
			<h5 style="font-weight:bold; font-family: 'Oleo Script Swash Caps', cursive; text-decoration:none;color:#142044;text-align:center;"> Dissemination</h5>
			<p style="color:4169E1;font-family: 'Pacifico', cursive;text-align:center;font-size:12px;">own program of big-data events</p>
			</a>
		</div>
</div>

<br>
<div class="row">
	<div class="col-md-4"> 
		<img src="hive2.jpeg" style="width:230px;height:190px;"/>
		</div>
	
	<div class="col-md-4 "> 
		<img src="hive4.jpeg" style="width:230px;height:190px;" />
		</div>
	<div class="col-md-4" > 
		<img src="hive5.jpeg" style="width:230px;height:190px;" />
	</div>
		
</div>
<br>
<div class="row">
	<div class="col-md-6"> 
		<img src="n.jpg" style="width:230px;height:190px;margin-left:19%;"/>
		</div>
	<div class="col-md-6 " > 
		<img src="hive3.png" style="width:230px;height:190px;margin-right:8%;border-radius:15px;" />
	</div>
</div>
<br>
<br>
<br>
<div>
<h2 style="font-family: 'Fugaz One', cursive;font-weight:bold;text-decoration:underline"> Tutorials :<h2>
</div>
<br>
<div class="row">
	<div class="col-md-4"> 
	<iframe width="345" height="300" src="https://www.youtube.com/embed/5IAsnI4lwZI" frameborder="0" allowfullscreen></iframe>

	</div>
		<div class="col-md-4"> 
<iframe width="345" height="300" src="https://www.youtube.com/embed/ZSzl4mylPiw" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="col-md-4">
	<iframe width="345" height="300" src="https://www.youtube.com/embed/TFOt0MMPwR4?list=PLLTwb5TR16mbNIB_eVmWLs1Q0FrwNRgab" frameborder="0" allowfullscreen></iframe>
</div>
	
	</div>
	<br>
	<br>
<div class="row">
		<div class="col-md-6">
	
			<h2 style="font-weight:bold;"> Contact us</h2>
			
			<h6 style="color:gray;">phone number</h6>
			<h4><span class="glyphicon glyphicon-earphone"> </span> +91 8743065529</h4>
			<hr style="color:gray;">
			<h6 style="color:gray;">our address</h6>
			<h4><span class="glyphicon glyphicon-map-marker"> </span>Ajay kumar Garg, Engineering college</h4>
			<hr style="color:gray;">
			<h6 style="color:gray;">email address</h6>
			<h4><span class="glyphicon glyphicon-envelope"></span>@infobigdata</h4>
			<hr style="color:gray;">
			<h6 style="color:gray;">twitter</h6>
			<h4>@CoEbigData</h4>
			<hr style="color:gray;">
		</div>
		<div class="col-md-6 ">
		<div id="map"></div>
    <script>

      function initMap() {
        var uluru = {lat: 28.675462, lng: 77.503159};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFEPRyLCaY0WqNOgNLuG0xwYurI-o1zas&callback=initMap">
    </script>
		</div>
		</div>

<br>
<br>
<div class="row">
<div class="col-md-12">
<h2>Promoters</h2>
</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-3">
	<img src="AkgLobo.jpeg" width="80px" height="80px"/>
	</div>
	<div class="col-md-3">
	<img src="presidencia_h3-190x44.jpg" />
	</div>
	<div class="col-md-3">
	<img src="oracle1-190x61.jpg" />
	</div>
	<div class="col-md-3">
	<img src="logo_eurecat (1).jpg"   />
	</div>
</div>
</div>
<script>
$(document).ready(function(){
	$("#myCarousel").carousel();
	
});
$(".item1").click(function(){
		$("#myCarousel").carousel(0);
		
});
$(".item2").click(function(){
		$("#myCarousel").carousel(1);
		
});
$(".left").click(function(){
		$("#myCarousel").carousel("prev");
		
});
$(".right").click(function(){
		$("#myCarousel").carousel("next");
		
});

</script>


<script>

$(document).ready(function(){
	$("#myCarousel2").carousel();
	
});
$(".item3").click(function(){
		$("#myCarousel2").carousel(0);
		
});
$(".item4").click(function(){
		$("#myCarousel2").carousel(1);
		
});
$(".left").click(function(){
		$("#myCarousel2").carousel("prev");
		
});
$(".right").click(function(){
		$("#myCarousel2").carousel("next");
		
});

</script>




</body>
</html>