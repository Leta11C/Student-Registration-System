<?php 
include('config.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$subject_id=$_POST['id'];
$year=$_POST['year'];
$term=$_POST['term'];
$code=$_POST['code'];
$title=$_POST['title'];
$unit=$_POST['unit'];
$pre_requisites=$_POST['pre_requisites'];
$course=$_POST['course'];

$instructor = $_POST['instructor'];
$flag = 0;
$query=mysql_query("select * from instructor where user_id='$instructor'") or die( mysql_error());
							while($row=mysql_fetch_array($query))
							{
								
								$uid=$row['user_id'];
								$fname=$row['fname'];
								$lname=$row['lname'];
								$fullname=$fname.' '.$lname;
							
						    if($uid != $instructor){	  
							}
						else{
							$flag = 1;
							break;
						}
						  }
             if($flag == 0){
				 echo '<div class="alert alert-dismissable alert-danger">';
				 echo"<script>alert('This instructor not found in the list ')</script>";
				 	echo "<script>windows: location='department.php?v='</script>";			
									echo '</div>';
			 }


else{

mysql_query("update subject set year = '$year',term = '$term',code = '$code' , title = '$title' , unit = '$unit' , pre_requisites = '$pre_requisites' , course = '$course' ,inst_id = '$instructor', instructor = '$fullname' where subject_id ='$id'")or die(mysql_error());
								
	echo"<script>alert('your data is updated successfully')</script>";
 
 echo "<script>window.location='department.php?v=';</script>";
 }

}
?>	