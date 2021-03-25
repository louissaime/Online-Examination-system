<?php
	session_start();
	if($_SESSION['eid'] == session_id())
	{
		header('Location:test.php');
	}
	else
	{
	if(isset($_REQUEST['start']))
	{
	session_start();
	include('connection.php');
	$user = $_SESSION['uid'];	
	$a    = $_REQUEST['type'];
	$type  = 0;
	if($a == "-- Select --" or $a == "")
	{
		$type = 1;
	}
	if($type == 1)
	{
		$msg = "Please Select Any one"; 	
		header('Location:exam.php?msg='.$msg);
	}
	else
	{
	$t    = 	time(); 
	
    //select the question in question table and insert test table	
		$q    = "select * from que where type='{$a}' order by rand() limit 5 ";	
		$r = mysql_query($q,$cn) or die("err".mysql_error());
		while($re = mysql_fetch_array($r))
		{		
			$q = "insert into test(qid,que,a,b,c,ans,qtype,user,etime,uday) 
			values('".$re['sno']."','". $re['que']."','". $re['a']."','". $re['b']."','". $re['c']."',
			 '". $re['ans']."','".$a."','".$user."','".$t ."','".date('d/m/Y') ."')";																													
			$x = mysql_query($q,$cn) or die("".mysql_error());	
			
		}
		$q = "insert into result(uid,etime) values ('".$_SESSION['uid'] ."','".$t ."') ";
		$x = mysql_query($q,$cn) or die("".mysql_error());	
		$_SESSION['eid'] = session_id();		
		$_SESSION['etime']=$t;
		header('Location:test.php');
		
	}
	}	
	}	
	?>
