  
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

                                  
										<?php include("validation/header.php"); ?>
			
                  
						
			
	  


<?php
include("config.php");
?>
<style>

input[type="submit"]{
	width:120px;
	height:40px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
  margin-bottom:30px;
}
input[type="file"]{
	 border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
 
}
select[type="text"]{
	margin-left:50px;
	margin-bottom:10px;
	 border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
 
}

</style>
</head>
<body> 
	  
	  <div class="x_content">

                                    <p>Please update about page  </p>
										<?php include("validation/header.php"); ?>
			
                                    <form method="post" id="formID"  name="formID" class="dropzone" style="border: 1px solid #e5e5e5; height: 200px; width: 700px;  "enctype="multipart/form-data" onsubmit="return validateForm()">
									
				
				<center><input type="file" class="validate[required] text-input" name="image3" id="image3" style="margin-top:5%;"/></center>
				<input type="submit" name="submit" value="Update about us"style="margin-top:15%;margin-left:82%;"/>
									
									</form>
   

<?php
	$error = 0;
	if(isset($_POST['submit'])){
		
		
		  $john="on";
		$sara="off";         
										
										
										
									
										
										
										
										
										 $image3 = $_FILES['image3']['tmp_name'];
										$image3 = $_FILES['image3']['tmp_name'];
										$image_name3 = $_FILES['image3']['name'];
										$image_size = getimagesize($_FILES['image3']['tmp_name']);
										$image_type = $_FILES['image3']['type'];
										$image_error = $_FILES['image3']['error'];
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
							
								        
											 mysql_query("update about set  status='off' where status='on'")or die(mysql_error());
											mysql_query("insert into about (image3,status) values ('"."$image_name3"."','$john')")or die(mysql_error() );
										
													move_uploaded_file($image3,"profile/".$image_name3);
												
											
											
											echo '<div class="alert alert-dismissable alert-success error">';
												echo '<strong>'.'<center>'."upload your profile successfully!!!".'</center>'.'<strong>';
											echo '</div>';
											
										}
										
	}
	
	
	?> 


	<br />
                                    <br />
                                    <br />
                                    <br />
                                </div>
								
								
								
								</body>
								</html>