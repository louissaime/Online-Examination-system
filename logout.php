<?php

	$msg = "Logged out scuccessfully";     
    session_start();
	unset($_SESSION['eid']);
	unset($_SESSION['ename']);
	$_SESSION['sid'] = "err";
	session_destroy();	
	setcookie(PHPSESSID,session_id(),time()-1);
	header('Location:index.php?msg='.$msg);

?>