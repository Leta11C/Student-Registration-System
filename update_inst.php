<?php 
include('config.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$inst_id=$_POST['id'];
$uid=$_POST['uid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$department=$_POST['department'];
$qual=$_POST['qual'];
$sex=$_POST['sex'];






mysql_query("update instructor set user_id = '$uid',fname = '$fname',lname = '$lname' , department = '$department' , qual = '$qual' , sex = '$sex'   where inst_id ='$id'")or die(mysql_error());
								
	echo"<script>alert('your data is updated successfully')</script>";
 
 echo "<script>window.location='department.php?vins=';</script>";

}
?>	