<head>
<link rel="stylesheet" type="text/css" href="css/formss.css">
<script>
</script>
</head>	
<body>	
<div class="modal-content">	
	
						<?php 
						include('config.php');
						$error = 0;
				if (isset($_POST['submit_form'])){		
						
						
						$user_id=$_POST['user_id'];
						$username=$_POST['username'];
					   $encuser=base64_encode($username);
						
						$passwords=$_POST['passwords'];
						//$password=md5($passwords);
						$enc=base64_encode($passwords);
						//$password_decrpt=base64_decode($password_encrpt);
						$email = $_POST['email'];
						$fname = $_POST['fname'];
						$mname = $_POST['mname'];
						$user_type=$_POST['user_type'];
						$request_status="Accepted";
						//$user = "emp".rand();
						//$pwd = rand();
					
						
					
						
							//if(strlen($username) <8 || strlen($username) >8) {
							// echo '<div style=" background-color:red; color:white;" class="alert alert-dismissable alert-danger">';
							// echo '<strong>'."the username  must be only 8 characters !".'</strong>';
							// echo '</div>';
							// $error=1;
							//}
						
					//else if(strlen($user_id) <6 || strlen($user_id) >6) {
						//	 echo '<div  style=" background-color:red; color:white;" class="alert alert-dismissable alert-danger">';
						//	 echo '<strong>'."ID number must be only 6 characters !".'</strong>';
						//	 echo '</div>';
							// $error=1;
					//}
						//else if(strlen($fname) <3 || strlen($fname) >12) {
							 //echo '<div style=" background-color:red; color:white;" class="alert alert-dismissable alert-danger">';
							 //echo '<strong>'."First name must between  3 and 12 characters !".'</strong>';
							 //echo '</div>';
							 //$error=1;
					//}
							//else if(strlen($mname) <3 || strlen($mname) >12) {
							// echo '<div  style=" background-color:red; color:white;" class="alert alert-dismissable alert-danger">';
							// echo '<strong>'."Last name must between  3 and 12 characters !".'</strong>';
							 //echo '</div>';
							// $error=1;
					//}
						//else if(strlen($passwords) <8 || strlen($passwords) >10) {
							// echo '<div style=" background-color:red; color:white;" class="alert alert-dismissable alert-danger">';
							// echo '<strong>'."password must between  8 and 10 characters !".'</strong>';
							// echo '</div>';
							// $error=1;
					//}
						$check_email = "select email from account where email = '$email' ";
						$run = mysql_query($check_email);
						if(mysql_num_rows($run) >0) {
								echo '<div  style=" background-color:red; color:white;" class="alert alert-dismissable alert-error">';
								echo '<strong>'.$email . " " . "is already in use. Please user an other one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
						$check_username = "select username from account where username = '$username' ";
						$run = mysql_query($check_username);
						if(mysql_num_rows($run) >0) {
								echo '<div  style=" background-color:red; color:white;"class="alert alert-dismissable alert-error">';
							
									echo " this username is already in use. Please user an other one!!";
								echo '</div>';
								$error=1;
						}
						$check_user_id = "select user_id from account where user_id = '$user_id' ";
						$run = mysql_query($check_user_id);
						if(mysql_num_rows($run) >0) {
								echo '<div  style=" background-color:red; color:white;" class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$user_id. " " . "is belong to other user Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
						if ($error == 0){
							mysql_query("insert into account (user_id,username,passwords,email,user_type,request_status,fname,mname) 
							values('$user_id','$encuser','$enc','$email','$user_type','$request_status','$fname','$mname')")or die(mysql_error());
							$subject="Online student registration";	
								$message = "Dear $fname $mname your username and password is $username and $passwords respectivelly. You can use it as it is or change it after logged in to your account. Don't Send a replay!!!";
								mail($email,$subject,$message, "From: "."CCIOSRS@haramaya.com");
								
							
							
							
							
							
							echo '<div class="alert alert-dismissable alert-success">';
							echo 'the account successfully inserted successful';
							echo '</div>';
		}
				}
						
							
											
		?>
		<?php //include("validation/header.php"); ?>
			<form id="formID"  name="formID"  method="post"  onsubmit="return validateForm()">
			
			    <div class="modal-header">
					
					<div class="modal-title">Create Account</div>
					
				</div>
				
				<div class="modal-body">				
	
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
							
					<tbody>
							<th><label for="user_id">User_id:</label></th>							
							<th> <input type="text" name="user_id" id="user_id" onkeypress="return alpha(event,numbers)" maxlength="6"  style="width:350px; height:35px;" class="validate[required,custom[number],minSize[6],maxSize[6]] text-input" placeholder="user id"/> </th>
							
						</tbody>
						<tbody>
							<th><label for="user_id">First Name:</label></th>							
							<th><input type="text" name="fname" id="fname"  onclick="checkLength()" maxlength="15"  onkeypress="return alpha(event,letters)" style="width:350px; height:35px;"  class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input"  placeholder="first name"/></th>
							
						</tbody>
						<tbody>
							<th><label for="user_id">Last Name:</label></th>							
							<th><input type="text" id="mname"name="mname"  style="width:350px;  height:35px;" maxlength="15"   onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[20]] text-input" placeholder="last name" /></th>
							
						</tbody>
						<tbody>		
							<th><label for="username">Username:</label></th>
							<th><input type="text" id="username" name="username" maxlength="8"  style="width:350px; height:35px;"  class="validate[required,custom[onlyLetterNumber],minSize[8],maxSize[8]]"placeholder="username" /></th>
						</tbody>
						<tbody>
							<th><label for="passwords">passwords:</label></th>
							<th><input type="text" id="passwords" name="passwords"  style="width:350px; height:35px;" maxlength="10"   class="validate[required,minSize[8],maxSize[10]] text-input" placeholder="passwords"/></th>
						</tbody>
						<tbody>
							<th><label for="email">Email Address:</label></th>
							<th><input type="text" id="email" name="email"  style="width:350px; height:35px;" maxlength="30" class="validate[required,custom[email]] text-input" placeholder="Email" /></th>
						</tbody>
						<tbody>
							<th><label for="user_type">Account Type:</label></th>
							<th> <select type="text" id="user_type"  style="width:350px; height:40px;" name="user_type" class="validate[required] text-input" >
									  <option></option>
									
									  <option>department</option>
									  <option>registrar</option>
								</select>
						</th>
							
						</tbody>
					</table>			
				</div>
				<div class="modal-footer">
							<button type="submit" name="submit_form" class="btn btn-primary btn-lg" style="width:130px; height:50px;">Create Account</button>
							<a class="btn btn-default btn-lg" href="adminPagee.php">Cancel</a>
						</div>	
			</form>
		</div>
		</body>
										<script type="text/javascript">
<!--
var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
var numbers='1234567890'
var signs=',.:;@-\''
var mathsigns='+-=()*/'
var custom='<>#$%&?¿'

function alpha(e,allow) {
     var k;
     k=document.all?parseInt(e.keyCode): parseInt(e.which);
     return (allow.indexOf(String.fromCharCode(k))!=-1);
	 alert('letter only');
}

// -->
</script>