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
            <li><a href="adminpagee.php?acc=">Deactivate account</a></li>
			 <li><a href="adminpagee.php?igo=">Activate account</a></li>
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
		     
			    <li><a href="adminpagee.php?up="> Upadate Home slide </a></li>
				 <li><a href="adminpagee.php?aboutt=">update about</a></li>
			  
		     
            
		
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
	
    <?php
	
      	 if(isset($_GET["about"])) {
				 include("home.php");
				 }
				
				   else if(isset($_GET["cre"])) {
				 include("create_account.php");
				 }
				   else if(isset($_GET["de"])) {
				 include("del_account2.php");
				 }
				     else if(isset($_GET["acc"])) {
				 include("Accepted_Applicant.php");
				 }
				   else if(isset($_GET["igo"])) {
				 include("Ignored_Applicant.php");
				 }
				     else if(isset($_GET["dis"])) {
				 include("postadmin.php");
				 }
				    else if(isset($_GET["view"])) {
				 include("viewuser.php");
				 }
				    else if(isset($_GET["aboutt"])) {
				 include("aboutus.php");
				 }
				   else if(isset($_GET["set"])) {
				 include("setdat.php");
				 }
				  
				  else if(isset($_GET["dep"])) {
				 include("add_new_department.php");
				 }
				 	 else if(isset($_GET["feed"])) {
				 include("comments.php");
				 }
				 	  else if(isset($_GET["post"])) {
				 include("view_posts.php");
				 }
				  else if(isset($_GET["pro"])) {
				 include("image.php");
				 }
				     else if(isset($_GET["edit"])) {
				 include("editprofile.php");
				 }
						    else if(isset($_GET["wedet"])) {
				 include("admedit.php");
				 }
				  else if(isset($_GET["chan"])) {
				 include("change_password.php");
				 }
				   else if(isset($_GET["up"])) {
				 include("updatenews.php");
				 }
				
						
			
			
				  else
				 {			
					include("home.php");
					}
				
				 ?> 
     
       
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
