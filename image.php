  
<html>
<head>
<?php
include("config.php");
?>
<style>

input[type="submit"]{
	width:110px;
	height:40px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
  margin-bottom:50px;
}
input[type="file"]{
	 border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
}

</style>
</head>
<body> 
	  
	  <div class="x_content">

                                    <p>Click on Browse to select your photos.</p>
										<?php include("validation/header.php"); ?>
			
                                    <form method="post" id="formID"  name="formID" class="dropzone" style="border: 1px solid #e5e5e5; height: 205px; width: 600px;  "enctype="multipart/form-data" onsubmit="return validateForm()">
									<center><input type="file" class="validate[required] text-input" name="image" id="image" style="margin-top:10%;"/></center>
									
									<input type="submit" name="submit" value="Change Profile"style="margin-top:14%;margin-left:82%;"/>
									</form>
<?php
	$error = 0;
	if(isset($_POST['submit'])){
		$image = $_FILES['image']['tmp_name'];
										$image = $_FILES['image']['tmp_name'];
										$image_name = $_FILES['image']['name'];
										$image_size = getimagesize($_FILES['image']['tmp_name']);
										$image_type = $_FILES['image']['type'];
										$image_error = $_FILES['image']['error'];
										if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" >';
												echo '<strong>'.'<center>'."That is not an image!".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
											else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger">';
												echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
										else if($error == 0){
											
                                           include("config.php");
							
							
											mysql_query("update account set image='$image_name'where id='$session_id'")or die(mysql_error() );
										
											move_uploaded_file($image,"profile/".$image_name);
											echo '<div class="alert alert-dismissable alert-success error">';
												echo '<strong>'.'<center>'."upload your profile successfully!!!".'</center>'.'<strong>';
											echo '</div>';
											
										}
										
	}
	
	
	?>        <br />
                                    <br />
                                    <br />
                                    <br />
                                </div>
								
								
								
								</body>
								</html>