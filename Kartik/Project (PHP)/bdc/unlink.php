<!DOCTYPE html>
<html>
	<head>
		<style>
			body p
			{
				text-align : center;
				font-family : comic sans ms;
				text-shadow : 1px 1px 1px purple;
			}
		</style>
	</head>
	<body>
<?php
		include 'conn.php';
		require 'PHPMailer/PHPMailerAutoload.php';
//		echo $id;
		$query = "SELECT * FROM work WHERE email='$email'";
		$run = mysql_query($query);
//		echo mysql_num_rows($run);
		while($row = mysql_fetch_array($run))
		{
			$l = $row['cid'];
			$add = $row['email'];
			$workshop = $row['workshop'];
		}
//		echo $row['email'];
//		echo "/".$l;
		echo "<p></br>Unique Certificate Link : </br>http://localhost/bdc/performap.php?uid=&cid=".$l."</p>";
//		echo "/".$res;
		$link = "http://localhost/bdc/performap.php?uid=&cid=".$l;
//		echo $add;
//		echo $workshop;
		

			$mail = new PHPMailer;

			$mail->isSMTP();                            
			$mail->Host = 'smtp.gmail.com';             
			$mail->SMTPAuth = true;                     
			$mail->Username = 'krtkjain60@gmail.com';         
			$mail->Password = 'FamousFive05'; 
			$mail->SMTPSecure = 'tls';               
			$mail->Port = 587;                          
			$mail->addAddress("$add");   

			$mail->isHTML(true);

			$bodyContent = '<p> Welcome To BIG DATA Center Of Excellence.</br>We Remember You have Done A workshop Organized By Us So </br> Here Is the Certificate Link :'.$link;

			$mail->Subject = 'Certificate';
			$mail->Body    = $bodyContent;

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo '<p>Message has been sent</p>';
			}
?>
	</body>
</html>