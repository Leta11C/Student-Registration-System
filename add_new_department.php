
<?php
include("config.php");?>
	<html>	
<head>
		
			
			<link href="css/depp.css" rel="stylesheet" media="screen">
	
</head>

<body>
    <div class="container">
		
				
	
   
			<div class="add-student">
			<br>
	
	<?php
	if (isset($_POST['submit'])){
	$code=$_POST['code'];
	$title=$_POST['title'];
		$error = 0;
 $check_code = "select code from department where code = '$code' ";
						$run = mysql_query($check_code);
						if(mysql_num_rows($run) >0) {
								echo '<div style=" background-color:red; color:white;"  class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$code. " " . "is belong to other department Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
		
		 $check_title = "select title from department where title = '$title' ";
						$run = mysql_query($check_title);
						if(mysql_num_rows($run) >0) {
								echo '<div style=" background-color:red; color:white;" class="alert alert-dismissable alert-danger">';
								echo '<strong>'.$title. " " . "is belong to other department Please enter the correct one!<br>".'</strong>';
								echo '</div>';
								$error=1;
						}
							if ($error == 0){
$error_course=mysql_query("select * from department where code='$code'")or die(mysql_error());
 $count=mysql_num_rows($error_course);
 
 
	mysql_query("insert into department(code,title) values('$code','$title')")or die(mysql_error());
		echo"<script>alert('department added successfully')</script>";
             	echo "<script>windows: location='adminpagee.php?dep='</script>";

	
	}
	
	} 
	?>
		<div class="details">Please Fill the form Properly</div>	
<div class="dese">
<?php include("validation/header.php"); ?>
			<form id="formID"  name="formID"  method="post"  onsubmit="return validateForm()">
				
			<table>
			
				<tbody>
							<th><label for="user_id">Department Code:</label></th>							
							<th><input type="text" name="code" id="code" style="width:350px; height:35px;" maxlength="8" onkeypress="return alpha(event,letters+numbers)" class="validate[required,custom[onlyLetterNumber],minSize[5],maxSize[8]] text-input"  placeholder="first name"/></th>
							
						</tbody>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<tbody>
							<th><label for="user_id">Department name:</label></th>							
							<th><input type="text" name="title" id="title" style="width:450px; height:35px;" maxlength="30"  onkeypress="return alpha(event,letters)" data-validate-length-range="6" data-validate-words="2"  class="validate[required,custom[onlyLetterSp],minSize[10],maxSize[30]] text-input"  placeholder="first name"/></th>
							
						</tbody>
			
			
		</table>
			
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
    		
