<?php session_start();
function __autoload($class){include $class.".php";}
if(isset($_POST['submit'])){
//echo $_POST['userid'];
$a=new Backend();
$a->login();
}
?>

<html>
<head>
<title>HOSTEL RULES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Handicraft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--flexslider-css-->
<!--bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all" />
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,800italic,800,700italic,700,600,600italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--script-->
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.js"></script>
<!--/script-->
<!--move-top-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
jQuery(document).ready(function($) {
$(".scroll").click(function(event){		
event.preventDefault();
$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
});
});
</script>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->

	<link rel="stylesheet" type="text/css" href="engine0/style.css" />

	<script type="text/javascript" src="engine0/jquery.js"></script>

	<!-- End WOWSlider.com HEAD section --></head>

<!--/move-top-->
<body>
<div style="background:url(PICS/bg3.jpg)">
<div class="header" id="home">
	<div class="container">
				<div class="navigation">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<div class="clearfix"> </div>
					<ul class="nav1">
						<li><a href="index.html">HOME</a></li>
						<li><a href="rules.php">LOGIN</a></li>
						<li><a class="scroll" href="gallery.html">GALLERY</a></li>
				<!----		<li><a class="scroll" href="#testimonials">ABOUT US</a></li>   --->
					</ul>
	  </div>
							<div class="header-right">
								<ul>
									<li><a href="#"><span class="fb"> </span></a></li>
									<li><a href="#"><span class="twit"> </span></a></li>
							 </ul>							 	
						  </div>
  </div>
</div>

<!----hostel rules--->
  <div style="border:2 solid #000000; height:80%; width:100%; text-align:center; margin-top:50px;">
     <div style="height:100%; width:50%; float:left; margin-left:5%;">
	 <div style="height:7%; width:100%; font:Georgia, "Times New Roman", Times, serif; color:#000099;">
		<h3><strong>HOSTEL RULES</strong></h3>
	  </div>
	  <hr width="100%" color="#CC0000">
	  <div style="height:95%; width:100%; margin-top:1%;">
	   <marquee height="90%" direction="up">
	    <ol type="1">
		   <li>
		   <table width="507" border="3px">   
             <tr>
               <th width="124">TIMING</th>
               <th width="174">I  YEAR TIMING </th>
               <th width="183">II, III, IV YEAR TIMING </th>
             </tr>
             <tr>
               <th>GYM TIMING </th>
               <td>5:00pm to 6:30pm</td>
               <td>6:30pm to 8:30pm </td>
             </tr>
             <tr>
               <th>IN-OUT TIMING </th>
               <td>4:30pm to 7:00pm </td>
               <td>4:30pm to 7:00pmm</td>
             </tr>
             <tr>
               <th height="35">MESS TIMING </th>
               <td>8:00pm to 8:40pm </td>
               <td>8:40pm to 9:20pm </td>
             </tr>
		  </table>        
		   </li>  <br>
		   <li>Every stdent must remember that the hostel  is the home of the student on the campus and therefore,he/she should behave himself/herself on the campus as well as ouside in such a manner as to bring credit to him/her and to the institution.
		   </li><br>
		  
		  
		   <li>
		       A student once admitted in the hostel will continue to be a hostel inmate throughout the year unless otherwise debarred from the hostel on disciplinary grounds. Unless they clear the dues,they shall not be allowed to take University examination. Further, he/she may be expelled from the halls of residence and/or messes.
		  </li><br>
		  
		  
		  <li> 
		      The admission into hostel is valid upto commencement of summer vacation/end of academic programme which ever is earlier. Accommodation will be provided in summer vacation on request and depends on availability. The tarif of summer vacation is Rs.30/-per day per student. The facility is only for the PG students who are doing their projects in intitute and foreign students.
		  </li><br>
		  
		  
		  <li>
		      Room furniture,electrical fillin etc.,are required to be maintained by the students in good condition. Student should vacate the hostel during summer vacation. If they have to leave any belongings in the hostel during this period, they should contact the hostel caretaker for the same but at there own risk. Nominal clock room charge will be levied for each item kept under sage custody.
		  </li><br>
		  
		 </ol>
		 </marquee>
		</div>
 	 </div>
 	  <div style="height:100%; width:100%; text-align:right; float:inherit; color:#000000; text-align:center;">
 	   <br><br><br><br>
<form method="post">
	   <strong> USER ID </strong>
	   <input type="text" name="userid" placeholder="enter your user id" required/>
	   <br><br><strong> PASSWORD </strong>
	   <input type="password" name="password" placeholder="enter your password" required/>
	   <br><br><strong> CATEGORY </strong>
	   <select name="dept">
	      <option value="">Select</option>
	      <option value="STUDENT">STUDENT</option>
		  <option value="medical">Medical</option>
		  <option value="networking">Networking</option>
		  <option value="news & magzin">About News</option>
		</select>
	   <br><br><input type="submit" name="submit" value="SIGN IN">
</form>
 	 </div>
  </div>

<!-----end hostel--->

<!--footer-starts-->
<div style="height:30%; width:100%; background:#000000; margin-top:2%;">
 <div style="height:80%; width:100%;">
  <div style="height:80%; width:20%; margin-left:5%; margin-top:2%; float:left;">
     <div style="height:25%; width:100%; color:#FFFFFF;"><b>ADDRESS</b></div>
	 <div style="height:75%; width:100%; color:#FFFFFF;">Hostel : Maurawan Road Mohanlalganj, Lucknow, Uttar Pradesh<br>Call : +91522-3234598</div>
  </div>
  <div style="height:80%; width:20%; margin-left:5%; margin-top:2%; margin-right:9%; float:right;">
     <div style="height:25%; width:100%; color:#FFFFFF;"><b>CONTACT US</b></div>
	 <div style="height:75%; width:100%; color:#FFFFFF;">web : <a href="www.aimt.edu.in">www.aimt.edu.in</a><br>Email : hostel@aimt.edu.in</div>
  </div>
</div>
  <div style="height:10%; width:100%; text-align:center;"><p>&copy; 2016 All Rights Reserved | Design by <strong>GROUP NAME</strong> </p></div>
</div>

<!--footer-end-->
</div>
</body>
</html>