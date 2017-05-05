<?php
$url="";
function __autoload($class)
  {
    include $class.".php";
  }
  if(isset($_POST['available']))
  {
    $url="medicine details.php";
  }
  else if(isset($_POST['provided']))
  {
    $url="midicine provided.php";
  }
  if(isset($_POST['requirement']))
  {
    $url="Medicine requirement.php";
  }
  if(isset($_POST['recevied']))
  {
    $url="medicine recevied.php";
  }
   
?>
<html>
 <head>
  <title>
   MEDICAL
  </title>
 </head>

<body>
<form method="post">
<div style="height:100%; width:100%;">
 
<!---TITLE DIV---->

<div style="height:23%; width:100%; border:2px solid; font:Geneva, Arial, Helvetica, sans-serif; margin-top:10px;">
   <div style="float:left; text-align:center; margin-left:2%;">
      <table>
	    <tr>
		  <td width="238">NAME </td>
		  <td width="377">User name</td>
		</tr>
		<tr>
		  <td>POST</td>
		  <td>user post</td>
		 </tr>
		 <tr>
		   <td>CONTACT No.</td>
		   <td>User contact no.</td>
		  </tr>
		  <tr>
		     <td>EMIAL-ID</td>
			 <td>user email-id</td>
		  </tr>
		  <tr>
		    <td>ADDRESS</td>
			<td>user permanent address</td>
		   </tr>
		   <tr>
		     <td>DEPARTMENT</td>
			 <td>MEDICAL</td>
			</tr> 
		 </table>  		    
   </div>





   <div style="float:right;">
   <div style="height:30%;  float:right; margin-left:45px; margin-right:35px;">
	 <a href="?url=user" target="_blank">LOG OUT</a>       
	</div>
   	<div style="height:30%; float:right; margin-right:15px;">
	 LOGIN ID
	</div>
   </DIV>	
</div>
 
<!---Buttons----->
 <div style="height:9%; width:100%; border:2px solid #000000; margin-top:1%;">
   <div style="height:100%; width:auto; margin-left:2%; text-align:center; float:left;">		<input type="submit" name="available" value="AVILABLE MEDCINE" />	</div>
   <div style="height:100%; width:auto; margin-left:2%; text-align:center; float:left;">		<input type="submit" name="provided" value="MEDICINE PROVIDED" />	</div>
   <div style="height:100%; width:auto; margin-left:2%; text-align:center; float:left;">		<input type="submit" name="requirement" value="MEDCINE REQUIREMENT" />	</div>
   <div style="height:100%; width:auto; margin-left:2%; text-align:center; float:left;">		<input type="submit" name="recevied" value="MEDICINE RECEVIED" />	</div>
 </div>

<!-----main div--->
 <div style="height:55%; width:100%; margin-top:1%; text-align:center;">
   <iframe src="../notice board.php" scrolling="yes" width="100%" marginheight="5%" height="100%"></iframe>
 </div>
  
  <!---------ABOUT-US---->
  <div style="height:5%; width:100%; text-align:center; margin-top:1%;">
    <hr width="70%" color="#CC0000">

	© COPYRIGHT | GROUP NAME
  </div>
</div>
</form>
</body>
</html>