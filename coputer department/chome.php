<?php session_start();
if($_SESSION['SRNO']!=NULL){

if(@$_REQUEST['url']=="out")
  { 
  		session_destroy();
		$url="../rules.php";
  }

  function __autoload($class)
  {
  		include $class.".php";
  }
   $url="../NOTICE/notice board.php";
  if(isset($_POST['details']))
  {
  		$url="cdetails.php";
  }	   
  else if(isset($_POST['stu']))
  {
        $url="cassess.php";
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
	  GAGETS DEPARTMENT
	 </title>
	 <link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
	 <script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
	 <script type="text/javascript">
		window.onload = function()
		{
			new JsDatePick
			({
				useMode:2,
				target:"inputField",
				dateFormat:"%d-%M-%Y"
			});
		};
	</script>

  </head>
<body background="../PICS/Bgroung.png">
<form method="post">
 
<div style="height:15%; width:100%; text-align:center;">
  <div style="height:100%; width:40%; text-align:center; float:left;">
    <div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	NAME	</div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo $_SESSION['NAME']; ?>	</div>
	</div>  
	<div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	DEPARTMENT	</div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo  $_SESSION['dept']; ?>	</div>
	</div>  
	<div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	CONTACT	NO. </div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo $_SESSION['PHONE']; ?>	</div>
	</div>  
	<div style="text-align:center;">
	  <div style="text-align:center; width:48%; float:left;">	EMAIL-ID	</div>
	  <div style="text-align:center; width:48%; float:left;">	<?php echo $_SESSION['email']; ?>	</div>
	</div>
  </div>
  
  <div style="height:100%; width:40%; text-align:center; float:right;">
	<div style="text-align:center;">
	  <div style="text-align:center; width:10%; float:left;margin-left:40%;">	<?php echo $_SESSION['id']; ?>	</div>
	  <div style="text-align:center; width:10%; float:right; margin-right:40%;">	<a href="?url=out"><img src="../PICS/014.ico" height="45%" width="75%" /></a>	</div>
	</div>
  </div>
</div>


<div style="height:15%; width:100%; margin-top:1%;">
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">   <input type="submit" name="details" value="GADGETS DETAILS" />	</div>
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">	<input type="submit" name="stu" value="STUDENT ACCESS" />  </div>
	<div style="text-align:center; margin-left:2%; float:left; margin-top:0.5%;">	<input type="submit" name="notice" value="NOTICE" />       </div> 
</div>

<div id="inputfield" style="height:60%; width:100%; border:2px solid #996600; margin-top:1%;">
<iframe src="<?php echo $url; ?>" height="100%" width="100%" scrolling="auto" frameborder="0"></iframe>
</div>
  
</form>
</body>
</html>  	  
<?php }else{header("location:../rules.php");}?>	  
