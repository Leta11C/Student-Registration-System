
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
	<link href="dess/boot.css" rel="stylesheet">
	
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

        <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="spa">	
			   <div class="alert alert-info">
                                  
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Course Table</strong>
                                </div>                       
                                   <table cellpadding="3" cellspacing="3" border="1" class="table  table-bordered" id="example">							
                                <thead>
                                    <tr>
                                       <tr>
									       <th>Year </th>  
										     <th>Semester</th>   
                                           <th>Course Code</th>
										
                                        <th>Course Title</th>                                 
                                        <th>Credit Hour</th>  
                                                            
                                                                    
                                        <th>Pre-Requisites</th>                                 
                                        <th>Department</th>  
										<th>Instructor</th>  
										
                                    </tr>
                                </thead>
                                <tbody>
								 
													 <?php if (isset($_POST['sort_subject'])){
								$course = $_POST['course'];
									$year = $_POST['year'];
									$term = $_POST['term'];
								 ?>
								 
								 
                                <?php $user_query=mysql_query("select * from subject where term = '$term' and year = '$year' and course ='$course'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									$id=$row['subject_id'];  ?>
									
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['year']; ?> </td> 
									 <td width="80"><?php echo $row['term']; ?></td> 
									 	<td><?php echo $row['code']; ?></td> 
										 <td><?php echo $row['title']; ?></td>
                                          <td><?php echo $row['unit']; ?></td>  
									 <td width="80"><?php echo $row['pre_requisites']; ?></td> 
									
									
									   <td width="120"><?php echo $row['course']; ?> </td> 
									     <td width="120"><?php echo $row['instructor']; ?> </td> 
                                 </tr>
									<?php  }  ?>
									<?php  }  ?>
                           
                                </tbody>
                            </table>	
	                         </div>		
			</div>
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

    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
   
  </div>
</div>

</body>
</html>	
       	
        