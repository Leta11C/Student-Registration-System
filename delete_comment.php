	
<?php
include 'config.php';
	$user = $_GET['id'];
	
	$result1 = mysql_query("delete FROM comment where comment_id='$user'") or die(mysql_error());
	//$result1 = mysql_query("delete FROM employee_table where user_name='$user'") or die(mysql_error());
	
	
	
		
		
		   echo"<script>alert('comment is deleted successfully')</script>";
						   echo "<script>windows: location='adminpagee.php?feed='</script>";
							 
		
?>
