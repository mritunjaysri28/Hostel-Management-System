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
 {
     $b=new nmback();
		$b->nmdetails();
 }

 
 																		//insert or update table
 if(isset($_POST['insert']))
 {
 		
 ?>

 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		DATE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">     <input type="text" name="nmdate" placeholder="Enter date of starting" />	    </div>
	  </div>

	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		NEWSPAPER OR MAGZINE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">     <input type="text" name="nmname" placeholder="Enter newsparer or magzine name" />	    </div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		TYPE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">     <input type="text" name="nmtype" placeholder="Enter type of paper" />	    </div>
	  </div>
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		MONTHLY COST	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="cost" placeholder="Enter monthly cost" />	</div>
	  </div>
	  <div style="width:100%; float:left;"></div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="dinsert" value="INSERT" />	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">     <input name="reset" type="reset" value="CLEAR" />	    </div>
	  </div>		
	</div> <?php	
 }
 if(isset($_POST['dinsert']))
  {
  		$b=new nmback();
		   $b->nminsert();
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