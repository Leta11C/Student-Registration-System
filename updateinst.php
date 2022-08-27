<!DOCTYPE html>
<?php

 include("session.php");
include("config.php");
?>
<html>
<head>
<title>CCI online student registration system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="./layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/course.css" rel="stylesheet" media="screen">
</head>
<body id="top">

<br>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      
      <ul class="clear">
        <li><a href="department.php">Home</a></li>
		    
        <li ><a class="drop" href="#">Approve</a>
          <ul>
            <li><a href="department.php?app=">Approve registration</a></li>
			     <li><a href="department.php?tes=">submit Grade</a></li>
           
          
          
          </ul>
        </li>
         <li ><a class="drop" href="#">Post news</a>
          <ul>
		      <li><a href="department.php?pos=">Post new</a></li>
		    
            
		
          </ul>
        </li>
         <li><a class="drop" href="#">Course</a>
		<ul>
		     <li><a href="department.php?co=">Add course</a></li>
			 <li><a href="department.php?v=">View course</a></li>
			 	
		</ul>
		</li>
		  <li><a class="drop" href="#">Instructor</a>
		<ul>
		     <li><a href="department.php?addins=">Add Instructor</a></li>
			 <li><a href="department.php?vins=">View Instructor</a></li>
			 	
		</ul>
		</li>
      <li><a class="drop">View News</a>
	  
	  <ul>
		     <li><a href="department.php?feed=">Feedback</a></li>
			 <li><a href="department.php?not=">View Notice</a></li>
			 	
		</ul>
	  
	  
	  </li>
       <li><a class="drop" href="#">Edit profile</a>
		<ul>
		     <li><a href="department.php?pro=">Change profile picture</a></li>
			 <li><a href="department.php?eddd=">Edit your Profile</a></li>
			 
			 	 <li><a href="department.php?chan=">Change Password</a></li>
			 
		</ul>
		</li>
		
       <li> <a class="drop" >   
<?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                     <center><?php echo $row['fname'];?>  <?php echo $row['mname'];  ?></center>  	   </a> 
		<ul>
		     <li><a href="department.php?edit=">view profile</a></li>
			
			<li> <a  href="logout.php">Logout</a></li>
			
		
		</ul>
		
		</li>
		   <li>
                          	<li>     
 <?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                            <?php echo $row['user_type'];  ?>  							                           </li>                   
                        </li> 
      </ul>
     
    </nav>
  </div>
</div>

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
     
      <div class="left"> 
       
     <div class="image">
                         <?php
						 
							$Je = mysql_query("SELECT image FROM account WHERE id='$session_id' "); 
                         while($row=mysql_fetch_assoc($Je))
						 {
						
							  
								echo "<img  class='img-circle profile_img'  src='profile/".$row['image']."' align = 'left' height = '130px' width = '130px'>";
						 }
							?> 
							
							</div>
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
include("config.php");?>
	<html>	
<head>
		
			
			<link href="css/addinst.css" rel="stylesheet" media="screen">
	
</head>

<body>
    <div class="container">
		
				<?php $get_id = $_GET['id']; ?>		
	
   
			<div class="add-student">
			<br>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	


						<?php 
		$query=mysql_query("select * from instructor where inst_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
<?php
include("validation/header.php"); ?>	
			<form id="formID"  name="formID"  method="post" action="update_inst.php"   onsubmit="return validateForm()">
				
			<table>
			    <input type="hidden" id="inputEmail" name="id" value="<?php echo $row['inst_id']; ?>" placeholder="Student No" required>
			
			
			<tbody>
							<th><label for="user_id">User id</label></th>							
							<th><input type="text" name="uid" id="uid" max="6" readonly="readonly" style="width:350px; height:35px;" value="<?php echo $row['user_id']; ?>" onkeypress="return alpha(event,numbers)" class="validate[required,custom[onlyNumberSp],minSize[6],maxSize[6]] text-input" placeholder="User Id"/></th>
							
						<tbody>
						<body>
							<th><label for="fname">First Name</label></th>							
							<th><input type="text" name="fname" id="fname" maxlength="16" style="width:350px; height:35px;" value="<?php echo $row['fname']; ?>" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" placeholder="First Name"/></th>
							
						</tbody>
							
						<tbody>
						<body>
							<th><label for="mname">Last Name</label></th>							
							<th><input type="text" name="lname" id="lname" maxlength="16" style="width:350px; height:35px;" value="<?php echo $row['lname']; ?>" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp],minSize[3],maxSize[15]] text-input" placeholder="Last Name"/></th>
							
						</tbody>
						
						
								<tbody>
							<th><label for="year">Department</label></th>
	
							<th> <select type="text" id="department" class="validate[required] text-input"  style="width:350px; height:40px;" name="department"  >
								<option><?php echo $row['department']; ?></option>
					          	<?php 
									$course_query = mysql_query("select * from department") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option value="<?php echo $course_row['title']; ?>"><?php echo $course_row['title']; ?></option>
									<?php  } ?>
								</select>
						</th>
								</tbody>
						
				<tbody>
							<th><label for="qual">Qualification</label></th>
							<th> <select type="text" id="qual"  style="width:350px; height:40px;"  name="qual" class="validate[required] text-input" >
										<option><?php echo $row['qual']; ?></option>
				                   <option>Bsc</option>
				                   <option>Msc</option>
				                   <option>PHD</option>
				                    <option>AS.profesor</option>
								</select>
						</th>
												</tbody>
									<tbody>
							<th><label for="year">Gender</label></th>
							<th> <select type="text" id="sex"  style="width:350px; height:40px;"  name="sex" class="validate[required] text-input" >
								<option><?php echo $row['sex']; ?></option>
					            <option>Male</option>
					            <option>Female</option>
					
								</select>
						</th>
								</tbody>				
												
				
	
			
		</table>
			
			
			</div>
			<div class="group">
				<div class="control">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;&nbsp;Save</button>
				</div>
			</div>
    </form>
	
		    </div>
			
			</div>
			
			
			
			
			
			
	
	
		</body>
		</html>
      
     
       
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