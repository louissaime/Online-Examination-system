
<?php
	include("head.php");
?>

<?php
	if(isset($_REQUEST['store']))
	{
		$type  = 0;
		if($a == "-- Select --" or $a == "")
		{
			$type = 1;
		}
		if($type == 1)
		{
			$msg = "Please Select Any one"; 	
			header('Location:addq.php?msg='.$msg);
		}
		else
		{
		  include('connection.php');
		  $a = $_REQUEST['que'];
		  $b = $_REQUEST['a'];
		  $c = $_REQUEST['b'];
		  $d = $_REQUEST['c'];
		  $e = $_REQUEST['ans'];
		  $f = $_REQUEST['type'];
		  $q = "insert into que(que,a,b,c,ans,type) values('$a','$b','$c','$d','$e','$f')";
		  $r = mysql_query($q,$cn) or die("".mysql_error());
		  header('Location:question.php?msg='."insert Successfully");
		}
	}
	
?>


<form action="addq.php" method="get">
<table width="80%" align="center">
<tr>
	<td>
    	<table align="center" cellpadding="7" cellspacing="13" width="70%" >
				 	<tr>
						<td align="right" style="font-weight:bolder; ">
							Question : 
						</td>
						<td align="left">
							<input type="text" name="que" placeholder="question " required class="txt1" />
						</td>
					</tr>
					<tr>
						<td align="right" style="font-weight:bolder; ">
							Option a : 
						</td>
						<td align="left">
							<input type="text" name="a" placeholder="option a " required class="txt1" />
						</td>
					</tr>
					<tr>
						<td align="right" style="font-weight:bolder; ">
							Option b : 
						</td>
						<td align="left">
							<input type="text" name="b" placeholder="option b " required class="txt1" />
						</td>
					</tr>
					<tr>
						<td align="right"  style="font-weight:bolder; ">
							Option c : 
						</td>
						<td align="left">
							<input type="text" name="c" placeholder="option c " required class="txt1" />
						</td>
					</tr>	<tr>
						<td align="right"  style="font-weight:bolder; ">
							Answer : 
						</td>
						<td align="left">
							<input type="text" name="ans" placeholder="answer" required class="txt1" />
						</td>
					</tr>
						<tr>
						<td align="right"  style="font-weight:bolder; text-decoration:underline;">
							Type : 
						</td>
						<td align="left">
						<select name="type" style="padding:4px; height:32px; width:230px;">
							<option value=""> -- Select -- </option>
							<option value="app"> Apptitude </option>
							<option value="gk"> Gentral Awarness </option>							
                            <option value="c"> Programming In C </option>							
						</select>	
                         &nbsp;&nbsp;&nbsp;&nbsp;
                           <span >
                            <?php
								if($_REQUEST['msg'] != '' )
								{
									echo $_REQUEST['msg']; 
								}
							?>
                            </span>                         								
						</td>
					</tr>
					
						
					<tr>
						<td align="right">
							
						</td>
						<td align="left">
							<center><input type="submit" name="store" value="INSERT"   class="but"/></center>
						</td>
					</tr>
		 </table>
    </td>
</tr>
</table>
</form>
<?php
	include("footer.php");
?>
