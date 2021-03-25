<?php
	$a =$_REQUEST['rno'];
	include('connection.php');
	if($_REQUEST['del'] == 1 )
	{ 	
		$q = "delete from que where sno='$a'";
		$r = mysql_query($q,$cn) or die("".mysql_error());
		header('Location:question.php');
	}
	if($_REQUEST['del'] == 2 )
	{ 		
		$q = "delete from user where sno='$a'";
		$r = mysql_query($q,$cn) or die("".mysql_error());
		header('Location:alog.php');
	}
?>