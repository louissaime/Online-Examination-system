
<?php
	include("head.php");
?>

<?php
	if(isset($_REQUEST['store']))
	{
		include('connection.php');
		$id = $_REQUEST['id'];
		$a = $_REQUEST['que'];
		$b = $_REQUEST['a'];
		$c = $_REQUEST['b'];
		$d = $_REQUEST['c'];
		$e = $_REQUEST['ans'];
		$f = $_REQUEST['type'];
		echo $a ,$b,$c,$d,$e,$f,$id;
		$q = "update que set que='{$a}',a='{$b}',b='{$c}',c='{$d}',ans='{$e}',type='{$f}' where sno='{$id}'";
		if( mysql_query($q,$cn) )
		{
			header('Location:question.php?msg='."update Successfully");
		}		
	}
	
?>

<?php
	  include('connection.php');
	  $a =$_REQUEST['rno'];
	  session_start();	
	  $query = "select * from que where sno='$a'";
	  $result = mysql_query($query , $cn) or die("query error ". mysql_error());
	  while($row = mysql_fetch_array($result))
	  {			
		  
			  
			  
?>
<form action="edit.php" method="get">
<table width="80%" align="center">
<tr>
	<td>
    	<table align="center" cellpadding="7" cellspacing="13" width="70%" >
				 	<tr>
						<td align="right" style="font-weight:bolder; ">
							Question : 
						</td>
						<td align="left">
                        	<input type="hidden"  value="<?php echo $row['sno'] ?>"  name="id" class="txt" />
							<input type="text" name="que" placeholder="question " value="<?php echo $row['que'] ?>" required class="txt1" />
						</td>
					</tr>
					<tr>
						<td align="right" style="font-weight:bolder; ">
							Option a : 
						</td>
						<td align="left">
							<input type="text" name="a" placeholder="option a "  value="<?php echo $row['a'] ?>" required class="txt1" />
						</td>
					</tr>
					<tr>
						<td align="right" style="font-weight:bolder; ">
							Option b : 
						</td>
						<td align="left">
							<input type="text" name="b" placeholder="option b "  value="<?php echo $row['b'] ?>" required class="txt1" />
						</td>
					</tr>
					<tr>
						<td align="right"  style="font-weight:bolder; ">
							Option c : 
						</td>
						<td align="left">
							<input type="text" name="c" placeholder="option c "  value="<?php echo $row['c'] ?>" required class="txt1" />
						</td>
					</tr>	<tr>
						<td align="right"  style="font-weight:bolder; ">
							Answer : 
						</td>
						<td align="left">
							<input type="text" name="ans" placeholder="answer"  value="<?php echo $row['ans'] ?>"  required class="txt1" />
						</td>
					</tr>
						<tr>
						<td align="right"  style="font-weight:bolder; text-decoration:underline;">
							Type : 
						</td>
						<td align="left">
						<select name="type" style="padding:4px; height:32px; width:230px;">
                        	<?php
								if($row['type'] == "app" )
								{
							?>							
							<option value="app"> Apptitude </option>
							<option value="gk"> Gentral Awarness </option>							
                            <option value="c"> Programming In C </option>	
                            <?php
								}
							?>
                            <?php
								if($row['type'] == "gk" )
								{
							?>							
                            <option value="gk"> Gentral Awarness </option>							
							<option value="app"> Apptitude </option>							
                            <option value="c"> Programming In C </option>	
                            <?php
								}
							?>
                            <?php
								if($row['type'] == "c" )
								{
							?>							
							<option value="c"> Programming In C </option>	
                            <option value="app"> Apptitude </option>
							<option value="gk"> Gentral Awarness </option>						
                            
                            <?php
								}
							?>
						</select>	                         								
						</td>
					</tr>
					
						
					<tr>
						<td align="right">
							
						</td>
						<td align="left">
							<center><input type="submit" name="store" value="UPDATE"   class="but"/></center>
						</td>
					</tr>
		 </table>
    </td>
</tr>
</table>
</form>
<?php
		  }  include("footer.php");
?>
