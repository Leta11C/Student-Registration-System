	<?php
include("config.php");?>
	<html>	
<head>
		
			
			<link href="css/addinst.css" rel="stylesheet" media="screen">
	
</head>

<body>
    <div class="container">
		
				
	
   
			<div class="add-student">
			<br>
					<?php
	if (isset($_POST['submit'])){
	$uid=$_POST['uid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$department=$_POST['department'];
	$qual=$_POST['qual'];
	$sex=$_POST['sex'];
	$date = date('m-d-y');
$error = 0;

  	$check_user_id = "select user_id from instructor where user_id = '$uid' ";
						$run = mysql_query($check_user_id);
						if(mysql_num_rows($run) >0) {
								echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$uid. " " . "is belong to other instructor Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
						if($error == 0)
							{
 
	mysql_query("insert into instructor (user_id,fname,lname,department,qual,sex,date) 
	values('$uid','$fname','$lname','$department','$qual','$sex','$date')")or die(mysql_error());
	echo"<script>alert('instructor registered successfully')</script>";
             	echo "<script>windows: location='department.php?addins='</script>";
	}}
	
	?>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	
<?php
include("validation/header.php"); ?>	
			<form id="formID"  name="formID"  method="post"  onsubmit="return validateForm()">
				
			<table>
			
			
			
			<tbody>
							<th><label for="user_id">User id</label></th>							
							<th><input type="text" name="uid" id="uid" max="6" style="width:350px; height:35px;" onkeypress="return alpha(event,numbers)" class="validate[required,custom[onlyNumberSp],minSize[6],maxSize[6]] text-input" placeholder="User Id"/></th>
							
						<tbody>
						<body>
							<th><label for="fname">First Name</label></th>							
							<th><input type="text" name="fname" id="fname" maxlength="15" style="width:350px; height:35px;" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" placeholder="First Name"/></th>
							
						</tbody>
							
						<tbody>
						<body>
							<th><label for="mname">Last Name</label></th>							
							<th><input type="text" name="lname" id="lname" maxlength="15"  style="width:350px; height:35px;" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" placeholder="Last Name"/></th>
							
						</tbody>
						
						
								<tbody>
							<th><label for="year">Department</label></th>
							<th> <select type="text" id="department" class="validate[required] text-input"  style="width:350px; height:40px;" name="department" >
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
						
				<tbody>
							<th><label for="qual">Qualification</label></th>
							<th> <select type="text" id="qual"  style="width:350px; height:40px;" name="qual" class="validate[required] text-input" >
										<option></option>
				                   <option>Bsc</option>
				                   <option>Msc</option>
				                   <option>PHD</option>
				                    <option>AS.profesor</option>
								</select>
						</th>
												</tbody>
									<tbody>
							<th><label for="year">Gender</label></th>
							<th> <select type="text" id="sex"  style="width:350px; height:40px;" name="sex" class="validate[required] text-input" >
								<option></option>
					            <option>Male</option>
					            <option>Female</option>
					
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