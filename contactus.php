
<?php
include("config.php");

?>
<html>
<head>

  <link rel="stylesheet" href="css/post.css" />
</head>

<body>


 
  <div class="container">
  		<div class="margin-top">
			<div class="row">	
	
			<div class="span2">
					
				</div>

			<div class="span10">	
				<?php	
				$error = 0;
		if(isset($_POST['submit'])){
							$name=$_POST['name'];
							$email=$_POST['email'];
							$comment=$_POST['comment'];
							$date = date('y-m-d');
							$datee = date('y-m-d');
                     $da = date('y-m-d', strtotime($datee. ' + 5 days'));
		                 $st="posted";
							$status="comm";
						
					
							mysql_query("insert into comment (name,content,email,date,deadline,statu,status)
							values('$name','$comment','$email','$date','$da','$st','$status') ")or die(mysql_error());
	 
							echo"<script>alert('U data is successfully')</script>";
							
							
             	             echo "<script>windows: location='index.php?fe='</script>";
					 
							 
							 
		}
		$sqls=mysql_query("select * from comment where statu ='posted'");
								while($no=mysql_fetch_array($sqls)){
									$deadline=$no['deadline'];
								$mysql=mysql_query("DELETE FROM comment WHERE deadline < NOW()");	
								}
		?>
<div class="details">Please contact US</div>	
			<?php
include("validation/header.php"); ?>
<div class="negeregna">	
	<form id="formID"  name="formID" action="contactus.php" method="post"  onsubmit="return validateForm()">
			<div class="control-group">
			<label class="control-label" for="post_title">name:</label>
			<div class="controls">
			<input type="text" id="name" name="name" placeholder="your name"  class="validate[required,custom[onlyLetterSp]] text-input" placeholder="you email" >
			</div>
			</div>
				<div class="control-group">
			<label class="control-label" for="post_title">email</label>
			<div class="controls">
			<input type="text" id="email" name="email" class="validate[required,custom[email]] text-input" placeholder="you email" >
			</div>
			</div>
		<div class="control-group">
			<label class="control-label" for="post_content">comment:</label>
			<div class="controls">
			<textarea type="text" cols="35" rows="7" name="comment" id="comment" placeholder="Enter Your Comment Here" class="validate[required] text-input" ></textarea>
			</div>
			</div>
			<br>
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success" ><i class="icon-save icon-large"></i>&nbsp;Send</button>
			</div>
		</div>
		
		
		</form>
			</div>
		
		
	
	
</div>
</div>
</div>
</div>
</body>
</html>
