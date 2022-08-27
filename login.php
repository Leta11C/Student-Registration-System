<head>

<style>

</style>
</head>
<html>
<body>
<div class="boxx">

	<?php
		                     
					include('include/config.php');
								
					if (isset($_POST['signin'])){
					session_start();
					$username = $_POST['username'];
					$en=base64_encode($username);
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
					if($user_type	== 'driver' && $request_status == 'Accepted')
					{	
					header('location:driverpage.php');
					$_SESSION['id']=$row_id;
					}

					else
                    if($user_type	== 'passenger' && $request_status == 'Accepted')
					{	
					header('location:passengerpage.php');
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
					if($user_type	== 'security' && $request_status == 'Accepted')
					{	
					header('location:securitypage.php');
					$_SESSION['id']=$row_id;
					}
					else 
					{
					if($user_type	== 'DEM' && $request_status == 'Accepted')
					{	
					header('location:dempage.php');
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
			
			
			<br class="clearfix" />
			</body>
			</html>