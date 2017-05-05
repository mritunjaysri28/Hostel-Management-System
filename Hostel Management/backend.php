<?php
 $dbname="hostel";
 $host="localhost";
 $user="root";
 $pass="";
 global $conn;
 $conn=new PDO("mysql:host=$host;dbname=$dbname","$user","$pass");
 
   class Backend
   {
   		function login()
	{//echo "1234567890";
	   //session_destroy();
	   global $conn;
	   $sql="select * from user_data where id=:name and password=:pass and department=:dept";
	   $s=$conn->prepare($sql);
	   $s->execute(Array(":name"=>"$_POST[userid]",":pass"=>"$_POST[password]",":dept"=>"$_POST[dept]"));
	   if($s->rowCount()>0)
	   {
	      $r=$s->fetch(PDO::FETCH_ASSOC);
          $_SESSION['NAME']=$r['name'];
		   $_SESSION['POST']=$r['post'];
		   $_SESSION['PHONE']=$r['phone'];
		   $_SESSION['PROPIC']=$r['propic'];
		   $_SESSION['SRNO']=$r['srno'];
		   $_SESSION['email']=$r['email'];
		   $_SESSION['id']=$r['id'];
		   $_SESSION['dept']=$r['department'];
		  if($_POST['dept']=="medical"){header("location:medical department/mhome.php");}
		  elseif($_POST['dept']=="networking"){header("location:coputer department/chome.php");}
		  elseif($_POST['dept']=="news & magzin"){header("location:news & magzine department/nmhome.php");}
		}
	    else
	    {
		    echo '<script>alert("Check your user name, categoary and password!")</script>';
	    }
	}
	/*
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
	  }*/
	  
		  function notice()
		  {
				global $pdo;
				$status="active";
				
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
				else
				{
					  print_r($smt->errorinfo());
				}
		  }
		  
		  function pnote()
		  {
				global $pdo;
				$smt=$pdo->prepare("insert into notice values(:login,:notice)");
				$smt->execute(array(":login"=>"admin",":notice"=>$_POST['notice']));
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