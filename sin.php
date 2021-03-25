  <?php
	  include('connection.php');
  ?>
  <?php
  
	  $mail = $_REQUEST['txt1'];
	  $password = $_REQUEST['txt2'];
	  $q = 0;
	  $query = "select * from user";
	  $result = mysql_query($query , $cn) or die("query error ". mysql_error());
	  while($row = mysql_fetch_array($result))
	  {			
		  if($mail == $row['umail'] && $password == $row['upas'])
		  {
			  $q = 1;
			  session_start();
			  $_SESSION['sid'] = session_id() ;
			  $_SESSION['uid'] = $row['sno'];
			  $_SESSION['umail'] = $row['umail']; 
			  header('Location:exam.php');	
		  }
	  }
	  
	  if($q == 0 )
	  {
		  $msg = "username / password are incorrect ";
		  header('Location:signin.php?msg='.$msg);
	  }
  ?>