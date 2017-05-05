<?php
 
 // connection set-up
 
 $dbname="hostel";
 $host="localhost";
 $user="root";
 $pass="";
 global $pdo;
 $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
 
   class maintaine
   {
      
	  
	  function comp()
	  {
	    global $pdo;
		$smt=$pdo->prepare("INSERT INTO `maintainence` VALUES
(complaint_no+1, :date, :name, 'admin', :pno, :detail, :category, :dept, 'NULL', 'NULL',NULL,NULL,'NULL',NULL,'NULL','NULL');
");
		if($smt->execute(array(":date"=>"2013-06-03",":name"=>$_POST['name'],":pno"=>$_POST['phone'],":detail"=>"its working",":category"=>"minor",":dept"=>"php")))
	{	if($smt->rowcount()>0)
		{
		  echo '<script>alert("regiestration successful!")</script>';
		}
			else
		{
		  echo '<script>alert("try again!")</script>';
		}
	}
	else
	{
		echo '<script>alert("not work")</script>';
	}	
	  }
   }
?>