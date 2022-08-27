
		
		<?php
include("config.php");?>
	<html>	
<head>
		
			
			<link href="css/course.css" rel="stylesheet" media="screen">
	
</head>

<body>
    <div class="container">
		
				
	
   
			<div class="add-student">
			<br>
				<?php
	if (isset($_POST['submit'])){
	$code=$_POST['code'];
	$error = 0;
	$title=$_POST['title'];
	$unit=$_POST['unit'];
	$year=$_POST['year'];
	$term=$_POST['term'];
	$inst=$_POST['instid'];
	$course=$_POST['course'];
	$pre_requisites=$_POST['pre_requisites'];
	$flag = 0;
	
	
							$query=mysql_query("select * from instructor where user_id='$inst'") or die( mysql_error());
							while($row=mysql_fetch_array($query))
							{
								
								$uid=$row['user_id'];
								$fname=$row['fname'];
								$lname=$row['lname'];
								$fullname=$fname.' '.$lname;
							
						    if($uid != $inst){	  
							}
						else{
							$flag = 1;
							break;
						}
						  }
             if($flag == 0){
				 echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
				 echo"<script>alert('This instructor  name not found in the list ')</script>";
				 	echo "<script>windows: location='department.php?co='</script>";			
									echo '</div>';
			 }

 
 else{
	 
 	$check_user_id = "select code from subject where code = '$code' ";
						$run = mysql_query($check_user_id);
						if(mysql_num_rows($run) >0) {
								echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$code. " " . "is belong to other course Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
						if($error == 0)
							{
	mysql_query("insert into subject (code,title,unit,year,term,pre_requisites,course,inst_id,instructor) 
	values('$code','$title','$unit','$year','$term','$pre_requisites','$course','$inst','$fullname')")or die(mysql_error());
	echo"<script>alert('course added successfully')</script>";
             	echo "<script>windows: location='department.php?co='</script>";
							}
 }
	}
	
	?>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	
<?php
include("validation/header.php"); ?>	
			<form id="formID"  name="formID"  method="post"  onsubmit="return validateForm()">
				
			<table>
				<tbody>
							<th><label for="year">year:</label></th>
							<th> <select type="text" id="year"  style="width:350px; height:40px;" name="year" class="validate[required] text-input" >
										<option></option>
				                   <option>First year</option>
				                   <option>Second year</option>
				                   <option>Third year</option>
				                    <option>Fourth year</option>
								</select>
						</th>
												</tbody>
									<tbody>
							<th><label for="year">semester</label></th>
							<th> <select type="text" id="term"  style="width:350px; height:40px;" name="term" class="validate[required] text-input" >
								<option></option>
					            <option>1st</option>
					            <option>2nd</option>
					
								</select>
						</th>
								</tbody>				
												
				<tbody>
							<th><label for="user_id">Course code</label></th>							
							<th><input type="text" name="code" id="code" style="width:350px; height:35px;" onkeypress="return alpha(event,letters+numbers)" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[8]] text-input" placeholder="Course code"/></th>
							
						</tbody>
					
			
			<tbody>
							<th><label for="user_id">Course Title</label></th>							
							<th><input type="text" name="title" id="title" style="width:350px; height:35px;" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[8],maxSize[30]] text-input" placeholder="Course Title"/></th>
							
						</tbody>
						<tbody>
							<th><label for="user_id">Credit Hour</label></th>							
							<th><input type="text" max="7" name="unit" id="unit" style="width:350px; height:35px;" class="validate[required,custom[onlyNumberSp],minSize[1],maxSize[1]] text-input"  placeholder="Credit Hour"/></th>
							
						</tbody>
							<tbody>
							<th><label for="user_id">PRE-REQUISITE(S)</label></th>							
							<th><input type="text" name="pre_requisites" id="pre_requisites"  onkeypress="return alpha(event,letters)"  style="width:350px; height:35px;"placeholder=""/></th>
							
						</tbody>
								<tbody>
							<th><label for="year">Department</label></th>
							<th> <select type="text" id="course" class="validate[required] text-input"  style="width:350px; height:40px;" name="course" >
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
							<th><label for="user_id">Instructor_id</label></th>							
							<th><input type="text" name="instid" id="instid" style="width:350px; height:35px;" onkeypress="return alpha(event,numbers)" class="validate[required,custom[onlyNumberSp],minSize[6],mixSize[6]] text-input" placeholder="instructor"/></th>
							
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