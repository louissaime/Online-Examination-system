<?php include('header.php'); ?>

<?php
	  include('connection.php');
	  session_start();	
	  $query = "select * from user";
	  $result = mysql_query($query , $cn) or die("query error ". mysql_error());
	  while($row = mysql_fetch_array($result))
	  {			
		  if($_SESSION['uid'] == $row['sno'])
		  {
			  
			  
			  
?>

<form action="sup.php" method="get">
<table align="center" width="80%" id="content" cellspacing="0" cellpadding="0">
	<tr>
    	<td><br /><br /></td>
    </tr>
	<tr>
    	<td >
        	<table align="center" cellpadding="5" cellspacing="5"  width="95%" style="border:solid;border-color:#CCC;border-radius:2px;" >
           	 <tr style="background:#CCC;">
            	<td colspan="2" align="center">
                	<h4><u> Profile Update </u> </h4>
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
                    	<input type="text" name="txt1" placeholder="user name " value="<?php echo $row['uname'] ?>" class="txt"  required/>
                    </td>                    
                </tr>                  
                <tr>
                	<td align="right">                    	
                    	Email Id:  
                    </td>
                    <td align="left">                   	
                    	<input type="email" name="txt2" placeholder="enter a mail id " value="<?php echo $row['umail'] ?>"  class="txt"  required/>
                    </td>                    
                </tr>
                <tr>
                	<td align="right">                    	
                    	Phone Number:  
                    </td>
                    <td align="left">                   	
                    	<input type="text" name="txt3" placeholder="848328117" pattern="([0-9]){10}" value="<?php echo $row['uno'] ?>"  class="txt"  required/>
                    </td>                    
                </tr>  
                <tr>
                	<td colspan="2" align="right">
                    	<input type="submit" name="up" value=" Update " class="but"  />
                    </td>                    
                </tr> 
                </table>
                <br>
                <table align="center" cellpadding="5" cellspacing="5"  width="95%" style="border:solid;border-color:#CCC;border-radius:2px;" >
           		 <tr style="background:#CCC;">
            	<td colspan="2" align="center">
                	<h4><u> Password Change </u> </h4>
                </td>
          	  </tr>
            
                <tr>
                	<td align="right">                    	
                    	Password:  
                    </td>
                    <td align="left">                   	
                    	<input type="password" name="txt4" placeholder="password" class="txt"  />
                    </td>                    
                </tr>
                  <tr>
                	<td align="right">                    	
                    	Retype Password:  
                    </td>
                    <td align="left">                   	
                    	<input type="password" name="txt5" placeholder="retype password" class="txt"  />
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
                    	<input type="submit" name="uppas" value=" Update " class="but"  />
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

<?php 
	}
	}
include('footer.php'); 
?>

