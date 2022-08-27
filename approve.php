
	
		
		<?php
include("config.php");?>
	<html>	
<head>
		
			
			<link href="css/course.css" rel="stylesheet" media="screen">
	
</head>

<body>
    <div class="container">
		
			 <?php
 include 'config.php';
 if (isset($_POST['submit'])){
		 $statuses = 0;
	$uid=$_POST['uid'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$year="First year";
	$semester="1st";
	$username= "stu".rand();
	$encrypt=base64_encode($username);
	
	$passwords= "pas".rand();
	$encc=base64_encode($passwords);
	//$passo=md5($passwords);
	
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$rdate=$_POST['rdate'];
	$region=$_POST['region'];
	$department=$_POST['department'];
	$user_type="student";
   $request_status ="Accepted";
   $status ="regular";
   $error=0;
   $date=date("Y-m-d");
   $cont="finish";
   $ded="deactive";
			if($rdate  != $date) {
							 echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
							 echo '<strong>'.$rdate . " "."The Date You inserted does not match with current day !".'</strong>';
							 echo '</div>';
							 $error=1;
							}
							
						$check_uid = "select uid from studentt where uid = '$uid' ";
						$run = mysql_query($check_uid);
						if(mysql_num_rows($run) >0) {
								echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$uid. " " . "is belong to other student. Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
						$check_phone = "select phone from studentt where phone = '$phone' ";
						$run = mysql_query($check_phone);
						if(mysql_num_rows($run) >0) {
								echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$phone. " " . "is belong to other student. Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
								$check_email = "select email from studentt where email = '$email' ";
						$run = mysql_query($check_email);
						if(mysql_num_rows($run) >0) {
								echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$email. " " . "is belong to other student. Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
							if($error == 0)
							{
   				mysql_query("insert into studentt (uid,fname,mname,lname,year,semester,email,phone,date,region,department,status,deadline,controlstatus) 
	values ('$uid','$fname','$mname','$lname','$year','$semester','$email','$phone','$rdate','$region','$department','$status','$ded','$cont')")or die(mysql_error());
	
		mysql_query("insert into account (user_id,username,passwords,user_type,email,request_status,fname,mname) 
	values ('$uid','$encrypt','$encc','$user_type','$email','$request_status','$fname','$mname')")or die(mysql_error());
	
	                            $subject="Online student registration";	
								$message = "Dear $fname $mname $lname your username and password is $username and $passwords respectivelly. 
								You can use it as it is or change it after logged in to your account and please register in course First!!!";
								mail($email,$subject,$message, "From: "."cosrs@haramaya.com");
	
	
	echo"<script>alert('The student registered successfully')</script>";
             	echo "<script>windows: location='department.php?app='</script>";
							}
   
   
 }?>	
 
	
   
			<div class="add-student">
			<br>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	


<?php
include("validation/header.php"); ?>
			<form id="formID"  name="formID"  method="post" action="" onsubmit="return validateForm()">
				
			<table>
				<tbody>
							<th><label for="user_id">User id</label></th>							
							<th><input type="text" name="uid" id="uid" maxlength="6" style="width:350px; height:35px;"  onkeypress="return alpha(event,numbers)"  class="validate[required,custom[onlyNumberSp],minSize[6],maxSize[6]]] text-input" placeholder="User id"/></th>
							
						</tbody>
							<tbody>
							<th><label for="firt name">First name</label></th>							
							<th><input type="text" name="fname" id="fname" style="width:350px; height:35px;"maxlength="15" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input"  placeholder="Firts name"/></th>
							
						</tbody>
							<tbody>
							<th><label for="middle name">Middle name</label></th>							
							<th><input type="text" name="mname" id="mname" style="width:350px; height:35px;" maxlength="15" onkeypress="return alpha(event,letters)"  class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" placeholder="Middle name"/></th>
							
						</tbody>
							<tbody>
							<th><label for="last name">Last name</label></th>							
							<th><input type="text" name="lname" id="lname" style="width:350px; height:35px;" maxlength="15" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" placeholder="Last name"/></th>
							
						</tbody>
							<tbody>
												
							<input type="hidden" name="username" readonly='readonly' id="username" maxlength="8" style="width:350px; height:35px;" onkeypress="return alpha(event,letters+numbers)" class="validate[required,custom[onlyLetterSp],minSize[8],maxSize[8]] text-input"  placeholder="user name"/></th>
							
						</tbody>
							<tbody>
													
							<input type="hidden" name="passwords" readonly='readonly' id="passwords" maxlength="10" style="width:350px; height:35px;" class="validate[required,minSize[8],maxSize[10]] text-input" placeholder="passwords"/>
							
						</tbody>
							<tbody>
							<th><label for="email">Email</label></th>							
							<th><input type="text" name="email" id="email" style="width:350px; height:35px;" maxlength="30" class="validate[required,custom[email]] text-input" placeholder="email"/></th>
							
						</tbody>
							<tbody>
							<th><label for="phone number">Phone number</label></th>							
							<th><input type="text" name="phone" id="phone" style="width:350px; height:35px;" maxlength="10" onkeypress="return alpha(event,numbers)"  class="validate[required,custom[phone],minSize[10],maxSize[10]] text-input"  placeholder="phone number"/></th>
							
						</tbody>
							</tbody>
							<tbody>
							<th><label for="pdate">Date</label></th>							
							<th><input type="date" name="rdate" id="rdate" style="width:350px; height:35px;" class="validate[required,custom[date]] text-input"   placeholder="date"/></th>
							
						</tbody>
			
			
				<tbody>
							<th><label for="region">Region:</label></th>
							<th> <select type="text" id="region" class="validate[required] text-input"   style="width:350px; height:40px;" name="region" >
										<option></option>
				                <option>Oromia</option>
				                <option>Amhara</option>
				                <option>Afar</option>
				                <option>Somalia</option>
								<option>SNNP</option>
								<option>somalia</option>
								<option>Tigray</option>
								<option>Gambela</option>
								<option>Benshangul</option>
								<option>Addis Abeba</option>
								<option>Dire Dewa</option>
								</select>
						</th>
												</tbody>
										
							
								<tbody>
							<th><label for="department">Department</label></th>
							<th> <select type="text" id="department"  style="width:350px; height:40px;" name="department" class="validate[required] text-input" >
								<option></option>
					          	<?php 
									$course_query = mysql_query("select * from department") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option value="<?php echo $course_row['title']; ?>"><?php echo $course_row['title']; ?></option>
									<?php  } ?>
								</select>
						</th>
								</tbody>	
							
			
			
		</table>
			
			
			</div>
			<div class="group">
				<div class="control">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;&nbsp;Save</button>
				</div>
			</div>
    </form>
	
		    </div>
			
			</div>
	
		</body>
		</html>
	
	
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
	
	
	
	
		
   

