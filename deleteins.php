<?php
include 'config.php';
	$user = $_GET['id'];
	
	$result1 = mysql_query("delete FROM  instructor where user_id='$user'") or die(mysql_error());
	
	
	
	
	
		   echo"<script>alert('instructor is deleted successfully')</script>";
						   echo "<script>windows: location='department.php?vins='</script>";