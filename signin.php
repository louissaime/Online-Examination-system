

<?php include('header.php'); ?>
<?php
	if($_REQUEST['msg'] != "" )
	{
?>
<script>
	alert("<?php  echo $_REQUEST['msg'];?>");
</script>
<?php		
	}
?>
<form action="sin.php" method="get">
<table align="center" width="80%" id="content" cellspacing="0" cellpadding="0">
	<tr>
    	<td><br /><br /></td>
    </tr>
	<tr>
    	<td >
        	<table align="center" cellpadding="5" cellspacing="5"  width="95%" style="border:solid;border-color:#CCC;border-radius:2px;" >
           	 <tr>
            	<td colspan="2" align="center">
                	<h4><u> Sign In </u> </h4>
                </td>
          	  </tr>
            	<tr>
	              	<td>                  	
                    	
                    </td>
                    <td>                    	
                    	
                    </td>                    
                </tr>
                
                <tr>
                	<td align="right">                    	
                    	Email Id:  
                    </td>
                    <td align="left">                   	
                    	<input type="email" name="txt1" placeholder="Enter a mail id " class="txt"  required/>
                    </td>                    
                </tr>
                <tr>
                <td></td><td></td>
                </tr>                
                <tr>
                	<td align="right">                    	
                    	Password:  
                    </td>
                    <td align="left">                   	
                    	<input type="password" name="txt2" placeholder="*********" class="txt"  required/>
                    </td>                    
                </tr>
                <tr>
                <td></td><td></td>
                </tr>
                <tr>
                <td></td><td></td>
                </tr>
                <tr>
                	<td colspan="2" align="right">
                    	<input type="submit" name="go" value="Login " class="but"  />
                    </td>                    
                </tr>
                <tr>
                <td></td><td></td>
                </tr>
            </table>
        	<br />
        	
        	
        </td>
        <td align="center">
        	<img src="images/gift-03.jpg" height="300" width="280" />
        </td>
    </tr>
    <tr>
    	<td><br /><br /></td>
    </tr>
</table>
</form>

<?php include('footer.php'); ?>

