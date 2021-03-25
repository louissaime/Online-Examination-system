<?php include('head.php'); ?>	
<table align="center" width="80%" cellpadding="5" cellspacing="5" class="tbl"> 
	
    <tr>
    	<td>
        <form action="question.php" method="get">
		<table align="center" width="80%" cellpadding="8" cellspacing="0" style="border:dotted; border-width:thin;">
		<tr style="background:#CCC;">
    		<td colspan="2">
       			 <u> Search Particular Question </u> 
        	</td>
   		 </tr>
		<tr >
			<td align="center" class="srh" >
				
				<input type="text" placeholder="eg: que_type (or) User Id" class="txt1" name="txt1"  required  />		
				<input type="submit" value="GO" name="sub" class="but1" />
			</td>
		</tr>
		</table>
		</form>
        <br />
<table align="center" width="95%" cellpadding="5" cellspacing="2" style="font-size:15px" >
<tr  style=" background-color:#f76841; color:#FFFFFF ; padding-left:10%;">
		<td>
		 	S.No
		</td>
		<td>
		 	Question Id
		</td>
		<td >
		 	Question
		</td>
		<td>
		 	Option A 
		</td>
		<td>
		 	Option B 
		</td>
		<td>
		 	Option C 
		</td>
		<td>
		 	Answer
		</td>		
		<td>
			Type
		</td>
        <td>
        	Edit
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
	$q = "select * from que order by sno desc";
	$r = mysql_query($q,$cn) or die("".mysql_error());
	$i =1;
	$chk = 0;
	while($re = mysql_fetch_array($r))
	{
		if($a == $re['sno'] or $re['type']== $a)
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
		 	<?php echo $re['que']?>
		</td>
		<td>
			<?php echo $re['a'];?>
		</td>
		<td>
		 	<?php echo $re['b'];?>
		</td>
        <td>
		 	<?php echo $re['c'];?>
		</td>
		<td>
		 	<?php echo $re['ans'];?>
		</td>		
		<td>
			<?php echo $re['type'];?>
		</td>
        <td>
			<a href="edit.php?rno=<?php echo $re['sno']; ?>  " style="color:blue;"> Edit </a>
		</td>
        <td>
			<a href="delete.php?rno=<?php echo $re['sno']; ?>&&del=1" style="color:blue;"> Delete </a>
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
	echo "<center> <a href=\" question.php\" style=\"color:blue;\"> Show all </a> </center><br>";	
	}
	else
	{
	include('connection.php');
	$a = date('d/m/y');
		
	$q = "select * from que order by sno desc";
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
		 	<?php echo $re['que']?>
		</td>
		<td>
			<?php echo $re['a'];?>
		</td>
		<td>
		 	<?php echo $re['b'];?>
		</td>
        <td>
		 	<?php echo $re['c'];?>
		</td>
		<td>
		 	<?php echo $re['ans'];?>
		</td>		
		<td>
			<?php echo $re['type'];?>
		</td>
        <td>
			<a href="edit.php?rno=<?php echo $re['sno']; ?>" style="color:blue;"> Edit </a>
		</td>
        <td>
			<a href="delete.php?rno=<?php echo $re['sno']; ?>&&del=1" style="color:blue;"> Delete </a>
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