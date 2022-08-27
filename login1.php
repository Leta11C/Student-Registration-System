

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
  <link rel="stylesheet" type="text/css" href="css/log.css">
<link rel="stylesheet" type="text/css" href="csss/login.css">

</head>
<body>
<div id="wrapper">
	<div class="head">
	<img width="1250px" height="100" src="images/banner3.png" alt="&quot;Enter your caption here&quot;" />
	</div>
	<div id="menu">
		<ul>
			<li><a href='index.php'>Home</a></li>
			<li><a href="index.php?ab=">About-Us</a></li>
			
			<li><a href="index.php?dis=">News</a></li>
			<li><a href="index.php?fe=">Contact-Us</a></li>
				<li><a href="helpp.docx">Help</a></li>
		
			
			<li ><a href="login.php">Log In</a></li>
		
		</ul>
		<br class="clearfix" />
	</div>
	
	<div id="page">
		<div id="content">
		
			
			
			<?php
		                     
								include('config.php');
								
								if (isset($_POST['signin'])){
								session_start();
								$username = $_POST['username'];
								//$en=base64_encode($username);
								$passwords = ($_POST['passwords']);
									$enc=base64_encode($passwords);
							
							
								$query = "SELECT * FROM account WHERE username='$username'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
								$row=mysql_fetch_array($result);
								$row_id=$row['id'];
								 $user_type =$row["user_type"];
								 $request_status =$row["request_status"];
									$row=mysql_fetch_array($result);
									
									if( $num_row > 0 ) {
									
							
									
								$query1 = "SELECT * FROM account WHERE passwords='$passwords' ";
								$result1 = mysql_query($query1)or die(mysql_error());
								$num_row1 = mysql_num_rows($result1);
									
									
									
									if( $num_row1 > 0 ) {
										if($user_type	== 'student' && $request_status == 'Accepted')
										{	
									header('location:student.php');
									$_SESSION['id']=$row_id;
										}
									else 
									{
												if($user_type	== 'department' && $request_status == 'Accepted')
										{	
									header('location:department.php');
									$_SESSION['id']=$row_id;
										}
				
									else 
									{
												if($user_type	== 'registrar' && $request_status == 'Accepted')
										{	
									header('location:registrar.php');
									$_SESSION['id']=$row_id;
										}
										else
										{
											
										
										
									$error = "your account page deactivated for the time being ";	
									echo '<div style="font-size:18px; color:red;">';  echo '<center>'.$error.'</center>'; echo'</div>';
								echo '<br>';
									}
									}
									}
									}
									if( $num_row1 > 0 ) {
									if($user_type=="admin"){
									header('location:adminpagee.php');
									$_SESSION['id']=$row_id;
									}
				
									}
									else
									{
												$error = "The Password Is Not incorrect";	
									echo '<div style="font-size:18px; color:red;">';  echo '<center>'.$error.'</center>'; echo'</div>';
								echo '<br>';
									}
									}
									
										else if( $num_row == 0 || $num_row1== 0 ) {
							
									
								
								
													$error = "The Combination of User name and Password Is incorrect";	
									echo '<div style="font-size:18px; color:red;">';  echo '<center>'.$error.'</center>'; echo'</div>';
								echo '<br>';
									
									
									
									
									
							}
								else
									{
										echo '<div class="alert alert-dismissable alert-danger error" >';
												echo '<strong>'.'<center>'."This user name is Not Correct!".'</center>'.'<strong>';
												
											echo '</div>';
									
									
									}
								}
								?>
 <div class="modal-content">	
			<form name="per_info" enctype="multipart/form-data" method="post">
			
				
			<div class="modal-body">
	
	  	<div style="width:720px; cell-padding:20px">
	 <?php include("validation/header.php"); ?>
		 <center>  <form method="POST" action="" id="" onsubmit="return formValidation()">
			 
                  <h2 class="text-muted text-center btn-block btn btn-primary btn-rect" style="width:400px; height:40px; font-size:20px;">
                    Enter your username and password
                </h2>       
                       
		        
			
		        
				
		          <input type="text"  name="username" class="validate[required] text-input"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your Username" required id="username" />
		            
		          <input type="password" name="passwords" class="validate[required] text-input"  placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your Password" required id="passwords" />
				   
				   <br><br>
				   <input style="width:400px; margin-top:50px;" class="btn text-muted text-center btn-block btn-warning btn-lg" id="signin" type="submit" name="signin" value="Login">
				         
		            </div></center></form>
					<div class="text-center" style="margin-left:300px; margin-top:20px;">
						
									<a class="text-muted" data-toggle="tab" href="forgotpassword.php">Forgot Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
							</div>
		        
		      
<br><br><br><br><br><br>
		       
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













 	
		
