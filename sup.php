<?php
	include('connection.php');
?>
<?php
	session_start();
	$a 	= $_REQUEST['txt1'];
	$b	= $_REQUEST['txt2'];
	$c  = $_REQUEST['txt3'];
	$d  = $_REQUEST['txt4'];
	$e  = $_REQUEST['txt5'];
	$f 	= date('d/m/y');
	$g  = date('h:i:s');
	$chk =0;
	if(isset($_REQUEST['go']))
	{
		
	if($d == $e)
	{
		$chk =1;	
		$query	 = "insert into user (uname , umail, uno ,upas , uday , utime) values
				  ('{$a}' ,   '{$b}' ,'{$c}' ,'{$d}','{$f}','{$g}' )";
		if(mysql_query($query,$cn ))
		{
			$msg	 = "Register Successfully...";
			header('location:signin.php?msg=' .$msg );
		}
		else
		{
			$msg	 = "Email/Phone number Already Exits";
			header('location:signup.php?msg=' .$msg );
		}
		
	}
	if($chk == 0)
	{
		$msg 	= "password does't match";
		header('location:signup.php?msg=' .$msg );
	}
	}
	// User profile Change 
	
	if(isset($_REQUEST['up']))
	{	
		 session_start();		 
		$query	 = "update user set uname ='{$a}' , umail = '{$b}', uno='{$c}' where sno='".$_SESSION['uid']."'";
		if(mysql_query($query,$cn ))
		{
			$msg	 = "Register Successfully...";
			header('location:profile.php?msg=' .$msg );
		}
		else
		{
			$msg	 = "Email/Phone number Already Exits";
			header('location:profile.php?msg=' .$msg );
		}
		
	}
	// User Password Change
	
	if(isset($_REQUEST['uppas']))
	{	
	
	if($d == $e)
	{
		 session_start();	
		$chk =1;	
		$query	 = "update user set upas ='{$d}'  where sno='".$_SESSION['uid']."'";		
		if(mysql_query($query,$cn ))
		{
			$msg	 = "Register Successfully...";
			header('location:profile.php?msg=' .$msg );
		}
		else
		{
			$msg	 = "Email/Phone number Already Exits";
			header('location:profile.php?msg=' .$msg );
		}
		
	}
	if($chk == 0)
	{
		$msg 	= "password does't match";
		header('location:profile.php?msg=' .$msg );
	}
		
	}
?>	