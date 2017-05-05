<?php
  function __autoload($class)
  {
  		include $class.".php";
  }
  $url="";
  if(isset($_POST['regiester']))
  {
  		$url="sturegiester.php";
  }	   
  else if(isset($_POST['visit']))
  {
        $url="dvisit.php";
  }
  else if(isset($_POST['given']))
  {
  		$url="mprovided.php";
  }
  else if(isset($_POST['notice']))
  {
  		$url="../NOTICE/notice board.php";
  }
?>   				

<html>
  <head>
    <title>
	  MEDICAL DEPARTMENT
	 </title>
  </head>
<body>
<form method="post">
 
<div style="height:15%; width:100%; text-align:center; border:2px solid #000000;">
  <div style="height:100%; width:40%; text-align:center; border:2px solid #000000; float:left;">
    <div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	NAME	</div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo "name"; ?>	</div>
	</div>  
	<div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	DEPARTMENT	</div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo "department"; ?>	</div>
	</div>  
	<div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	CONTACT	NO. </div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo "contact no."; ?>	</div>
	</div>  
	<div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	EMAIL-ID	</div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo "email-id"; ?>	</div>
	</div>
	<div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	NAME	</div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo "name"; ?>	</div>
	</div>
  </div>
  
  <div style="height:100%; width:40%; text-align:center; border:2px solid #000000; float:right;">
	<div style="text-align:center;">
	  <div style="text-align:center; width:10%; float:right;">	<?php echo "user-id"; ?>	</div>
	  <div style="text-align:center; width:10%; float:right;">	<a href="../index1.php">	LOGOUT	</a>	</div>
	</div>
  </div>
</div>


<div style="height:15%; width:100%; margin-top:1%; border:2px solid #000000;">
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">   <input type="submit" name="regiester" value="REGIESTRATION" />	</div>
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">	<input type="submit" name="room" value="ROOM ALLOTEMENT" />  </div>
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">	<input type="submit" name="atten" value="ATTENDENCE" />       </div>
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">	<input type="submit" name="notice" value="NOTICE" />       </div>
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">	<input type="submit" name="comp" value="COMPLLAINT" />       </div>
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">	<input type="submit" name="feed" value="FEEDBACK" />       </div>
</div>

<div style="height:60%; width:100%; border:2px solid #000000; margin-top:1%;">
<iframe src="<?php echo $url; ?>" height="100%" width="100%" scrolling="auto" frameborder="0"></iframe>
</div>
  
</form>
</body>
</html>  	  
