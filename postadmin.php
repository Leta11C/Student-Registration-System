
<html>
<head>
 <style>
 textarea
{
background:#fff;
  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  padding:10px;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  color:#555;

  margin-top:10px;
}
input[type="text"]{
 
  background:#fff;
  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  padding:10px;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  color:#555;
  width:250px;

  margin-top:10px;
}
.span
{
	margin-left:140px;
}
.control
{
margin-left:50px;	
	
}
button[type="submit"]{
	width:110px;
	height:40px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
}
 </style>
</head>

<body>
  <div class="container">
  		<div class="margin-top">
			<div class="row">	
	
			<div class="span2">
					
				</div>

			<div class="span">	
<div class="details">Well Come To Posting News</div>
		<?php
include("validation/header.php"); ?>			

		<form id="formID"  name="formID" action="postpcsss.php" method="post"  onsubmit="return validateForm()">
			<div class="control-group">
			<label class="control-label" for="post_title">Title:</label>
			<div class="controls">
			<input type="text" id="post_title" name="post_title" class="validate[required,custom[onlyLetterSp],minSize[8],maxSize[40]] text-input" maxlength="40"  placeholder="title of News">
			</div>
			</div>
		<div class="control-group">
			<label class="control-label" for="post_content">Post:</label>
			<div class="controls">
			<textarea cols="50px" rows="18" id="post_content" name="post_content" class="validate[required,minSize[30],maxSize[15000]] text-input" ></textarea>
			</div>
			</div>
			<br>
		<div class="control-group">
			<div class="control">
			<button name="submit" type="submit" class="btn btn-success" ><i class="icon-save icon-large"></i>&nbsp;POST</button>
			</div>
		</div>
		
			
		</form>
	
		
	
	
</div>
</div>
</div>
</div>
</body>
</html>
