<?php
  
  function __autoload($class)
  {
      include $class.".php";
  }
  if(isset($_POST['signup']))
  {
    $log = new maintaine();
	$in = $log->comp();
   }

?>

<form method="post">
<div style="height:100%; width:100%; text-align:center;">
 <table cellspacing="29%">
  <tr>
   <td>    NAME   </td>
   <td><input type="text" name="name" placeholder="Enter name" /></td>
  </tr> 
  <tr>
   <td>    PHONE NO.   </td>
   <td><input type="text" name="phone" placeholder="Enter phone no." /></td>
  </tr> 
  <tr>
   <td>    DETAILS OF COMPALINT   </td>
   <td><input type="text" name="name" placeholder="Enter complaint" /></td>
  </tr> 
  <tr>
   <td>   CATEGORY    </td>
   <td><select> 
          <option>	MINOR	</option>
		  <option>	MAJOR	</option>
	    </select>
   </td>
  </tr> 
  <tr>
   <td>    DEPARTMENT   </td>
   <td><select> 
          <option>	WORKSHOP	</option>
		  <option>	ELECTRITION	</option>
	    </select>
   </td>
  </tr> 
  <tr>
	<td>
	 <center>      <input type="submit" value="REGIESTER COMPLAINT" name="signup">        </center>
	</td>
	<td>
	 <center>      <input type="reset" value="CLEAR">        </center>
	</td>
  </tr>
</table>
</div>
</form>
  