<?php
	
	$message = "This is a automated Email.";
	$header = "From: krtkjain60@gmail.com";
	if(mail("jainkartik203@gmail.com","Testing","Sample Mail","From: krtkjain60@gmail"))
		echo 'Sent';
	else
		echo 'Failed';
?>

