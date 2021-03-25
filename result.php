<?php include('head.php'); ?>	
<table align="center" width="80%" cellpadding="5" cellspacing="5" class="tbl"> 
	
    <tr>
    	<td>
        <form action="result.php" method="get">
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
		 	User Id
		</td>		
		<td>
		 	Correct
		</td>
		<td>
		 	Wrong
		</td>
		<td>
		 	Result
		</td>		
		<td>
			Time
		</td>
	</tr>
<?php
	if(isset($_REQUEST['sub']))
	{
	include('connection.php');
	
	$a = $_REQUEST['txt1'];		
	$q = "select * from result order by sid desc";
	$r = mysql_query($q,$cn) or die("".mysql_error());
	$i =1;
	$chk = 0;
	while($re = mysql_fetch_array($r))
	{
		if(($a == $re['uid'] or $a == $re['etime']) and $re['result'] != "" )
		{
			$chk = 1;
?>
	<tr>
		<td>
		 	<?php echo $i;?>
		</td>
		<td>
		 	<?php echo $re['uid'];?>
		</td>				
		<td>
		 	<?php echo $re['correct'];?>
		</td>
        <td>
		 	<?php echo $re['wrong'];?>
		</td>
		<td>
		  <u><b>
          <?php
		  		if($re['result'] == "Fail" )
				{
					echo "<a style=\"color:red;\" >" .$re['result']."</a>";
				}
				else
				{
					echo "<a style=\"color:green;\" >" .$re['result']."</a>";
				}
		  			
		  ?>
           </u></b>
		</td>		
		<td>
			<?php echo $re['time'];?>
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
	echo "<center> <a href=\" result.php\" style=\"color:blue;\"> Show all </a> </center><br>";	
	}
	else
	{
	include('connection.php');
	$a = date('d/m/y');
		
	$q = "select * from result order by sid desc";
	$r = mysql_query($q,$cn) or die("".mysql_error());
	$i =1;
	while($re = mysql_fetch_array($r))
	{
		if($re['result'] != "" )	
		{   
		
?>
	<tr>
		<td>
		 	<?php echo $i;?>
		</td>
		<td>
		 	<?php echo $re['uid'];?>
		</td>				
		<td>
		 	<?php echo $re['correct'];?>
		</td>
        <td>
		 	<?php echo $re['wrong'];?>
		</td>
		<td>
		  <u><b>
          <?php
		  		if($re['result'] == "Fail" )
				{
					echo "<a style=\"color:red;\" >" .$re['result']."</a>";
				}
				else
				{
					echo "<a style=\"color:green;\" >" .$re['result']."</a>";
				}
		  			
		  ?>
           </u></b>
		</td>		
		<td>
			<?php echo $re['time'];?>
		</td>
	</tr> 
<?php
	
	$i++;
		}
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