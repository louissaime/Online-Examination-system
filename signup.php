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

<form action="sup.php" method="get">
<table align="center" width="80%" id="content" cellspacing="0" cellpadding="0">
	<tr>
    	<td><br /><br /></td>
    </tr>
	<tr>
    	<td >
        	<table align="center" cellpadding="5" cellspacing="5"  width="95%" style="border:solid;border-color:#CCC;border-radius:2px;" >
           	 <tr>
            	<td colspan="2" align="center">
                	<h4><u> Sign Up </u> </h4>
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
                    	Name:  
                    </td>
                    <td align="left">                   	
                    	<input type="text" name="txt1" placeholder="user name " class="txt"  required/>
                    </td>                    
                </tr>                  
                <tr>
                	<td align="right">                    	
                    	Email Id:  
                    </td>
                    <td align="left">                   	
                    	<input type="email" name="txt2" placeholder="enter a mail id " class="txt"  required/>
                    </td>                    
                </tr>
                <tr>
                	<td align="right">                    	
                    	Phone Number:  
                    </td>
                    <td align="left">                   	
                    	<input type="text" name="txt3" placeholder="848328117" pattern="([0-9]){10}" class="txt"  required/>
                    </td>                    
                </tr>               
                <tr>
                	<td align="right">                    	
                    	Password:  
                    </td>
                    <td align="left">                   	
                    	<input type="password" name="txt4" placeholder="password" class="txt"  required/>
                    </td>                    
                </tr>
                  <tr>
                	<td align="right">                    	
                    	Retype Password:  
                    </td>
                    <td align="left">                   	
                    	<input type="password" name="txt5" placeholder="retype password" class="txt"  required/>
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

