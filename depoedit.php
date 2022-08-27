	<?php 
include('config.php');
include('session.php');
?>

		
						  <?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
	<?php

  if(isset($_POST['update']))
  {

$user_id=$_POST['user_id'];
$email=$_POST['email'];


$username=$_POST['username'];
$encuser = base64_encode($username);

$passwords=$_POST['passwords'];
$enc=base64_encode($passwords);


				
			
 mysql_query("update account set username='$encuser',passwords='$enc',email = '$email' where id='$session_id'")or die(mysql_error());
								
	echo"<script>alert('your profile is updated successfully')</script>";
 
 echo "<script>window.location='department.php?eddd=';</script>";
	}
 

  ?>