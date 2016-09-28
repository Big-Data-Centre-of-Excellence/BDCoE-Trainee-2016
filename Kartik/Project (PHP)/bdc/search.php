<?php
	include 'conn.php';
	$query = "SELECT DISTINCT(id) FROM chat";
	$res = mysql_query($query);
//	echo mysql_num_rows($res);
//	echo "<p style='margin-top : 100px;'> You Have Unread Messages From<p>";
	if(mysql_num_rows($res)!=0)
	{
		while($row = mysql_fetch_array($res))
		{
//			echo $row[0].' ';
			$query = "SELECT * FROM chat WHERE id='$row[0]'";
			$res2 = mysql_query($query);
//			echo mysql_num_rows($res2)." ";
			while($ch = mysql_fetch_array($res2))
			{
				$ques = $ch['question'];
				$ans = $ch['answer'];
			}
			if(empty($ans))
			{
				include_once 'include.php';
				$query2 = "SELECT fname FROM registration WHERE id='$row[0]'";
				$res3 = mysql_query($query2);
				$name = mysql_result($res3,0,'fname');
				echo $name.' ';
			}
		}
	}
	else
	{
		echo "No Users Have Send Anything Yet...";
	}
?>