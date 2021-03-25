<?php
	$cn = mysql_connect('localhost' , 'root' ,'') or die("connection error". mysql_error());
	$db_select = mysql_select_db('exam' , $cn) or die("db connect error" . mysql_error());
?>