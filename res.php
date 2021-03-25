<?php include('header.php'); ?>	
<table align="center" width="80%" cellpadding="5" cellspacing="5" class="tbl"> 
	
    <tr>
    	<td>
       
        <br />
<table align="center" width="80%" cellpadding="8" cellspacing="0" border="1"  bordercolor="#FFFFFF">
	<tr style="background:#CCC;">

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
	include('connection.php');
	$a = date('d/m/y');
	session_start();	
	$q = "select * from result  order by sid desc";
	$r = mysql_query($q,$cn) or die("".mysql_error());
	$i =1;
	while($re = mysql_fetch_array($r))
	{
		if($re['uid'] == $_SESSION['uid'] and $re['result'] != "")
		{
		   if($i %2 == 0 )
		   {
	?>
	<tr bgcolor="#FFFF99">
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
		   }
		   else
		   {
  ?>
  <tr bgcolor="#FFFFFF">
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
		   }
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