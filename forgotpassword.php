<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">




<?php
include("config.php");
$run = mysql_query("select * from datecontrol");
$row = mysql_fetch_array($run);
$varr = $row['reg_date'];
$deadline_reg ="$varr";
$var = $row['deadline'];
$enddate ="$var";
?>

<html>
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>CCI on-line student registration</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
 <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>
<body>
<div id="wrapper">
	<div class="head">
	<img width="1250px" height="100" src="images/banner3.png" alt="&quot;Enter your caption here&quot;" />
	</div>
	<div id="menu">
		<ul>
			<li><a href='index.php'>Home</a></li>
			<li><a href="index.php?about=">About-Us</a></li>
			
			<li><a href="index.php?dis=">News</a></li>
			<li><a href="index.php?fe=">Contact-Us</a></li>
				<li><a href="help.docx">Help</a></li>
		
			
			<li ><a href="index.php?log=">Log In</a></li>
		
		</ul>
		<br class="clearfix" />
	</div>

	<div id="page">
		<div id="content">
		<a href="login.php"><img  src="images/back.jpg" alt="&quot;online student registration&quot;"/></a>
<?php

include('config.php');
								 session_start();
								if (isset($_POST['submit'])){
								$email = $_POST['email'];
								//$ans=$_POST['ans'];
						      
								$subject="Online student registration";	
							
								$query = "SELECT * FROM account WHERE email='$email'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									$fname =$row["fname"];
									$mname =$row["mname"];
									$pass =$row["passwords"];
									$enc=base64_decode($pass);
									$username =$row["username"];
									$user=base64_decode($username);
									if( $num_row > 0 ) {
									
										$message = "Dear $fname $mname $user your recovery password is $enc. You can login now ...!";
											mail($email,$subject,$message, "From: "."cosrs@haramaya.com");
									
									}
									else{ 
									echo '<div style=" background-color:red; color:white; width:700px;" class="alert alert-dismissable alert-danger">';
								echo("The e-mail address you entered is not recognized sorry we can not found such email");
								echo '</div>';
								}
								}
								?>
								<html>
<head>
		
			
		<link href="css/reco.css" rel="stylesheet" media="screen">		
			
	
</head>		


			
			<div class="detailss"> <center> Please Fill the form Properly</center></div>
	<?php include("validation/header.php"); ?>			
			<form  class="form-horizontal" id="formID"  name="formID"  action="forgotpassword.php"  method="POST"  onsubmit="return validateForm()"  enctype="multipart/form-data">
			
			<div class="des">
					
					      	
		
<br>
					
					<input type="text" name="email" id="email" placeholder=" Enter Your Email" class="validate[required,custom[email]] text-input"   title=" email" >
               </div>
			<div class="group">
				<div class="control">
					<input type="submit" name="submit" value="Submit" class="btn" id="form_input_height_width"  />
</div>
</div>
</div>
    </form>	
	</div>
		<div id="sidebar">
			<div class="box">
				<div style="margin-left:40px">	
				<br><br>
			<h5>Dead Line Date for Regstration</h5>
			<?php 
			echo'<p> ';
			echo 'Start Date --  '. $deadline_reg.'<br>';
					echo 'End Date --  '. $enddate.'<br>';
			
			
			echo'</p>';
			?>
			</div> 
			</div>
			</br>
			<div class="box">
				<div class="date-list">
							
        <h4>Time:</h4>
							<script src="css/time.js" language="javascript" type="text/javascript"></script>
							<body  onLoad="yourClock()", onUnload="stopClock(); return true"> 
					       <form name="the_clock">
						   <table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr align="left"><td> System Time:&nbsp;&nbsp;<input type="textt" name="the_time" size="15" style="padding-bottom:5px;" align = "top"></a></td></tr>
							<tr align="left"><td><br/></td></tr></body>
	                    </table>
	                 </form>  
     
	 <h4>Calender</h4>
	  <script src="css/calander.js" language="jav<ascript" type="text/javascript"></script> 
				</div>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/fb.png" />
				<img  src="images/tw.png" />
				<img  src="images/g.png" />
				<img  src="images/y.png" />
			</div>
		</div>
		<br class="clearfix" />
	</div>
	
</div>
<div id="footer">
	Copyright &copy; <?php echo date("Y"); ?> All rights reserved. Design by Is 4th year student</a>.
</div>
</body>
</html>