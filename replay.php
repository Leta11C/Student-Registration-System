
<!DOCTYPE html>
<?php

 include("session.php");
include("config.php");
?>
<html>
<head>
<title>Academic Education V2 | Pages | Sidebar Left</title>

<link href="./layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

   <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
 <link href="dess/boot.css" rel="stylesheet">
 

</head>
<body id="top">

<br>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      
      <ul class="clear">
        <li><a href="adminpagee.php">Home</a></li>
        <li><a class="drop">Manage User</a>
          <ul>
            <li><a href="adminpagee.php?cre=">Create Account</a></li>
            <li><a href="adminpagee.php?de=">Delete Account</a></li>
            <li><a href="adminpagee.php?acc=">Activate account</a></li>
			 <li><a href="adminpagee.php?igo=">Deactivate Account</a></li>
			  <li><a href="adminpagee.php?view=">View User</a></li>
          
          
          </ul>
        </li>
         <li><a class="drop" href="#">Post news</a>
          <ul>
		      <li><a href="adminpagee.php?dis=">Post new</a></li>
			  <li><a href="adminpagee.php?set=">Set Date</a></li>
			   
			     <li><a href="adminpagee.php?post=">Delete notice</a></li>
		     
            
		
          </ul>
        </li>
        <li><a href="adminpagee.php?dep=">Add Department</a></li>
		 <li><a class="drop" href="adminpagee.php?dep=">Manage Homepage</a>
		 
		    <ul>
		     
			    <li><a href="adminpagee.php?up=">update Home</a></li>
				 <li><a href="adminpagee.php?aboutt=">update About</a></li>
			  
		     
            
		
          </ul>
		 
		 
		 
		 </li>
      <li><a href="adminpagee.php?feed=">Feedback</a></li>
	
          <li><a class="drop" href="#">Edit Profile</a>
		<ul>
		     <li><a href="adminpagee.php?pro=">Change profile picture</a></li>
			 <li><a href="adminpagee.php?wedet=">Edit your Profile</a></li>
			 <li><a href="adminpagee.php?chan=">Change Password</a></li>
			      
			 
		</ul>
		</li>
      <li> <a class="drop" >   	<?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                     <center><?php echo $row['fname'];?>  <?php echo $row['mname'];  ?></center>        </a> 
		<ul>
		     <li><a href="adminpagee.php?edit=">view profile</a></li>
			
			<li> <a  href="logout.php">Logout</a></li>
			   
	
		
		</ul>
		
		</li>
			<li>    
			<?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                            <?php echo $row['user_type'];  ?>  
			
		                         </li>

      </ul>
     
    </nav>
  </div>
</div>

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
   
      <div class="left"> 
       
      <a class="user-link" href="#">
	  <div class="image">
                         <?php
						 
							$Je = mysql_query("SELECT image FROM account WHERE id='$session_id' "); 
                         while($row=mysql_fetch_assoc($Je))
						 {
						
							  
								echo "<img  class='img-circle profile_img'  src='profile/".$row['image']."' align = 'left' height = '130px' width = '130px'>";
						 }
							?> 
							
							</div>
							
    
          
        
       
                </a>
				  <br><br><br>	
				
			<div class="date">
				  <br><br><br>	  <br><br><br>			
        <h4>Time:</h4>
							<script src="css/time.js" language="javascript" type="text/javascript"></script>
							<body  onLoad="yourClock()", onUnload="stopClock(); return true"> 
					       <form name="the_clock">
						   <table width="100%" border="0" cellpadding="0" cellspacing="0">
						 
							<tr align="left"><td> System Time:&nbsp;&nbsp;<input type="textt" name="the_time" size="20" style="padding-bottom:5px;"  color="red;"  align = "top"></a></td></tr>
							<tr align="left"><td><br/></td></tr></body>
	                    </table>
	                 </form>  
 
	 <h4>Calender</h4>
	  <script src="css/calander.js" language="jav<ascript" type="text/javascript"></script> 
				</div>
		<br><br><br><br><br><br><br><br><br><br><br>
        
        
      </div>
      <div id="content" class="two_third"> 

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
.span
{
	margin-left:140px;
}
.control
{
margin-left:50px;	
	
}
button[type="submitt"]{
	width:110px;
	height:40px;
	margin-left:50px;
	margin-top:10px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
}
 </style>
</head>

<?php
include 'config.php';
	$user = $_GET['id'];
	
	$result1 = mysql_query("select  * FROM comment where comment_id='$user'") or die(mysql_error());
	$course_row = mysql_fetch_array($result1);
	$name = $course_row['name'];

	?>
	<?php	
						
				if (isset($_POST['submitt'])){				
		$email=$_POST['email'];
	$post_content=$_POST['post_content'];
	//echo"<script>alert('reply is sent successfully')</script>";
	echo "<script>windows: location='adminpagee.php?feed='</script>";
	$subject="Online student registration";	
	  
		$message = "Dear  $name thanks for your comment or question 
		please read it $post_content . Don't Send a replay!!!";
		mail($email,$subject,$message, "From: "."cosrs@haramaya.com");
		
						 
							 
		
		
		
								
				}?>
					
	<div class="bid" style="margin-left:10px; margin-top:20px;"><a href="adminpagee.php?feed="><img  src="images/back.jpg" alt="&quot;online student registration&quot;"/></a></div>

	<div class="des"  style="margin-left:200px; margin-top:45px;">
	<?php include("validation/header.php"); ?>
	
	<form id="formID"  name="formID"  method="post"onsubmit="return validateForm()">
	<div class="control-group">
			<label class="control-label" for="post_content"></label>
			<div class="controls">
	Email&nbsp;&nbsp;&nbsp;<input  type="text" style="width:250px;" readonly='readonly' id="email" name="email" placeholder="user_id" value="<?php echo $course_row['email'];?>">
	</div>
			</div>
	
	<div class="control-group">
			<label class="control-label" for="post_content"></label>
			<div class="controls">
			Reply&nbsp;&nbsp;&nbsp;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea  type="text" cols="30" rows="3" id="post_content" name="post_content" class="validate[required,minSize[8],maxSize[30]] text-input" ></textarea>
			</div>
			</div>
		<button type="submitt" name="submitt" class="btn"><i class="icon-check icon-large"></i>&nbsp;search</button>
		
		<?php
		
								?>
								</form>
								</div>
	

			
							 
		  
      </div>
     
      <div class="clear"></div>
    </main>
  </div>
</div>
 
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
 

      <div class="one_third">
       
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      
      </div>
 
    </footer>
  </div>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 

  <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - by Information Systems 4th year student- <a href="#"></a></p>
   
  </div>
</div>

</body>
</html>

