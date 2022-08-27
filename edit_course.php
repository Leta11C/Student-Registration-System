
<!DOCTYPE html>
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
       
    
		<br><br><br><br><br><br><br><br><br><br><br>
        
        
      </div>
   
      <div id="content" class="two_third"> 
	


	 
	  <div class="container">
		
			<?php $get_id = $_GET['id']; ?>	
	
   
			<div class="add-student">
			<br>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	
								<?php 
		$query=mysql_query("select * from subject where subject_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
<?php
include("validation/header.php"); ?>	
			<form id="formID"  name="formID"  method="post" action="update_course.php"   onsubmit="return validateForm()">
				
			<table>
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['subject_id']; ?>" placeholder="Student No" required>
				<tbody>
							<th><label for="year">year:</label></th>
							<th> <select type="text" id="year"  style="width:350px; height:40px;" name="year" class="validate[required] text-input" >
											<?php 
		$query=mysql_query("select * from subject where subject_id='$get_id'")or die(mysql_error());
		$row1=mysql_fetch_array($query);
		
		?>
										<option><?php echo $row1['year'] ?></option>
				                   <option>First year</option>
				                   <option>Second year</option>
				                   <option>Third year</option>
				                    <option>Fourth year</option>
								</select>
						</th>
												</tbody>
									<tbody>
							<th><label for="year">semester</label></th>
							<th> <select type="text" id="term"  style="width:350px; height:40px;" name="term" class="validate[required] text-input" >
								<option><?php echo $row1['term']; ?></option>
					            <option>1st</option>
					            <option>2nd</option>
					
								</select>
						</th>
								</tbody>				
												
				<tbody>
							<th><label for="user_id">Course code</label></th>	
								
							<th><input type="text" name="code" id="code" style="width:350px; height:35px;"  classonlyLetterNumber="validate[required,custom[],minSize[4]maxSize[8]] text-input" value="<?php echo $row['code'];?>" placeholder="Course code"/></th>
							
						</tbody>
					
			
			<tbody>
							<th><label for="user_id">Course Title</label></th>							
							<th><input type="text" name="title" id="title" style="width:350px; height:35px;" class="validate[required,custom[onlyLetterSp],minSize[8],maxSize[30]] text-input" value="<?php echo $row['title'];?>" placeholder="Course Title"/></th>
							
						</tbody>
						<tbody>
							<th><label for="user_id">Credit Hour</label></th>							
							<th><input type="text" name="unit" id="unit" style="width:350px; height:35px;" class="validate[required,custom[onlyNumberSp,minSize[1],maxSize[1]] text-input" value="<?php echo $row['unit'];?>"  placeholder="Credit Hour"/></th>
							
						</tbody>
							<tbody>
							<th><label for="user_id">PRE-REQUISITE(S)</label></th>							
							<th><input type="text" name="pre_requisites" id="pre_requisites" style="width:350px; height:35px;" value="<?php echo $row['pre_requisites'];?>" placeholder=""/></th>
							
						</tbody>
								<tbody>
							<th><label for="year">Department</label></th>
							<th> <select type="text" id="course" class="validate[required] text-input"  style="width:350px; height:40px;" name="course" >
								<option><?php echo $row['course']; ?></option>
				<?php
				$query=mysql_query("select * from department") or die(mysql_error());
				while($row2=mysql_fetch_array($query)){ ?>
				<option><?php echo $row2['title']; ?></option>
				<?php } ?>
			</select>
								
						</th>
								</tbody>	
									<tbody>
							<th><label for="user_id">Instructor</label></th>							
							<th><input type="text" name="instructor" id="instructor" style="width:350px; height:35px;"  class="validate[required,custom[onlyNumberSp],minSize[6],maxSize[6]] text-input" value="<?php echo $row['inst_id'];?>" placeholder=""/></th>
							
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
       