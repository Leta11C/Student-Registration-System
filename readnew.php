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
  	<?php
									
									$id=$_GET['ID'];
									?>
<?php
	$statu="posst";
									$dese = mysql_query("SELECT * FROM post_noticee WHERE statu='$statu' "); 
										  $X=0;
										  while($de = mysql_fetch_array($dese)){
											$statu=$de['statu'];
											if($statu=="posst"){
											$X++;
											}
											else{
											$X=0;
											}}?>
							<?php 
							echo"";
		                  echo"<font face='times new roman' size='5px' color='blue'>";
			           echo'There are &nbsp;'.$X.'&nbsp; new News.';
			          echo"</font>";
			              echo"</script>";
			                 echo"";?>
	<br>
	
		<?php
		
	$result=mysql_query("SELECT * FROM post_noticee WHERE post_id='$id' order by post_id DESC ") or die( mysql_error());

		// $array = array();					
	while($row = mysql_fetch_array($result)){
		// $array[] = $row;
		$string=$row["post_content"];

		?>

 	<?php
			 $username =$row["username"];
		if($username == 'registrar')
		{									
		 									
		 
	 
?>

		<div class="postTitle">
			<div class="innerTitle"> 
			<img style="width:50px; height:50px;" alt='Unable to View' src="images/users.png">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
					
					echo $row["post_title"];
					
				?>
				
			<hr>
			</div>
			<div class="postBasicInfo">
				<?php
					echo "<i><b>Post by</b> <b>".$row["username"]."</b> <b>on</b> <b> ".$row["date"]."</b> </i>";
					
				?>
				<hr>
				
			</div>
		</div>
		<div class="postPost">
			 <?php echo $string;?>
		</div>
		<br>
		
		
		
<?php
	}
	}
?>

<?php

$sqls=mysql_query("select * from post_noticee where status ='posted'");
								while($no=mysql_fetch_array($sqls)){
									$deadline=$no['deadline'];
								$mysql=mysql_query("DELETE FROM post_noticee WHERE deadline < NOW()");	
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