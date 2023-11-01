<?php
	
 $dbname="hostel";
 $host="localhost";
 $user="root";
 $pass="";
 global $pdo;
 $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

  class comback
  {
  											////device DETAILS
		function details()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select * from cdetails order by device");
				if($smt->execute())
				{?>
				   <div style="margin-top:1%;">
					<table width="1001" bordercolor="#996600" border="2px">
					  <tr>
					    <th width="69">Sr.No.</th>
						<th width="184">DEVICE NAME</th>
						<th width="184">DATE</th>
						<th width="123">STATUS</th>
						<th width="241">HOSTEL</th>
						<th width="207">LOCATION</th>
				      </tr><?php $srno=0;
					  while($row=$smt->fetch(PDO::FETCH_OBJ))
			   		  {  
					  		if(count($row)>0)
			     			{?>
								<tr>
								 <td align="center"><?php echo $srno+=1;?></td>
								 <td align="center"><?php echo $row->device;?></td>
								 <td align="center"><?php echo $row->date;?></td>
								 <td align="center"><?php echo $row->status;?></td>
								 <td align="center"><?php echo $row->hostel;?></td>
								 <td align="center"><?php echo $row->located;?></td>
					 </tr><?php  
				  			}	
						}
				}?></table></div><?php
		}
				
		function cinsert()
		{
			global $pdo;
			$smt=$pdo->prepare("select device from cdetails");
			if($smt->execute())
			{
				$not="";
				while($row=$smt->fetch(PDO::FETCH_OBJ))
				{
					if(count($row)>0)
					{
						if($row->device==$_POST['dname'])
						{   $not="find";
							$smt=$pdo->prepare("update cdetails set date=:date && satus=:dsta && hostel=:dhost && located=:dloc where device=:dev");
							$smt->execute(array(":date"=>$_POST['ddate'],":dsta"=>$_POST['dsta'],":dhost"=>$_POST['dhostel'],":dloc"=>$_POST['dloc'],":dev"=>$_POST['dname']));
							if($smt->rowCount()>0)
							{
								echo '<script>alert("Device successfully updated!")</script>';
							}
							else
							{
								print_r($smt->errorcode());//echo '<script>alert("Device not updated!")/script>';
							}
						}
					}
				}
				if($not!="find")
				{
					$smt=$pdo->prepare("insert into cdetails values (NULL, :dev, :date, :dsta, :dhost, :dloc)");
					$smt->execute(array(":date"=>$_POST['ddate'],":dev"=>$_POST['dname'],":dsta"=>$_POST['dsta'],":dhost"=>$_POST['dhostel'],":dloc"=>$_POST['dloc']));
					if($smt->rowCount()>0)
					{
						echo '<script>alert("Device successfully located!")</script>';
					}
					else
					{
						echo print_r($smt->errorinfo());
					}
				}
			}
		}
		
		function cdelete()
		{
			global $pdo;
			$smt=$pdo->prepare("delete from cdetails where device=:dname");
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
		
											////STUDENT ASSESS
											
		function ugiven()
		{
			    global $pdo;
	            $smt=$pdo->prepare("select * from cassess order by srno desc");
				if($smt->execute())
				{?>
				   <div style="margin-top:1%;">
					<table width="1319" bordercolor="#996600" border="2px">
					  <tr>
					    <th width="49">Sr.No.</th>
						<th width="174">USER NAME</th>
						<th width="108">COURSES</th>
						<th width="87">YEAR</th>
						<th width="96">ROOM NO.</th>
						<th width="100">DATE</th>
						<th width="79">PC NO.</th>
						<th width="109">FROM</th>
						<th width="115">TO</th>
						<th width="336">REMARK</th>
				      </tr><?php
					  while($row=$smt->fetch(PDO::FETCH_OBJ))
			   		  {  
					  		if(count($row)>0)
			     			{?>
								<tr>
								 <td align="center"><?php echo $row->srno;?></td>
								 <td align="center"><?php echo $row->uname;?></td>
								 <td align="center"><?php echo $row->courses;?></td>
								 <td align="center"><?php echo $row->year;?></td>
								 <td align="center"><?php echo $row->room;?></td>
								 <td align="center"><?php echo $row->date;?></td>
								 <td align="center"><?php echo $row->computer;?></td>
								 <td align="center"><?php echo $row->from." ".$row->fp;?></td>
								 <td align="center"><?php echo $row->to." ".$row->tp;?></td>
								 <td align="center"><?php echo $row->remark;?></td>
				     </tr><?php  
				  			}	
							else
							{
								echo '<td align=center> NO ASSECC </td>';
							}
						}
				}?></table></div><?php
		}		

		
		function uinsert()
		{
			global $pdo;
			$from="$_POST[fh]:$_POST[fm]:00";
			$to="$_POST[th]:_POST[tm]:00";
			$smt=$pdo->prepare("INSERT INTO `cassess` VALUES (NULL, :uname, :co, :ye, :room, :com, :date, :from, :fp, :to, :tp, :rem)");
			$smt->execute(array(":uname"=>$_POST['uname'], ":co"=>$_POST['co'], ":ye"=>$_POST['ye'], ":room"=>$_POST['room'], ":com"=>$_POST['com'], ":date"=>$_POST['date'], ":from"=>$from, ":fp"=>$_POST['fp'], ":to"=>$to, ":tp"=>$_POST['tp'], ":rem"=>$_POST['rem']));
					if($smt->rowCount()>0)
					{
						echo '<script>alert("Entry successfully done!")</script>';
					}
					else
					{
						echo '<script>alert("try again!")</script>';
					} 
		}
		
		function udelete()
		{
			global $pdo;
			$smt=$pdo->prepare("delete from cassess where srno=:srno");
			$smt->execute(array(":srno"=>$_POST['srno']));
			if($smt->rowCount()>0)
			{
				echo '<script>alert("Entry successfully removed")</script>';
			}
			else
			{
				echo '<script>alert("try again")</script>';
			}
		}
  }
?>