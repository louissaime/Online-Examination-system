<?php include('head.php'); ?>	
<table align="center" width="80%" cellpadding="5" cellspacing="5" class="tbl"> 
	
    <tr>
    	<td>
        <form action="alog.php" method="get">
		<table align="center" width="80%" cellpadding="8" cellspacing="0" style="border:dotted; border-width:thin;">
		<tr style="background:#CCC;">
    		<td colspan="2">
       			 <u> Search Particular User </u> 
        	</td>
   		 </tr>
		<tr >
			<td align="center" class="srh" >
				
				<input type="text" placeholder="eg: 09/08/15 (or) User Id" class="txt1" name="txt1"  required  />		
				<input type="submit" value="GO" name="sub" class="but1" />
			</td>
		</tr>
		</table>
		</form>
        <br />
<table align="center" width="80%" cellpadding="8" cellspacing="2" style="font-size:15px" >
<tr  style=" background-color:#f76841; color:#FFFFFF ; padding-left:10%;">
		<td>
		 	S.No
		</td>
		<td>
		 	Uid
		</td>
		<td>
		 	Name
		</td>
		<td>
		 	Mail Id
		</td>
		<td>
		 	Phone Number
		</td>
		<td>
		 	Date
		</td>
		<td>
		 	Time
		</td>		
		<td>
			Delete
		</td>
	</tr>
<?php
	if(isset($_REQUEST['sub']))
	{
	include('connection.php');
	
	$a = $_REQUEST['txt1'];		
	$q = "select * from user";
	$r = mysql_query($q,$cn) or die("".mysql_error());
	$i =1;
	$chk = 0;
	while($re = mysql_fetch_array($r))
	{
		if($a == $re['uday'] or $a == $re['sno'] )
		{
			$chk = 1;
?>
	<tr>
		<td>
		 	<?php echo $i;?>
		</td>
		<td>
		 	<?php echo $re['sno'];?>
		</td>
		<td>
		 	<?php echo $re['uname']?>
		</td>
		<td>
			<?php echo $re['umail'];?>
		</td>
		<td>
		 	<?php echo $re['uno'];?>
		</td>
        <td>
		 	<?php echo $re['uday'];?>
		</td>
		<td>
		 	<?php echo $re['utime'];?>
		</td>		
		<td>
			<a href="delete.php?rno=<?php echo $re['sno']; ?>&&del=2"> Delete </a>
		</td>
	</tr> 
<?php
	
	$i++;
	}
	}
	if( $chk == 0 )
	{
			echo "<center> <a class=\"blink\" > No Results Found ...</a>  </center> <br>";
	}
	echo "<center> <a href=\" alog.php\" style=\"color:blue;\"> Show all </a> </center><br>";	
	}
	else
	{
	include('connection.php');
	$a = date('d/m/y');
		
	$q = "select * from user";
	$r = mysql_query($q,$cn) or die("".mysql_error());
	$i =1;
	while($re = mysql_fetch_array($r))
	{
			
		
?>
	<tr>
		<td>
		 	<?php echo $i;?>
		</td>
		<td>
		 	<?php echo $re['sno'];?>
		</td>
		<td>
		 	<?php echo $re['uname']?>
		</td>
		<td>
			<?php echo $re['umail'];?>
		</td>
		<td>
		 	<?php echo $re['uno'];?>
		</td>
        <td>
		 	<?php echo $re['uday'];?>
		</td>
		<td>
		 	<?php echo $re['utime'];?>
		</td>		
		<td>
			<a href="delete.php?rno=<?php echo $re['sno']; ?>&&del=2"> Delete </a>
		</td>
	</tr> 
<?php
	
	$i++;
	}
	}
?>

</table>


        </td>
    </tr>
    <tr>
    <td><br /><br /><br /><br /></td>
    </tr>
</table>        	  

		  
<?php  include('footer.php'); ?>