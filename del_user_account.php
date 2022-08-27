<?php
include 'config.php';
	$user = $_GET['id'];
	$re=mysql_query("select * from account where username='$user'") or die(mysql_error());
	$m=mysql_fetch_array($re);
	$user_id=$m['user_id'];
	if($user_id==1849){
		
		echo"<script>alert('these is admin account unable to delete')</script>";
		echo "<script>windows: location='adminpagee.php?de='</script>";
	}
	else{
	$result1 = mysql_query("delete FROM account where username='$user'") or die(mysql_error());
	//$result1 = mysql_query("delete FROM employee_table where user_name='$user'") or die(mysql_error());
	echo"<script>alert('Account is deleted successfully')</script>";
	echo "<script>windows: location='adminpagee.php?de='</script>";	
	}
?>