<?php
	
 $dbname="hostel";
 $host="localhost";
 $user="root";
 $pass="";
 global $pdo;
 $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

  class messback
  {
  											////MEDICINE DETAILS
		function details()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select * from feedback order by date");
				if($smt->execute())
				{?>
				   <div style="margin-top:1%;">
					<table width="984" bordercolor="#996600" border="2px">
					  <tr>
					    <th width="89">Sr.No.</th>
						<th width="157">DATE</th>
						<th width="327">NAME</th>
						<th width="358">REMARK</th>
				      </tr><?php
					  while($row=$smt->fetch(PDO::FETCH_OBJ))
			   		  {  
					  		if(count($row)>0)
			     			{?>
								<tr>
								 <td align="center"><?php echo $row->sno;?></td>
								 <td align="center"><?php echo $row->date;?></td>
								 <td align="center"><?php echo $row->name;?></td>
								 <td align="center"><?php echo $row->feed;?></td>
			
								</tr><?php  
				  			}	
						}
				}?></table>
				   </div><?php
		}
		
	function retrive()
		{
			global $pdo;
			$smt=$pdo->prepare("select avilablestock from mdetails where medicinename=:med");
			if($smt->execute(array(":med"=>$_POST['mname'])))
			{$a=NULL;
			   while($row=$smt->fetch(PDO::FETCH_OBJ))
			   {  
					if(count($row)>0)
					{		
						 //$a[0] = $row->maxstock;
						 $a = $row->avilablestock;
						// $a[2] = $row->used;
					}	
			   }
			}   
			return $a;
		}    
		
		function minsert()
		{
			global $pdo;
			$smt=$pdo->prepare("select medicinename from mdetails");
			if($smt->execute())
			{
			  $not="";
			  while($row=$smt->fetch(PDO::FETCH_OBJ))
			  {
				if(count($row)>0)
				{   
				  if($row->medicinename==$_POST['mname'])
				  {  
				    $not="find"; 
					//echo $sql="update mdetails set avilablestock='$_POST[medno]' && maxstock='$_POST[medmax]' && use='$_POST[meduse]'";
					$smt=$pdo->prepare("update mdetails set maxstock=:max, avilablestock=avilablestock+:stock, used=:used where medicinename=:mno");
					$smt->execute(array(":max"=>$_POST['medmax'],":stock"=>$_POST['medno'],":used"=>$_POST['meduse'],":mno"=>$_POST['mname']));
					if($smt->rowCount()>0)
					{
					  echo '<script>alert("Medcine successfully updated!")</script>';
					}
					else
					{
					  print_r($smt->errorinfo());
					}
				  }
				}
			   } 
				if($not!="find")
				{
				  $smt=$pdo->prepare("insert into mdetails values (:medname, :max, :quant, :use)");
				  $smt->execute(array(":medname"=>$_POST['mname'],":max"=>$_POST['medmax'],":quant"=>$_POST['medno'],":use"=>$_POST['meduse']));
				  if($smt->rowCount()>0)
				  {
					echo '<script>alert("Medcine successfully recived!")</script>';
				  }
				  else
				  {
					echo '<script>alert("try again!")</script>';
				  }
				}
			  }
		}
		
		function mdelete()
		{
			global $pdo;
			$smt=$pdo->prepare("delete from mdetails where medicinename=:medname");
			$smt->execute(array(":medname"=>$_POST['mname']));
			if($smt->rowCount()>0)
			{
				echo '<script>alert("Medcine successfully removed")</script>';
			}
			else
			{
				echo '<script>alert("try again")</script>';
			}
		}
		
											////DOCTOR VISIT
											
		function dvisit()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select * from dvisit order by visitdate desc");
				if($smt->execute())
				{?>
				   <div style="margin-top:1%;">
					<table width="984" bordercolor="#996600" border="2px">
					  <tr>
					    <th width="82">Sr.No.</th>
						<th width="289">DOCTOR NAME</th>
						<th width="221">DATE</th>
						<th width="362">REMARK</th>
				      </tr><?php $srno=0; 
					  while($row=$smt->fetch(PDO::FETCH_OBJ))
			   		  {  
					  		if(count($row)>0)
			     			{?>
								<tr>
								 <td align="center"><?php echo $srno+=1;?></td>

								 <td align="center"><?php echo $row->doctorname;?></td>
								 <td align="center"><?php echo $row->visitdate;?></td>
								 <td align="center"><?php echo $row->remark;?></td>
								</tr><?php  
				  			}	
							else
							{?>
								<tr>
								  <td colspan="4">NO DOCTOR VISIT</td>
								</tr>
					<?php	}
						}
				}
				else
				{
					echo '<script>alert("try again!")</script>';
				}?></table></div><?php
		}		
		
		function dinsert()
		{
			global $pdo;
			$smt=$pdo->prepare("insert into dvisit values (:dna, :ddate, :drem)");
			$smt->execute(array(":dna"=>$_POST['dname'],":ddate"=>$_POST['ddate'],":drem"=>$_POST['dremark']));
			if($smt->rowCount()>0)
			{
				echo '<script>alert("Doctor visited!")</script>';
			}
			else
			{
				echo '<script>alert("Duplicate entry!")</script>';
			}
		}
		
		function ddelete()
		{
			global $pdo;
			$smt=$pdo->prepare("delete from dvisit where visitdate=:dd");
			$smt->execute(array(":dd"=>$_POST['ddate']));
			if($smt->rowCount()>0)
			{
				echo '<script>alert("Doctor visit successfully removed")</script>';
			}
			else
			{
				echo '<script>alert("try again")</script>';
			}
		}
		
											////PROVIDED
											
		function mgiven()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select * from mprovided order by pdate desc");
				if($smt->execute())
				{?>
				   <div style="margin-top:1%;">
					<table width="1319" bordercolor="#996600" border="2px">
					  <tr>
					    <th width="49">Sr.No.</th>
						<th width="82">DATE</th>
						<th width="258">STUDENT NAME</th>
						<th width="116">ROOM NO.</th>
						<th width="107">COURSES</th>
						<th width="78">YEAR</th>
						<th width="165">MEDICINE NAME</th>
						<th width="99">QUANTITY</th>
						<th width="305">REASON</th>
				      </tr><?php
					  while($row=$smt->fetch(PDO::FETCH_OBJ))
			   		  {  
					  		if(count($row)>0)
			     			{?>
								<tr>
								 <td align="center"><?php echo $row->srno;?></td>
								 <td align="center"><?php echo $row->pdate;?></td>
								 <td align="center"><?php echo $row->sname;?></td>
								 <td align="center"><?php echo $row->room;?></td>
								 <td align="center"><?php echo $row->courses;?></td>
								 <td align="center"><?php echo $row->year;?></td>
								 <td align="center"><?php echo $row->mname;?></td>
								 <td align="center"><?php echo $row->quantity;?></td>
								 <td align="center"><?php echo $row->reason;?></td>
				     </tr><?php  
				  			}	
						}
				}?></table></div><?php
		}		
		
		function mginsert()
		{
			global $pdo;
			$smt=$pdo->prepare("select avilablestock from mdetails where medicinename=:med");
			if($smt->execute(array(":med"=>$_POST['mname'])))
			{
			  $row=$smt->fetch(PDO::FETCH_OBJ);
			  if(count($row)>0)
			  {	
			     $s=$row->avilablestock-$_POST['quan'];
			     if($s>0)
				 {	
				        $smt=$pdo->prepare("update mdetails set avilablestock=avilablestock-:stock where medicinename=:mno");
						$smt->execute(array(":stock"=>$_POST['quan'],":mno"=>$_POST['mname']));
						if($smt->rowCount()>0)
						{
							$smt=$pdo->prepare("insert into mprovided values (NULL,:date,:sna,:ro,:co,:ye,:mna,:qua,:rea)");
							$smt->execute(array(":date"=>$_POST['ddate'],":sna"=>$_POST['student'],":ro"=>$_POST['no'],":co"=>$_POST['co'],":ye"=>$_POST['ye'],":mna"=>$_POST['mname'],":qua"=>$_POST['quan'],":rea"=>$_POST['reason']));
							 if($smt->rowCount()>0)
							 {
								echo '<script>alert("Medicine successfully provided!")</script>';
							 }
							 else
							{
								echo '<script>alert("try again!")</script>';
							}
						}
						else
						{
							echo '<script>alert("Medicine not reduced from stock!")</script>';
						}
					}
					else
					{
								echo '<script>alert("Required amount is not avilable in stock!")</script>';
					}
				}
			  }
		}
		
		function mgdelete()
		{
			global $pdo;
			$smt=$pdo->prepare("select quantity, mname from mprovided where srno=:srno");
			if($smt->execute(array(":srno"=>$_POST['srno'])))
			{
			  $row=$smt->fetch(PDO::FETCH_OBJ);
			  if(count($row)>0)
			  {	$c="";$m="";
			  		$c=$row->quantity;
					$m=$row->mname;
					$smt=$pdo->prepare("update mdetails set avilablestock=avilablestock+:stock where medicinename=:mno");
					$smt->execute(array(":stock"=>$c,":mno"=>$m));
					if($smt->rowCount()>0)
					{
							$smt=$pdo->prepare("delete from mprovided where srno=:srno");
							$smt->execute(array(":srno"=>$_POST['srno']));
							if($smt->rowCount()>0)
							{
								echo '<script>alert("Entry successfully deleted")</script>';
							}
							else
							{
								echo '<script>alert("try again")</script>';
							}
					}
					else
					{
						$smt=$pdo->prepare("delete from mprovided where srno=:srno");
							$smt->execute(array(":srno"=>$_POST['srno']));
							if($smt->rowCount()>0)
							{
								echo '<script>alert("Entry successfully deleted")</script>';
							}
							else
							{
								echo '<script>alert("try again")</script>';
							}
					}
				}
				else
				{
					echo '<script>alert("quantity cannot be retrive")</script>';
				}	
			}
			else
			{
					print_r($smt->errorinfo());
			}
		}		
  }
?>  