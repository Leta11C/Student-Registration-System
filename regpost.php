
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

  margin-top:10px;
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
  margin-bottom:50px;
  margin-left:40px;
}
.span10
{

margin-left:200px;

}
</style>
</head>

<body>
  <div class="container">
  		<div class="margin-top">
			<div class="row">	
	
			<div class="span2">
					
				</div>

			<div class="span10">	
<div class="details">Well Come To Posting News</div>		
<?php
include("validation/header.php"); ?>		

		<form id="formID"  name="formID" action="regpostt.php" method="post"  onsubmit="return validateForm()">
			<div class="control-group">
			<label class="control-label" for="post_title">Title:</label>
			<div class="controls">
			<input type="text" id="post_title" name="post_title"  class="validate[required,custom[onlyLetterSp]] text-input" placeholder="title of News" >
			</div>
			</div>
		<div class="control-group">
			<label class="control-label" for="post_content">Post:</label>
			<div class="controls">
			<textarea cols="30" rows="18" id="post_content" class="validate[required] text-input" name="post_content" ></textarea>
			</div>
			</div>
			<br>
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success" ><i class="icon-save icon-large"></i>&nbsp;Send</button>
			</div>
		</div>
		
			
		</form>
		<hr>
		
	
	
</div>
</div>
</div>
</div>
</body>
</html>
