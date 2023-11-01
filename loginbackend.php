<?php
 
 // connection set-up
 
 $dbname="hostel";
 $host="localhost";
 $user="root";
 $pass="";
 global $pdo;
 $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
 
class php
{
      function login()
	  {
		global $pdo;
		$status="active";
		
		$smt = $pdo->prepare("select * from login where user_id=:user and pass=:pass");
	    $smt->execute(array(":user"=>$_POST['user'],":pass"=>$_POST['pass']));
		if($smt->rowcount()>0)
		{     
		 $row=$smt->fetch(PDO::FETCH_OBJ);
		  $_SESSION['user_id']=$row->user_id;
		  $_SESSION['pass']=$row->pass;
		  if($_SESSION['user_id']=='admin')
		  {
		    header("location:user admin.php");
	      }
		  else
		  {	
		     header("location:user.php");
	      }
		}
		else
		{
		  echo '<script>alert("Wrong Verification Code, try again!")</script>';
		}
	  }
	  
	  function pnote()
	  {
	  	global $pdo;
		$smt=$pdo->prepare("insert into notice values(:login,:notice)");
		$smt->execute(array(":login"=>admin,":notice"=>$_POST['notice']))
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