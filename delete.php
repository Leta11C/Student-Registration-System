<?php
include 'config.php';
	$user = $_GET['id'];
	
	$result1 = mysql_query("delete FROM  post_noticee where post_id='$user'") or die(mysql_error());
	//$result1 = mysql_query("delete FROM employee_table where user_name='$user'") or die(mysql_error());
	
	
	
	
		   echo"<script>alert('News is deleted successfully')</script>";
						   echo "<script>windows: location='adminpagee.php?post='</script>";
							 
	
	
	
?>