	
	<html>
	<?php
include("config.php");

?>
<head>
	
			
		<link href="css/grade.css" rel="stylesheet" media="screen">		
			
	
</head>
<body>
<?php
$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							$user_type=$row['user_type'];
							if($user_type	== 'department')
							{
							?>
 <?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							
if(isset($_POST["submit_assignment"])) {
	
			   $file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));
		                                $file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));
		                                $Juses = addslashes($_FILES['file_cv']['name']);
		                                $image_size = getimagesize($_FILES['file_cv']['tmp_name']);
										$type = explode('.', $Juses);
										$type = end($type);
		if($type != 'doc' && $type != 'pdf' && $type != 'ppt' && $type != 'docx' && $type != 'pptx' && $type != 'txt' && $type != 'csv' && $type != 'csv'  ){
			$message = "Invalid File Format Not Supported !";
			echo '<div class="alert alert-dismissable alert-danger">';
			echo '<button type="button" class="close" data-dismiss="alert">X</button>';
			echo '<strong>'.$message.'</strong>';
			echo '</div>';
			} 
		else{
			
			move_uploaded_file($_FILES["file_cv"]["tmp_name"], "student_assignment_files/" . $_FILES["file_cv"]["name"]);
			
			
			
	
			$code= $_POST['code'];
			$name= $_POST['name'];
			$fname= $_POST['fname'];
			$lname= $_POST['lname'];	
			
				$id =$row['user_type'];
			mysql_query("insert into studentgrade (name,code,fname,lname,grade,user_type) values
		('$name','$code','$fname','$fname','$Juses','$id')")or die(mysql_error());
		echo '<div class="alert alert-dismissable alert-success">';
     echo "Assignment Successfulyy inserted !";
		echo '</div>';
	}
			
}
			
			?>
<?php
}

?>
	
			
		<?php include("validation/header.php"); ?>
				<div class="detailss">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Fill the form Properly</div>	
				<form  class="form-horizontal" id="formID"  name="formID"  action=""  method="POST"  onsubmit="return validateForm()"  enctype="multipart/form-data">
				<table  style="width:600px; margin-left:80px;">
			<tr >
                	<td style="width:200px;">Course Name</td>
                    <td>
					<input type="text" name="name" id="name" placeholder="course name" maxlength="35" class="validate[required,custom[onlyLetterSp],minSize[10],maxSize[35]] text-input" style="margin-left:20px; width:350px;" onkeypress="return alpha(event,letters)" title="course name" >
                    </td>
            	</tr>		
<tr>
                	<td>Course Code</td>
                    <td>
					<input type="text" name="code" id="code" placeholder="course code" maxlength="10" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[8]] text-input" style="margin-left:20px; width:350px;" onkeypress="return alpha(event,letters+numbers)"  title="Course Code" >
                    </td>
            	</tr>
				
				
				
				
				 <tr>
               		<td>First Name</td>
                    <td>
                    	<input type="text" value="" name="fname" id="fname" maxlength="15" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" style="margin-left:20px; width:350px;" onkeypress="return alpha(event,letters)"    min="1" title="instructor" placeholder="First Name" />
                    </td>
               </tr>
			   	 <tr>
               		<td>Last Name</td>
                    <td>
                    	<input type="text" value="" name="lname" id="lname" maxlength="15" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" style="margin-left:20px; width:350px;" onkeypress="return alpha(event,letters)"   title="instructor" placeholder="last Name" />
                    </td>
               </tr>
				<tr>
                	<td>Upload Grade</td>
                    <td>
					<input type="file" size="1" name="file_cv" id="file_cv"  class="validate[required] text-input"  style="margin-left:20px; width:350px;" placeholder="Attaches(Upload) Pdf,Doc,PPt Assignment(Optional)" >
					</td>
            	</tr>
				
			   
			<tr>
				 <td></td>
            	<td >
		
                </td>
            </tr>
		
			
          	</table>
			<div class="group">
				<div class="control">
					<input type="submit" style="margin-left:150px;" name="submit_assignment" value="Submit Grade" class="btn" id="form_input_height_width"  />
</div>
</div>
    </form>	
	
	
							<br>	<br><br><br><br><br><br><br>	<br>	<br><br><br><br><br><br><br>	
				<!----------------------------------------------------------------------------->			
					<body>
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



					

