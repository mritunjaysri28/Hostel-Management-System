<head>
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />

<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
		});
	};
</script>
</head>
<form method="post">
<div style="width:100%; height:9%; margin-top:1%;">
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="table" value="Show Table" />		</div>
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="insert" value="Insert Data" />	</div>
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="delete" value="Delete entry" />	</div>
</div>

<?php
 function __autoload($class)
 { 	
 	include $class.".php";
 }
 if(isset($_POST['table']))
 {
     $b=new comback();
		$b->ugiven();
 }
  if(isset($_POST['delete']))
 {
?>

<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		Srno	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="srno" placeholder="Enter srno to delete" />	</div>
	  </div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="cadelete" value="DELETE" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
</div>

<?php
 }
 if(isset($_POST['insert']))
 {
 ?>

<div style="width:90%; margin-left:1%; margin-top:1%;">
  	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		USER NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="uname" placeholder="Enter user name" />	</div>
	  </div>	
 	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		COURSES	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<select name="co">
																					<option value="B.Tech(cs)">B.Tech(cs)</option>
																					<option value="B.Tech(me)">B.Tech(me)</option>
																					<option value="B.Tech(ec)">B.Tech(ec)</option>
																					<option value="B.Tech(ce)">B.Tech(ce)</option>
																					<option value="DIPLOMA(me)">DIPLOMA(me)</option>
																					<option value="DIPLOMA(ce)">DIPLOMA(ce)</option>
																					<option value="M. B. A">M. B. A</option>
																				</select>	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		YEAR	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<select name="ye">	
																					<option value="1st Year">1st Year</option>  
																					<option value="2nd Year">2nd Year</option>  
																					<option value="3rd Year">3rd Year</option> 
																					<option value="4th Year">4th Year</option>
																				</select></div>
	  </div>	
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		ROOM NO.	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="room" placeholder="Enter room no." />	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		COMPUTER NO.	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="com" placeholder="Enter computer no." />	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DATE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" size="12" name="date" id="inputField" placeholder="Enter date" />	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:10%; float:left; margin-top:1%; margin-left:1%; ">		FROM	</div>
	    <div style="width:20%; float:left; margin-top:1%; margin-left:1%; ">
		 																		<select name="fh">
																					   <option>HOUR</option>
																						 <?php for($i=00;$i<13;$i++)
																							   {  ?>  
																							      <option value="<?php echo $i; ?>">      <?php echo $i; ?>      </option>
																						  <?php } ?>
																				</select>	 
																				<select name="fm">
																					   <option>MINUTE</option>
																						 <?php for($i=00;$i<61;$i++)
																							   {?>  
																							      <option value="<?php echo $i; ?>">	<?php echo $i; ?>	</option>
																						 <?php } ?>
																				</select>
																				<select name="fp">
																					   <option value="am">am</option>
																					   <option value="pm">pm</option>
																				</select>	 </div>
	    <div style="width:5%; float:left; margin-top:1%; margin-left:2%; ">		TO	</div>
	    <div style="width:20%; float:left; margin-top:1%; margin-left:1%; ">	
																			 	 <select name="th">
																					   <option>HOUR</option>
																						 <?php for($i=0;$i<13;$i++)
																							   {  ?>  
																							      <option value="<?php echo $i; ?>">      <?php echo $i; ?>      </option>
																						  <?php } ?>
																				</select>	 
																				<select name="tm">
																					   <option>MINUTE</option>
																						 <?php for($i=0;$i<61;$i++)
																							   {?>  
																							      <option value="<?php echo $i; ?>">	<?php echo $i; ?>	</option>
																						 <?php } ?>
																				</select>
																				<select name="tp">
																					   <option value="am">am</option>
																					   <option value="pm">pm</option>
																				</select>	 </div>

	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		REMARK	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<textarea rows="5" cols="30" name="rem" placeholder="Enter remark"></textarea>	</div>
	  </div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="cainsert" value="SUBMIT" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
</div>
	
 <?php	
 }
  if(isset($_POST['cainsert']))
  {
  	   $b=new comback();
	   $b->uinsert();  
  }
  if(isset($_POST['cadelete']))
  {
	  $b=new comback();
		  $b->udelete();
  }
?>   
</form>