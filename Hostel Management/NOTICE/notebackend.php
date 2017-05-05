<?php
 
 // connection set-up
 
 $dbname="hostel";
 $host="localhost";
 $user="root";
 $pass="";
 global $pdo;
 $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
 
   class notebackend
   {
	  
		  function notice()
		  {
				global $pdo;				
				$smt = $pdo->prepare("select notice from notice");
				if($smt->execute())
				{     
					  while($row=$smt->fetch(PDO::FETCH_OBJ))
			   		  {  
					  		if(count($row)>0)
			     			{
			        			echo "<li>".$row->notice."<p>";
				  			}	
							else
							{
								print_r($row->errorinfo());
							}
						}
				}
		  }
		  
		  function pnote()
		  {
				global $pdo;
				$smt=$pdo->prepare("insert into notice values(:login,:sub,:notice)");
				$smt->execute(array(":login"=>"admin",":sub"=>$_POST['sub'],":notice"=>$_POST['notice']));
				if($smt->rowcount()>0)
				{
				   echo '<script> alert("notice posted") </script>';
				}
				else
				{
					echo '<script> alert("try again") </script>';
				}			   
		 } 
   }	  	
?>