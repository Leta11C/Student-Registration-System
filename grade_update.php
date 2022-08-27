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
	<link href="css/editgrade.css" rel="stylesheet" media="screen">
		<script type="text/javascript" src="error/validations.js"></script>
		<link href="error/valcss.css" rel="stylesheet" />
</head>
<body id="top">

<br>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      
      <ul class="clear">
        <li><a href="registrar.php">Home</a></li>
        <li ><a class="drop" href="#">Upload</a>
          <ul>
		  <li><a href="registrar.php?ins=">upload Grade</a></li>
            <li><a href="registrar.php?grade=">receive Grade</a></li>
			  <li><a href="registrar.php?editgrade=">view Grade</a></li>
			  <li><a href="registrar.php?update=">Update Grade</a></li>
			     
           
          
          
          </ul>
        </li>
         <li ><a class="drop" href="#">Post news</a>
          <ul>
		      <li><a href="registrar.php?posi=">Post new</a></li>
		    
            
		
          </ul>
        </li>
      
      
          <li><a class="drop" href="#">Edit profile</a>
		<ul>
		     <li><a href="registrar.php?pro=">Change profile picture</a></li>
			 <li><a href="registrar.php?edo=">Edit your Profile</a></li>
			 
			 	 <li><a href="registrar.php?chan=">Change Password</a></li>
			 
		</ul>
		</li>
		
       <li> <a class="drop" > 
<?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                     <center>
					 <?php echo $row['fname'];?>  <?php echo $row['mname'];  ?></center>     							
							</a> 
		<ul>
		     <li><a href="registrar.php?edit=">view profile</a></li>
			
			<li> <a  href="logout.php">Logout</a></li>
			
		
		</ul>
		
		</li>
		   <li>
		    <?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                            <?php echo $row['user_type'];  ?>  
                          	<li>         
							
					 </li>                   
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
    
	
	<?php $get_id = $_GET['id']; 
	

	?>	
	
   
			<div class="add-student">
			<br>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	
								<?php 
		$query=mysql_query("select * from grade where grade_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
<?php include("validation/header.php");?>
			<form id="formID"  name="formID"  method="post" action="update_gradee.php"   onsubmit="return validateForm()">
				
			<table>
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['grade_id']; ?>" placeholder="Student No" required>
				
				
				<tbody>
			
							<th><label for="user_id">user_id</label></th>							
							<th><input type="text" readonly='readonly' name="uid" id="uid" style="width:350px; height:35px;" value="<?php echo $row['uid'];?>" placeholder="Course Title"/></th>
							
						</tbody>
						<tbody>
			
							<th><label for="user_id">Subject_id</label></th>							
							<th><input type="text" readonly='readonly' name="subject_id" id="subject_id" style="width:350px; height:35px;"  value="<?php echo $row['subject_id'];?>" placeholder="Course Title"/></th>
							
						</tbody>
			
			
						
						
						<tbody>
							<th><label for="qual">Grade value</label></th>
							<th> <select type="text" id="gen_ave"  style="width:350px; height:40px;" name="gen_ave" class="validate[required] text-input" >
										<option><?php echo $row['gen_ave'];?></option>
				                   <option>4</option>
				                   <option>3.75</option>
				                   <option>3.5</option>
				                    <option>3</option>
					     			<option>2.75</option>
									<option>2.5</option>
									<option>2</option>
									<option>1.75</option>
								     <option>1</option>
									    <option>0</option>
								</select>
						</th>
												</tbody>
						<tbody>
							<th><label for="user_id">year</label></th>							
							<th><input type="text" readonly='readonly' name="school_year" id="school_year" style="width:350px; height:35px;"  value="<?php echo $row['school_year'];?>"  placeholder="Credit Hour"/></th>
							
						</tbody>
							<tbody>
							<th><label for="user_id">semester</label></th>							
							<th><input type="text" name="semester" readonly ='readonly' id="semester" style="width:350px; height:35px;" value="<?php echo $row['semester'];?>" placeholder=""/></th>
							
						</tbody>
							
							
								<tbody>
							<th><label for="qual">Grade </label></th>
							<th> <select type="text" id="Grade"  style="width:350px; height:40px;" name="Grade" class="validate[required] text-input" >
										<option><?php echo $row['Grade'];?></option>
				                   <option>A+</option>
				                   <option>A</option>
				                   <option>A-</option>
				                    <option>B+</option>
					     			<option>B</option>
									<option>B-</option>
									<option>C+</option>
									<option>C</option>
								    <option>C-</option>
									<option>D</option>
									<option>Fx</option>
									<option>NG</option>
								</select>
						</th>
												</tbody>
						
							<tbody>
							<th><label for="user_id">Credit Hours</label></th>							
							<th><input type="text" name="unit" readonly id="unit" style="width:350px; height:35px;"  value="<?php echo $row['unit'];?>" placeholder=""/></th>
							
						</tbody>
						
			
			
		</table>
			
			
			
			<div class="group">
				<div class="control">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;&nbsp;Save</button>
				</div>
			</div>
    </form>
	
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

   <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - by Information Systems 4th year student- <a href="#"></a></p>
   
  </div>
</div>

</body>
</html>


		<script type="text/javascript">
<!--
var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
var numbers='1234567890'
var signs=',.:;@-\''
var mathsigns='+-=()*/'
var custom='<>#$%&?¿'

function alpha(e,allow) {
     var k;
     k=document.all?parseInt(e.keyCode): parseInt(e.which);
     return (allow.indexOf(String.fromCharCode(k))!=-1);
	 alert('letter only');
}

// -->
</script>