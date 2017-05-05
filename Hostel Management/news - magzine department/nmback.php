<?php
	
 $dbname="hostel";
 $host="localhost";
 $user="root";
 $pass="";
 global $pdo;
 $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

  class nmback
  {
  																		////Newspaper or magzine details
		function nmdetails()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select *,dayofyear(curdate())-dayofyear(doj)+1 as total from nmdetails order by type desc");
				if($smt->execute())
				{?>
				   <div style="margin-top:1%;">
					<table width="1001" bordercolor="#996600" border="2px">
					  <tr>
					    <th width="69">Sr.No.</th>
						<th width="184">PAPER NAME</th>
						<th width="184">TYPE</th>
						<th width="184">STARTING DATE</th>
						<th width="123">COST</th>
						<th width="241">TOTAL DAY</th>
						<th width="207">DAY CAME</th>
				      </tr><?php $srno=0;
					  while($row=$smt->fetch(PDO::FETCH_OBJ))
			   		  {  
					  		if(count($row)>0)
			     			{?>
								<tr>
								 <td align="center"><?php echo $srno+=1;?></td>
								 <td align="center"><?php echo $row->nmname;?></td>
								 <td align="center"><?php echo $row->type;?></td>
								 <td align="center"><?php echo $c=$row->doj;?></td>
								 <td align="center"><?php echo $row->cost;?></td>
								 <td align="center"><?php echo $row->total;?></td>
								 <td align="center"><?php 
								 							$sm=$pdo->prepare("select count(day) as came from nmatten where nmname=:name");
															if($sm->execute(array(":name"=>$row->nmname)))
															{	
															    $ro=$sm->fetch(PDO::FETCH_OBJ);
																if(count($ro)>0)
																{
																	echo $ro->came;
																}
																else
																{
																	echo "0";
																}
															}
															else
															{
																print_r($sm->errorinfo());
															} ?></td>
					 </tr><?php  
				  			}	
					}
				}?></table></div><?php
		}
				
		function nminsert()
		{
			global $pdo;
			$smt=$pdo->prepare("select nmname from nmdetails");
			if($smt->execute())
			{
				$not="";
				while($row=$smt->fetch(PDO::FETCH_OBJ))
				{
					if(count($row)>0)
					{
						if($row->nmname==$_POST['nmname'])
						{   $not="find";
							$smt=$pdo->prepare("update nmdetails set doj=:date, cost=:dloc, type=:typ, total=dayofyear(curdate())-dayofyear(:date))+1 where nmname=:dev");
							$smt->execute(array(":date"=>$_POST['nmdate'],":dloc"=>$_POST['cost'],":typ"=>$_POST['nmtype'],":dev"=>$_POST['nmname']));
							if($smt->rowCount()>0)
							{
								echo '<script>alert("Paper successfully updated!")</script>';
							}
							else
							{
							    echo '<script>alert("Paper not updated!")/script>';
							}	
						}
					}
				}
				if($not!="find")
				{
					/*$smt=$pdo->prepare("insert into nmdetails values (:nam, :typ, :doj, :cost)");
					$smt->execute(array(":nam"=>$_POST['nmname'],":typ"=>$_POST[nmtype],":doj"=>$_POST['nmdate'],":cost"=>$_POST['cost']));
					if($smt->rowCount()>0)*/
					if($pdo->query("insert into nmdetails values ('$_POST[nmname]','$_POST[nmtype]', '$_POST[nmdate]','$_POST[cost]')"))
					{
						echo '<script>alert("Paper successfully started!")</script>';
					}
					else
					{
						echo print_r($smt->errorinfo());
					}
					
				}
			}
		}
		
		function nmdelete()
		{
			global $pdo;
			$smt=$pdo->prepare("delete from nmdetails where nmname=:dname");
			$smt->execute(array(":dname"=>$_POST['dname']));
			if($smt->rowCount()>0)
			{
				echo '<script>alert("device successfully removed")</script>';
			}
			else
			{
				echo '<script>alert("try again")</script>';
			}
	   }
	   
	   																				//Attendence details
		
		
		function atteninsert()
		{
			global $pdo;
			$smt=$pdo->prepare("select nmname from nmdetails");
			$smt->execute();
			if($smt->rowCount()>0)
			{	
				$not="";
			   while($row=$smt->fetch(PDO::FETCH_OBJ))
			   {
			   		if($row->nmname==$_POST['nmname'])
					{
						$not="find";
						$smt=$pdo->prepare("insert into nmatten values (:nam, :dat, :sta)");
						$smt->execute(array(":nam"=>$_POST['nmname'],":dat"=>$_POST['nmdate'],":sta"=>$_POST['stat']));
						if($smt->rowCount()>0)
						{
							echo '<script>alert("Paper recevied!")</script>';
						}
						else
						{
							echo print_r($smt->errorinfo());
						}
					}
				}
				if($not!="find")
				{
					echo '<script>alert("Paper not regiesterd!")</script>';
				}
			}
			else
			{
				print_r($smt->errorinfo());
			}
		}
		
		function attendetails()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select nmname from nmatten group by nmname");
				if($smt->execute())
				{$i=0;
					   while($row=$smt->fetch(PDO::FETCH_OBJ))
					   {
					   	  if(count($row)>0)
						  {	
						  		$a[$i]=$row->nmname;
								$i+=1;
							}
						}
				   
				}?>
				 <div style="margin-top:1%;">
				   <table bordercolor="#996600" border="2px">
					<tr>
					  <th width="8%">PAPER NAME</th>
						<?php for($k=1;$k<32;$k++)
							  {   ?>  
							      <th width="1%">      <?php echo $k; ?>      </th>
						<?php } ?>		  
				     </tr> 
					    <?php for($j=0;$j<$i;$j+=1)
						      {?>
							    <tr> 
							      <td width="1%">      <?php echo $a[$j]; ?>      </td> <?php
							        $sm=$pdo->prepare("select day from nmatten where nmname=:na && mon=:mon order by day");
								    if($sm->execute(array(":na"=>$a[$j],":mon"=>$_POST['nmmon'])))
								    {  $z=1; $n[$z]=NULL;
								       while($r=$sm->fetch(PDO::FETCH_OBJ))
								       {
									      if(count($r)>0)
									      {										 	   
											 $n[$z]=$r->day;
											 $z+=1;
										  }
									   }$m=1;
									   for($k=1;$k<32;$k++)
									   {								
											  if($n[$m]==$k)
											  { ?>
												 <td width="1%"><font color="#000099"><?php echo "R";?></font></td>	 
									       <?php $n[$m]=NULL; if($m<$z-1){$m+=1;}
									          }								  
											   else
											   {?>
													<td width="1%"><font color="#FF0000"><?php echo "N";?></font></td>
										<?php	}
									   }?></tr><?php
							        }
							        else
									{
										print_r($sm->errorinfo());
									}
								} 
				     ?></table></div><?php
		}		
  }
?>



<?php /*
		function attendetails()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select nmname from nmatten group by nmname");
				if($smt->execute())
				{$i=0;
					   while($row=$smt->fetch(PDO::FETCH_OBJ))
					   {
					   	  if(count($row)>0)
						  {	
						  		$a[$i]=$row->nmname;
								$i+=1;
							}
						}
				   
				}?>
				 <div style="margin-top:1%;">
				   <table bordercolor="#000000" border="2px">
					<tr>
					  <th width="8%">PAPER NAME</th>
						<?php for($k=1;$k<32;$k++)
							  {   ?>  
							      <th width="1%">      <?php echo $k; ?>      </th>
						<?php } ?>		  
				     </tr> 
					    <?php for($j=0;$j<$i;$j+=1)
						      {?> 
							    <tr> 
							      <td width="1%">      <?php echo $a[$j]; ?>      </td> <?php
							        $sm=$pdo->prepare("select day from nmatten where nmname=:na && mon=:mon order by day");
								    if($sm->execute(array(":na"=>$a[$j],":mon"=>$_POST['nmmon'])))
								    {  $not="";
								       while($r=$sm->fetch(PDO::FETCH_OBJ))
								       {$not="find";
									      if(count($r)>0)
									      {
										 	for($k=$z;$k<32;$k++)
											{    
											    if(($z=$r->day)==$k)
										  		{?>
													<td width="1%"><font color="#000099"><?php echo "R";?></font></td>
								         <?php  }									        											    } 	
									      }		
										  if($k!=$z)
										 {?>
										     <td width="1%"><font color="#FF0000"><?php echo "N";?></font></td>
								  <?php  }								  
									   }
									   if($not!="find")
									   {
										 for($k=1;$k<32;$k++)
										  {?> 
										      <td width="1%"><font color="#FF0000"><?php echo "N";?></font></td>
						            <?php }
								       }
							        }
							        else
									{
										print_r($sm->errorinfo());
									}
								} 
				     ?></tr></table></div><?php
		}		
*/?>