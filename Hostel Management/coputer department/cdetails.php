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
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="delete" value="Delete Data" />	</div>  
</div>

<?php
 function __autoload($class)
 { 	
 	include $class.".php";
 }
 
 															//show tables
 if(isset($_POST['table']))
 {
     $b=new comback();
		$b->details();
 }

 
 																		//insert or update table
 if(isset($_POST['insert']))
 {
 		
 ?>

 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DATE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" size="12" name="ddate" id="inputField" placeholder="Enter date" />	</div>
	  </div>

	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DEVICE NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="dname" placeholder="Enter device name" />	</div>
	  </div>
	  
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		HOSTEL	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<select name="dhostel">
																					<option value="BOYS HOSTEL">BOYS HOSTEL</option>
																					<option value="GIRLS HOSTEL">GIRLS HOSTEL</option>
																				</select>	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		STATUS	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<select name="dsta">
																					<option value="WORKING">WORKING</option>
																					<option value="ISSUE">NOT WORKING</option>
																				</select>	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		LOCATED NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<select name="dloc">
																					<option value="NH(GROUND FLOOR">GROUND FLOOR</option>
																					<option value="1st FLOOR">1st FLOOR</option>
																					<option value="2nd FLOOR">2nd FLOOR</option>
																					<option value="3rd FLOOR">3rd FLOOR</option>
																				</select>	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		PROBLEM	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="dprob" placeholder="Enter device problem" />	</div>
	  </div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="dinsert" value="INSERT" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
	</div> <?php	
 }
 if(isset($_POST['dinsert']))
  {
  		$b=new comback();
		   $b->cinsert();
  }

															//delete table
  if(isset($_POST['delete']))
 {
?>
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DEVICE NAME	</div>
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
 	$b=new comback();
	$b->cdelete();
  }	


?>  		   
</form>