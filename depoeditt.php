<?php 
include('config.php');

?>



<html>
<head>
			<link href="css/depp.css" rel="stylesheet" media="screen">
	
</head>

						  <?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							$des=$row['username'];
							$dec=base64_decode($des);
							
							$ds=$row['passwords'];
							$enc=base64_decode($ds);
							?>
<body>
    <div class="container">
			<div class="add-student">
			<br>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	
             	<?php include("validation/header.php"); ?>
			<form id="formID"  name="formID"  method="post" action="depoedit.php"  onsubmit="return validateForm()">
			
			<table>
					<tbody>
							<th><label for="user_id">User-id</label></th>							
							<th><input type="text"  readonly='readonly' name="user_id" id="user_id" style="width:350px; height:35px;"  value="<?php echo $row['user_id']; ?>" placeholder="user_id"/></th>
							
						</tbody>
				<tbody>
							<th><label for="user_id">username</label></th>							
							<th><input type="text" name="username" id="username" class="validate[required,custom[onlyLetterNumber],minSize[8],maxSize[8]] text-input" style="width:350px; height:35px;"  value="<?php echo $dec ?>" placeholder="username"/></th>
							
						</tbody>
				<tbody>
							<th><label for="user_id">Password</label></th>							
							<th><input type="text" name="passwords" id="passwords" class="validate[required,minSize[8],maxSize[10]] text-input" style="width:350px; height:35px;"  value="<?php echo $enc  ?>" placeholder="passwords"/></th>
							
						</tbody>
									<tbody>
							<th><label for="user_id">Email</label></th>							
							<th><input type="text" name="email" id="email" class="validate[required,custom[email]] text-input" style="width:350px; height:35px;"  value="<?php echo $row['email']; ?>"  placeholder="email"/></th>
							
						</tbody>
					</table>
		<div class="controls_group">
			<div class="contro">
			<button name="update" type="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
	
	</body>
	</html>

