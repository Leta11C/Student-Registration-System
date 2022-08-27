	<?php 
include('config.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$grade_id=$_POST['id'];


$uid=$_POST['uid'];
$subject_id=$_POST['subject_id'];

$gen_ave=$_POST['gen_ave'];
$school_year=$_POST['school_year'];
$semester=$_POST['semester'];
$Grade=$_POST['Grade'];
$unit=$_POST['unit'];





mysql_query("update grade set uid = '$uid',subject_id = '$subject_id',gen_ave = '$gen_ave' , school_year = '$school_year' , semester = '$semester' , Grade = '$Grade' , unit = '$unit'  where grade_id ='$id'")or die(mysql_error());
								
	echo"<script>alert('your data is updated successfully')</script>";
 
 echo "<script>window.location='registrar.php?update=';</script>";

}
?>	