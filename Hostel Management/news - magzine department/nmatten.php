<form method="post">
<div style="width:100%; height:9%; margin-top:1%; ">
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="table" value="Show Table" />		</div>
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="insert" value="Insert Data" />	</div>
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="delete" value="Delete Data" />	</div>  
</div>

<?php
 function __autoload($class)
 { 	
 	include $class.".php";
 }
 
 															//show tables
 if(isset($_POST['table']))
 {?>
   <div style="width:100%;">
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		MONTH	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<select name="nmmon">
																					<option value="1">JAN</option>
																					<option value="2">FEB</option>
																					<option value="3">MAR</option>
																					<option value="4">APR</option>
																					<option value="5">MAY</option>
																					<option value="6">JUNE</option>
																					<option value="7">JULY</option>
																					<option value="8">AUG</option>
																					<option value="9">SEP</option>
																					<option value="10">OCT</option>
																					<option value="11">NOV</option>
																					<option value="12">DEC</option>
																				</select>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="nmtable" value="SEARCH" //>	</div>
	</div>
	<?php 
 }
 ?> 	<div style="height:auto; width:100%; margin-top:1%; float:left;">
<?php
 		if(isset($_POST['nmtable']))
		{
     		$b=new nmback();
			$b->attendetails();
		}?></div></div><?php

 
 																		//insert or update table
 if(isset($_POST['insert']))
 {
 		
 ?>

 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		NEWSPAPER OR MAGZINE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">     <input type="text" name="nmname" placeholder="Enter newsparer or magzine name" />	    </div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DATE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">     <input type="text" name="nmdate" placeholder="Enter date of starting" />	    </div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		STATUS	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<select name="stat">
																						<option value="R">RECEVIED</option>
																						<option value="N">NOT-RECEVIED</option>
																				</select>	</div>
	  </div>
	  <div style="width:100%; float:left;"></div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="nminsert" value="INSERT" />	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">     <input name="reset" type="reset" value="CLEAR" />	    </div>
	  </div>		
	</div> <?php	
 }
 if(isset($_POST['nminsert']))
  {
  		$b=new nmback();
		   $b->atteninsert();
  }

															//delete table
  if(isset($_POST['delete']))
 {
?>
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		NEWSPAPER OR MAGZINE NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="dname" placeholder="Enter device name" />	</div>
	  </div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="ddelete" value="DELETE" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
	</div>
<?php
 }
 if(isset($_POST['ddelete']))
 {
 	$b=new nmback();
	$b->nmdelete();
  }	


?>  		   
</form>