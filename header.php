<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>App</title>
<link href="stylesheet.css" type="text/css" rel="stylesheet" />


   
</head>
<body>
<br /><br />
<table align="center" width="80%" class="header" cellspacing="0" cellpadding="0">
	<tr>
    	<td width="40%">        	
        	<img src="images/logo.png" style="float:left;" height="105" width="105" /> &nbsp; &nbsp; <span class="title">Online Examination</span><br /><br /><br />
        </td>
        <td width="55%" align="right" valign="top">
        	
            <br />
            <?php echo date('d/m/Y h:i:s'); ?>
            <br /><br />
            Any Help.. Toll free +91 89965468990 
        </td>
        <td width="5%" align="right" valign="top">
        	<span class="topcorner">&nbsp;</span>
        </td>
    </tr>
</table>


<table align="center" width="80%" class="menus" cellspacing="0" cellpadding="0">
	<tr>
    	<td>
        <?php
			 session_start();
			 if($_SESSION['eid'] != "" )
  			{
		?>
        	<a href="cancel.php" style="float:right;" > &nbsp;&nbsp;Cancel </a>
        <?php
			}
			else
			{
		?>
        <?php
   			if($_SESSION['sid'] == session_id() )
  			{
		?>	
				
                <a href="exam.php">&nbsp;Exam</a>
                <a href="res.php">&nbsp;Result</a>
                <a href="profile.php">&nbsp;Profile</a>                
                <a href="logout.php">&nbsp;logout</a>
               
        <?php        
			}
			else
			{      
		?>
        	<a href="index.php">&nbsp;Home</a>
            <a href="signin.php">Sign In</a>
            <a href="signup.php">Sign Up</a>
            <a href="admin.php">Admin</a>
        <?php
			}
			}
        ?>    
        </td>
    </tr>
</table>
