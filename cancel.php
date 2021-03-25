<?php
	
	session_start();
	unset($_SESSION['eid']);
	unset($_SESSION['etime']);
	header('Location:exam.php');
	
?>
