<?php
include 'config.php';
	$user = $_GET['id'];
	
	$result1 = mysql_query("delete FROM  studentgrade where grade_id='$user'") or die(mysql_error());
	
	echo"<script>alert('Account is deleted successfully')</script>";
	echo "<script>windows: location='registrar.php?grade='</script>";	
?>