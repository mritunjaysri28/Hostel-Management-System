<?php
function __autoload($class)
  {
  		include $class.".php";
  }
  
?>   		  
<div style="height:99%; width:98%; margin-left:1%; float:left;">
 <div style="height:7%; width:100%; font:Verdana, Arial, Helvetica, sans-serif medium; background-color:#FFCC99; text-align:center;">
  NOTICE BOARD
 </div>
 <div style="height:100%; width:100%;">
  <marquee height="90%" direction="up">
	<ul type="circle">
		 <?php
				$log = new notebackend;
				$in = $log->notice();
	     ?>
    </ul>
  </marquee>
 </div>
</div>
