<?php
	session_start();
	if($_SESSION['eid'] == session_id())
	{
		
?>
<?php include('header.php'); ?>

<script>
	//window:setTimeout('window:location="index.php";',60000);
</script>

 <!-- Hide All details !-->	
<script >
	//setInterval("highELE">function () {alert("highVAL">"Hello")}, "highVAL">1000);
	window.setInterval(n, 120000);
	function n()
	{
		document.getElementById("pid").style.display="none";	
		document.getElementById("cid").style.display="block";	
	}
</script>
 <!-- Time Loading !-->	
<div id="timer" class="time">2 :00 </div>
<script type="text/javascript">
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML = 
current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            setTimeout(tick, 1000);
        } else {
             
            if(mins > 1){
                 
               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst    
               setTimeout(function () { countdown(mins - 1); }, 1000);
                     
            }
        }
    }
    tick();
}
 
countdown(2);
 
</script>
 




<form action="" method="">
<table align="center" width="80%" cellpadding="10" cellspacing="0" >
 <tr id="pid">
 	<td>
    	<?php
	include('connection.php');
	session_start();
	$q = "select * from test";
	$r = mysql_query($q,$cn) or die("".mysql_error());
	while($re = mysql_fetch_array($r))
	{
		if($re['user'] == $_SESSION['uid'] && $re['etime'] == $_SESSION['etime'] )
		{
?>		
	<table width="100%">	
		<tr>
			<td align="center"> 				
 				<table width="50%"  cellpadding="5" style="border:solid;border-width:thin;" >
                	<tr>
							<td colspan="3" > <b> Question : </b> <?php echo $re['que']; ?> </td>
					</tr>
					<tr>
						<td align="left" width="33%"> 
                        	<input type="radio" name="<?php echo $re['sid']  ?>" value="<?php echo $re['a']  ?>" /><?php echo $re['a']  ?> 		
                        </td>
						<td align="left" width="33%">
                        	 <input type="radio" name="<?php echo $re['sid']  ?>" value="<?php echo $re['b']  ?>" /><?php echo $re['b']  ?>
                         </td>
						<td align="left" width="34%">
                        	 <input type="radio" name="<?php echo $re['sid']  ?>" value="<?php echo $re['c']  ?>" /><?php echo $re['c']  ?>
                        </td>						
					</tr>
				</table>				
			</td>								
		</tr>
		<tr>
		<td> <hr style="border:outset; border-width:thin; width:400px "; /> </td>
        </tr>
     </table>   
<?php
		}
	}
?>
    </td>
 </tr>   
 <tr>
   <td align="center">
   		<div id="cid" style="color:red;">
        	Your Time Is Over...Please Click submit and go to your profile page..
        </div>
	 <br />	<input type="submit" value="SUBMIT" name="sub" class="but" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
 </tr>
</table>
</form>


<?php
	if(isset($_REQUEST['sub']))
	{
		
		session_start();
		$correct = 0;
		$wrong = 0;
		$q = "select * from test";
		$r = mysql_query($q,$cn) or die("".mysql_error());
		while($re = mysql_fetch_array($r))
		{
			$a = $re['sid'];
			if(isset($_REQUEST[$a]))
			{
				if($re['ans'] == $_REQUEST[$a])
				{
					$correct++;
				}
				else
				{
					$wrong++;
				}
				$z++;
			}
		}
		if($correct > 2 )
		{
			$res = "Pass";
		}
		else
		{
			$res = "Fail";
		}

		$query	 = " update result set  ";		
		$query	.= " correct = '". $correct ."' , ";
		$query	.= " wrong = '". $wrong ."' , ";
		$query	.= " result = '". $res ."' , ";
		$query	.= " time = '". date('d/m/Y h:i:s')."'  ";		
		$query	.= "where uid='" .$_SESSION['uid']."'  and etime='".$_SESSION['etime']."' ";
		$r = mysql_query($query,$cn)or die("".mysql_error());
		
		?>
        <script> window:location="cancel.php";  </script>
        <?php
	}

?>
<?php include('footer.php'); ?>
<?php
	}
	else
	{
		header('Location:index.php');
	}
?>