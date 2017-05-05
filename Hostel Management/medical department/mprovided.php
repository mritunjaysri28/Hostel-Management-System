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
<div style="width:100%; height:9%; margin-top:1%; ">
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
     $b=new medback();
		$b->mgiven();
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
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="mpdelete" value="DELETE" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
	</div>
<?php
 }
 if(isset($_POST['insert']))
 {
 ?>
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DATE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" size="12" name="ddate" id="inputField" placeholder="Enter date" />	</div>
	  </div>
  	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		STUDENT NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="student" placeholder="Enter student name" />	</div>
	  </div>	
  	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		ROOM No.	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="no" placeholder="Enter room no." />	</div>
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
																					<option value="1">1st Year</option>  
																					<option value="2">2nd Year</option>  
																					<option value="3">3rd Year</option> 
																					<option value="4">4th Year</option>
																				</select></div>
	  </div>	
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		MEDICINE NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="mname" placeholder="Enter medicine name" />	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		QUANTITY	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="quan" placeholder="Enter quantity" />	</div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		REASON	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="reason" placeholder="Enter reason" />	</div>
	  </div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="minsert" value="SUBMIT" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
	</div>
 <?php	
 }
  if(isset($_POST['minsert']))
  {
  	   $b=new medback();
	   $b->mginsert();  
  }
  if(isset($_POST['mpdelete']))
  {
	  $b=new medback();
		  $b->mgdelete();
  }

?>  		   
</form>
  	
