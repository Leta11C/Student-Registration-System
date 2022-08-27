

<?php

 include("session.php");
include("config.php");
?>
<html>
<head>
<title>Academic Education V2 | Pages | Sidebar Left</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="./layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="dess/boot.css" rel="stylesheet">
<style>

button[type="submit"]{
	width:110px;
	height:40px;
	margin-left:70px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
  margin-bottom:50px;
}
</style>
</head>
<body id="top" style="color:black;">

<br>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      
      <ul class="clear">
        <li><a href="student.php">Home</a></li>
        <li ><a class="drop" href="#">Register</a>
          <ul>
		  <li><a href="semester.php">Register in Semester</a></li>
            <li><a href="student.php?regis=">Register in course</a></li>
           
          
          
          </ul>
        </li>
         <li ><a class="drop" href="#">View Information</a>
          <ul>
		      <li><a href="student.php?vit="> View course</a></li>
		       <li><a href="student.php?ve=">View Grade</a></li>
			    <li><a href="student.php?dis=">View Notice</a></li>
            
		
          </ul>
        </li>
      
      <li><a href="student.php?feed=">Feedback</a></li>
          <li><a class="drop" href="#">Edit profile</a>
		<ul>
		     <li><a href="student.php?pro=">Change profile picture</a></li>
			 <li><a href="student.php?des=">Edit your Profile</a></li>
			 	 <li><a href="student.php?chan=">Change Password</a></li>
			 
		</ul>
		</li>
		
          <li> <a class="drop" >   
<?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                     <center><?php echo $row['fname'];?>  <?php echo $row['mname'];  ?></center>  	   </a> 
		<ul>
		     <li><a href="student.php?edit=">view profile</a></li>
			
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
//session_start();
$_SESSION['semister']="";
$_SESSION['year']="";
$_SESSION['dpt']="";
include ('config.php');









								 if (isset($_POST['select_subject'])){
								      $uid = $_POST['uid'];
									$year = $_POST['year'];
									$semester = $_POST['semester'];
									$department = $_POST['department'];
									$flag = 0;
									$_SESSION['semister']=$semester;
									$_SESSION['year']=$year;
									$_SESSION['dpt']=$department;
									$user_query=mysql_query("select * from studentt")or die(mysql_error());
                              
									while($row=mysql_fetch_array($user_query)){
										
							    if(($uid != $row['uid']) || ($year != $row['year']) || ($semester != $row['semester']) || ($department != $row['department'])){	  
							}
						else{
							$flag = 1;
							break;
						}
						  }
             if($flag == 0){
				 echo '<div class="alert alert-dismissable alert-danger">';
				 echo"<script>alert('your name not found in the list ')</script>";
				 	echo "<script>windows: location='student.php?reg='</script>";			
									echo '</div>';
			 }
						 else
						 {?>
					<div class="kajela" style="margin-left:200px;">
			     <form class="form-horizontal" method="post" action="reg.php" name="myform" id="myform">
				  
		   			<?php 
									$subject_query = mysql_query("select * from subject where term ='$semester' and year = '$year' and course ='$department' ") or die(mysql_error());
									
									$counter=0;
									
									while($subject_row = mysql_fetch_array($subject_query)){
									$counter++;
										?>
									<table style="width:300px;">
									<td style="color:black; width:200px; "><input style="color:black;" type="checkbox" name="title_<?php echo $counter; ?>" value="<?php echo $subject_row['title']; ?>"> <?php echo $subject_row['title'];  ?></td>
									<input  type="hidden"  name="uid" value="<?php echo $row['uid']; ?>">
									<input  type="hidden"  name="semester" value="<?php echo $row['semester']; ?>">
								<input  type="hidden"  name="year" value="<?php echo $row['year']; ?>">
								<input  type="hidden"  name="department" value="<?php echo $row['department']; ?>">
												
											
										</table> 
									
									<?php 	}?>
										
									            <button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>	
				              
			</form>	
</div>			
						<?php		}
					
								}	 ?>
									
									
								
									
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

    <p class="fl_left">Copyright &copy; 2016 - by Information Systems 4th year student- <a href="#"></a></p>
   
  </div>
</div>

</body>
</html>
							
									
				    
                           
									
									
									
									
									
									
									
									
									
									
									
									
									
									
								 
				
		
		 












		 
			


