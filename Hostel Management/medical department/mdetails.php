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
		$b->details();
 }
  if(isset($_POST['delete']))
 {
?>
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		MEDICINE NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="mname" placeholder="Enter medicine name" />	</div>
	  </div>
	  <div style="height:9%; width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="submit" name="mdelete" value="DELETE" //>	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="reset" value="CLEAR" />	</div>
	  </div>		
	</div>
<?php
 }
 if(isset($_POST['mdelete']))
 {
 	$b=new medback();
	$b->mdelete();
  }	

 if(isset($_POST['insert']))
 {$d="";
 		
 ?>
 	<div style="height:90%; width:90%; margin-left:1%; margin-top:1%;">
	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		MEDICINE NAME	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="mname" placeholder="Enter medicine name" />	</div>
	  </div>
  	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		MAX STOCK	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="medmax" placeholder="Enter max. medicine" />	</div>
	  </div>	
  	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		NO. OF MEDICINE</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<input type="text" name="medno" placeholder="Enter no. of medicine" />	</div>
	  <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<?php echo $d;?>	</div>
	  </div>	 	
 	  <div style="width:100%; float:left;">
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		USE	</div>
	    <div style="width:25%; float:left; margin-top:1%; margin-left:1%;">		<textarea rows="10" cols="60" name="meduse" placeholder="Enter use of medicine"></textarea>	</div>
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
	//		$c=(NULL,NULL,NULL);
		$c=$b->retrive();
			$d="STOCK-AVAILABLE(.".$c.".)";
		$c=$c+$_POST['medno'];
			$_POST['medno']=$c;
		if($_POST['medmax']>=$_POST['medno'])
		{
		   $b=new medback();
		   $b->minsert();
		}
		else
		{
			echo '<script>alert("No. of medicine is less than max-stock!")</script>';
		}  
  }

?>  		   
</form>