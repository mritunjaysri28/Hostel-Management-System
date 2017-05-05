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
  <div style="text-align:center; margin-left:1%; float:left;">		<input type="submit" name="delete" value="Delete Data" />	</div>
</div>

<?php
 function __autoload($class)
 { 	
 	include $class.".php";
 }
 
 if(isset($_POST['table']))
 {
     $b=new medback();
		$b->dvisit();
 }
 
 if(isset($_POST['delete']))
 {
?>
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DATE OF VISIT (YY-MM-DD)	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" size="12" name="ddate" id="inputField" placeholder="Enter date" />	</div>
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
	$b=new medback();
	$b->ddelete();
 }
 
 if(isset($_POST['insert']))
 {
 ?>
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DOCTOR NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="dname" placeholder="Enter doctor name" />	</div>
	  </div>
  	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DATE (YY-MM-DD)	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" size="12" name="ddate" id="inputField" placeholder="Enter date" />	</div>
	  </div>	
  	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		REMARK	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="dremark" placeholder="Enter remark" />	</div>
	  </div>	
 	  <div style="width:100%; float:left;">
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="dinsert" value="SUBMIT" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
	 </div>
   </div>
 <?php	
 }
  if(isset($_POST['dinsert']))
  {
  	   $b=new medback();
	   $b->dinsert();
  }

?>  		   
</form>