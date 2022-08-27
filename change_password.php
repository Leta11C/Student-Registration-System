
<head>
<link rel="stylesheet" type="text/css" href="css/with.css">
</head>		
<div class="modal-content">	
							
						<?php
				if (isset($_POST['submit_form'])){		
						$run = mysql_query("select * from account where id = '$session_id'");
						$row = mysql_fetch_array($run);	
						
						$ds=$row['passwords'];
						$enc=base64_decode($ds);
						
						$des=$_POST['opass'];
					
						
						$npwd=$_POST['npass'];
						$encc=base64_encode($npwd);
						
						$cpwd=$_POST['cpass'];
						$enec=base64_encode($cpwd);
						$ans=$_POST['ans'];
						$que=$_POST['question'];
						if($des != $enc){
							echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'.'<center>'."You have inserted incorrect password!".'</center>'.'<strong>';
							echo '</div>';
						}else if($enec != $encc){
							echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'.'<center>'."Passwords not matching!!!!".'</center>'.'<strong>';
							echo '</div>';
						}
						else if(strlen($npwd) <8 || strlen($npwd) >10) {
							 echo '<div class="alert alert-dismissable alert-danger">';
							 echo '<strong>'."password must between  8 and 10 characters !".'</strong>';
							 echo '</div>';
							
							}
						else
						
						
						{
							mysql_query("update account set passwords = '$encc' where id = '$session_id'");
							//mysql_query("update account set recovery_question = '$que' where id = '$session_id'");
							//mysql_query("update account set answer = '$ans' where id = '$session_id'");
							echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."You have changed your password successfully!!!".'</center>'.'<strong>';
							echo '</div>';
						}	
					}						
		?>
		<?php include("validation/header.php"); ?>
	<form id="formID"  name="formID"  method="post"  onsubmit="return validateForm()">
			
			    <div class="modal-header">
					
					<div class="modal-title">Change Password </div>
					
				</div>
				
				<div class="modal-body">	
					<table border="0" cellpadding="5" cellspacing="0" width="100%">
							
						
						<tbody>
							<th><label for="opass">Old Password:</label></th>							
							<th><input type="password"  id="opass" name="opass" class="validate[required] text-input" placeholder="Your Old Password" /></th>
							
						</tbody>
						<tbody>		
							<th><label for="npass">New Password:</label></th>
							<th><input type="password" id="npass" name="npass"  class="validate[required,minSize[8],maxSize[10]] text-input"placeholder="Your New Password" /></th>
						</tbody>
						<tbody>
							<th><label for="cpass">Confirm Password:</label></th>
							<th><input type="password" id="cpass" name="cpass"  class="validate[required,minSize[8],maxSize[10]] text-input" placeholder="Confirm Password" /></th>
						</tbody>
					</table>			
				</div>
				<div class="modal-footer">
							<button type="submit" name="submit_form" class="btn btn-primary btn-lg">Change Password</button>
						
						</div>	
			</form>
		</div>
		
										
		
		