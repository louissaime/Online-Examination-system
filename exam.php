<?php include('header.php'); ?>

<table align="center" width="80%" id="content" cellspacing="0" cellpadding="0" >
	<tr>
    	<td>
			 <table width="55%" align="center" cellpadding="10">
        		<tr>
            		<td  style="color:red; font-weight:bolder;">
                    	<br /><br />
                		<u> Note  : </u>
                        <br> <br>  Once You start exam,you finish your exam  
                         <br> <br>  Exam will be contact in <u> One </u> Session ..
                         <br /><BR />Duration of exam is <u> 2:00 min </u>..
                          <br>  <br> click following link to start exam...<br>  <br>
                          <form action="start.php">
                          	<select name="type" style="padding:4px; height:32px; width:230px;">
							<option value=""> -- Select -- </option>
							<option value="app"> Apptitude </option>
							<option value="gk"> Gentral Awarness </option>							
                            <option value="c"> Programming In C </option>							
							</select>	                          	
                            <input type="submit" value=" GO " name="start"  class="btn" />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                           <span >
                            <?php
								if($_REQUEST['msg'] != '' )
								{
									echo $_REQUEST['msg']; 
								}
							?>
                            </span>
                          </form>
                	</td>
          	  </tr>
       		 </table> 
       </td>
    </tr>
    <tR>
    	<td style="height:180px;">
        	
        </td>
    </tR>
</table>      

 
            


<?php include('footer.php'); ?>