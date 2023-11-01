<?php
 function __autoload($class)
 {
     include $class.".php";
 }
 if(isset($_POST['pnotice']))
 {
          $pnot=new backend();
	      $pnot->pnote();
 }
?>  	 
<form method="post">																<!-------- upload notice ------>
<div style="height:50%; width:50%; border:2px solid #000000; text-align:center; margin-left:20%; margin-top:3%;">
 <div style="height:60%; width:100%; margin-top:3%;">
  <div style="text-align:center; margin-left:2%; float:left; margin-top:10%; margin-right:12;">	NOTICE	</div>
  <div style="text-align:center; margin-left:2%; float:right; margin-right:12;">	<textarea rows="10" cols="60" name="notice" placeholder="Post notice"></textarea>	</div>
 </div>
 <div style="height:10%; width:100%; margin-top:3%;">
  <div style="text-align:center; margin-left:19%; float:left;">	<input type="submit" name="pnotice" value="POST NOTICE"/>	</div>
  <div style="text-align:center; margin-left:19%; float:left;">	<input type="reset" value="CLEAR"/>	</div>
 </div>
</div> 
</form>