
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
<link href="dess/boot.css" rel="stylesheet">
</head>
<body id="top">

<br>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      
      <ul class="clear">
        <li><a href="student.php">Home</a></li>
        <li ><a class="drop" href="#">Register</a>
          <ul>
		  <li><a href="student.php?semii=">Register in Semester</a></li>
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
include('config.php');
date_default_timezone_set('America/Chicago');
$reg_date  = date("Y-m-d");
$query=mysql_query("select * from datecontrol") or die( mysql_error());
$row=mysql_fetch_array($query);
$strdate=$row['reg_date'];
$enddate=$row['deadline'];

?>
	
	
	<?php
		if($reg_date>=$strdate && $reg_date<$enddate ){
				
 include 'config.php';
 if (isset($_POST['submit'])){
		 $statuses = 0;
	$uid=$_POST['uid'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$year=$_POST['year'];
	$semester=$_POST['term'];


	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$rdate= date("y-m-d");
	$region=$_POST['region'];
	$department=$_POST['department'];
	$chid=0;
$flag=0;
	$cod=0;
   $status ="regular";

   					$user_query=mysql_query("select * from studentt")or die(mysql_error());
                              
									while($row=mysql_fetch_array($user_query)){
					
							    if(($uid == $row['uid']) && ($year == $row['year']) &&($semester == $row['semester'])){	  
					           $chid = 1;
				              break;
							
						}
									}
		     
			 if($chid == 1){
				  echo '<div class="alert alert-dismissable alert-danger">';
									echo"<script>alert('you are registered last semester')</script>";
								echo "<script>windows: location='student.php?semi='</script>";	
							echo '</div>';
			 }
			 
			 else
			 {
					$user_query=mysql_query("select * from studentt")or die(mysql_error());
                              
									while($rows=mysql_fetch_array($user_query)){
					$deadline=$rows['deadline'];
							    if(($uid == $rows['uid']) && $deadline == 'Active'){	  
					           $flag = 1;
				              break;
							
						}
									} 
									
				    if($flag == 0){
				 echo '<div class="alert alert-dismissable alert-danger">';
				 echo"<script>alert('you cannot registered twice ')</script>";
				 	echo "<script>windows: location='student.php?semi='</script>";			
									echo '</div>';
			 }
			else{

				?>
	
							<?php
								$query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($ro=mysql_fetch_array($query))
							{
							$user_id=$ro['user_id'];
							}
							
                           	$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowsss=mysql_fetch_array($query))
							{
							
							$uid=$rowsss['uid'];
							}		      
							
                            $result1 = mysql_query("SELECT sum(gen_ave) FROM grade  where uid = '$uid'") or die(mysql_error());
							$test_count1=mysql_query("select * from grade where gen_ave <> '' and uid = '$uid'  ")or die(mysql_error());
							$count_gen1 = mysql_num_rows($test_count1);
							
							while ($rows1 = mysql_fetch_array($result1)) {                                ?>
		
									<?php if ($count_gen1  <= 0){ ?>
									 
							<?php }else{ ?>
									<?php $ave1 = $rows1['sum(gen_ave)']; 
											  $equal1 = $ave1 / $count_gen1;
											  $dess = round($equal1 , 2);
											 
									?>
						
                            <?php } }?>
			
			 <?php
			 if($dess>=2 ){ ?>

<?php 
  $des="deactive";
  $con="finish";
   
             $query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowss=mysql_fetch_array($query))
							{
							$fnamee=$rowss['fname'];
							$mnamee=$rowss['mname'];
							$lnamee=$rowss['lname'];
							$depo=$rowss['department'];
							$email=$rowss['email'];
							$phone=$rowss['phone'];
							$region =$rowss['region'];
							 $conn="finished";
							}
							
	
	
		 mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='First year' and semester = '1st'")or die(mysql_error());
		 mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='First year' and semester = '2nd'")or die(mysql_error());	
		 
         mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='Second year' and semester = '1st'")or die(mysql_error());
       mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='Second year' and semester = '2nd'")or die(mysql_error());	
	   
	    mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='Third year' and semester = '1st'")or die(mysql_error());
		 mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='Third year' and semester = '2nd'")or die(mysql_error());
		 
		  mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='Fourth year' and semester = '1st'")or die(mysql_error());
		   mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id' and year ='Fourth year' and semester = '2nd'")or die(mysql_error());
	   
	
   				mysql_query("insert into studentt (uid,fname,mname,lname,year,semester,email,phone,date,region,department,status,controlstatus) 
	values ('$uid','$fname','$mname','$lname','$year','$semester','$email','$phone','$rdate','$region','$department','$status','$con')")or die(mysql_error());
        mysql_query("update studentt  set deadline='$des' where uid='$uid'")or die(mysql_error());
	//mysql_query("update studentt set controlstatus = '$conn' where uid ='$user_id'")or die(mysql_error());
	
		
	   echo"<script>alert('U data is successfully')</script>";
             	echo "<script>windows: location='student.php?semi='</script>";
   
   
   }
   else
   {
	   
	   echo '<div class="alert alert-dismissable alert-danger">';
		echo '<strong>'."your grade is not lower than 2 please chek ur grade".'</strong>';
		echo '</div>';
   }
			
}
 }
 }
 
		
		}
			else{
	
echo '<div style="font-size:18px; color:red;">';   
echo '<center>'."Sorry Registration Start at $strdate".'</center>'; echo'</div>';
	}
	 if($reg_date>=$enddate){
		
		 echo '<div style="font-size:18px; color:red;">';  
  echo '<center>'." and expired on $enddate day!".'</center>'; echo'</div>';
   
  
  
}	?>
   
			
		<?php		
		
include("config.php");?>
	<html>	
<head>
		
			
			<link href="css/semi.css" rel="stylesheet" media="screen">
	
</head>

<body>
    <div class="container"> 
	<div class="add-student">
			<br>
	<div class="details">Please Fill the form Properly</div>	
<div class="dese">	
<?php
include("validation/header.php"); ?>
			<form id="formID"  name="formID"  method="post" action="semester.php" onsubmit="return validateForm()">
				
			<table>
			<?php
			$query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowss=mysql_fetch_array($query))
							{
							$fnamee=$rowss['fname'];
							$mnamee=$rowss['mname'];
							$lnamee=$rowss['lname'];
							$depo=$rowss['department'];
							$email=$rowss['email'];
							$phone=$rowss['phone'];
							$region =$rowss['region'];
							}
							?>
				<tbody>
							<th><label for="user_id">User id</label></th>							
							<th><input type="text" name="uid" id="uid"  readonly='readonly' style="width:350px; height:35px;" value="<?php echo $user_id; ?>"  onkeypress="return alpha(event,numbers)"  class="validate[required,custom[onlyNumberSp]] text-input" placeholder="User id"/></th>
							
						</tbody>
							<tbody>
							<th><label for="firt name">First name</label></th>							
							<th><input type="text" name="fname" id="fname" readonly style="width:350px; height:35px;" value="<?php echo $fnamee; ?>"  onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp]] text-input"  placeholder="Firts name"/></th>
							
						</tbody>
							<tbody>
							<th><label for="middle name">Middle name</label></th>							
							<th><input type="text" name="mname" id="mname" readonly style="width:350px; height:35px;"  value="<?php echo $mnamee; ?>"onkeypress="return alpha(event,letters)"  class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Middle name"/></th>
							
						</tbody>
							<tbody>
							<th><label for="last name">Last name</label></th>							
							<th><input type="text" name="lname" id="lname" readonly  style="width:350px; height:35px;" value="<?php echo $lnamee; ?>" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Last name"/></th>
							
						</tbody>
						
						
						<tbody>
							<th><label for="year">year:</label></th>
							<th> <select type="text" id="year"  style="width:350px; height:40px;" name="year" class="validate[required] text-input" >
										<option></option>
				                  <?php
							$query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowsss=mysql_fetch_array($query))
							{
							$uid=$rowsss['uid'];
							$year=$rowsss['year'];
							$semester=$rowsss['semester'];
							$controlstatus=$rowsss['controlstatus'];
							$deadline =$rowsss['deadline'];
							
							
							  if($year == 'First year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
							  
							   
									<option> First year</option>
									<?php
							  }
							  
							  
									 if($year == 'First year' && $semester == '2nd' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option> Second year</option>
									<?php	
									
								}
								
										 if($year == 'Second year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option> Second year</option>
									<?php	
									
								}

										 if($year == 'Second year' && $semester == '2nd' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option> Third year</option>
									<?php	
									
								}
								
											 if($year == 'Third year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option> Third year</option>
									<?php	
									
								}
								
									 if($year == 'Third year' && $semester == '2nd' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option> Fourth year</option>
									<?php	
									
								}
								
									 if($year == 'Fourth year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option> Fourth year</option>
									<?php	
									
								}
								
							  	 }
	  
	
									
							  ?>
							  
							  
								</select>
						</th>
												</tbody>
												
												
														<tbody>
							<th><label for="year">semester</label></th>
							<th> <select type="text" id="term"  style="width:350px; height:40px;" name="term" class="validate[required] text-input" >
							<option></option>
							
							          <?php
							$query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowsss=mysql_fetch_array($query))
							{
								$uid=$rowsss['uid'];
							$year=$rowsss['year'];
							$semester=$rowsss['semester'];
							$controlstatus=$rowsss['controlstatus'];
							$deadline = $rowsss['deadline'];
							
							
							   if($year == 'First year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active'){	?>
							  
							   
									<option>2nd</option>
									<?php
							  }
							  
							  
									 if($year == 'First year' && $semester == '2nd' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option>1st</option>
									<?php	
									
								}
								
										 if($year == 'Second year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option>2nd</option>
									<?php	
									
								}

										 if($year == 'Second year' && $semester == '2nd' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option>1st</option>
									<?php	
									
								}
								
											 if($year == 'Third year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option>2nd</option>
									<?php	
									
								}
								
									 if($year == 'Third year' && $semester == '2nd' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option>1st</option>
									<?php	
									
								}
								
									 if($year == 'Fourth year' && $semester == '1st' && $controlstatus == 'finish' && $deadline == 'Active' ){	?>
									
									<option>2nd</option>
									<?php	
									
								}
									}
							  ?>
								
					           
					
								</select>
						</th>
								</tbody>
						
							<tbody>
							<label for="email"></label>						
							<input type="hidden" name="email" id="email" value="<?php echo $email; ?>" readonly style="width:350px; height:35px;" class="validate[required,custom[email]] text-input" placeholder="email"/></th>
							
						</tbody>
							<tbody>
							<label for="phone number"></label>						
							<input type="hidden" name="phone" id="phone"   readonly style="width:350px; height:35px;" value="<?php echo $phone; ?>" class="validate[required,custom[phone]] text-input"  placeholder="phone number"/></th>
							
						</tbody>
						
							<tbody>
							<th><label for="pdate">Date</label></th>							
							<th><input type="text" name="rdate" id="rdate" readonly='readonly' style="width:350px; height:35px;" value="<?php echo date("Y-m-d");?>"  class="validate[required,custom[date]] text-input"   placeholder="date"/></th>
							
						</tbody>
							<tbody>
							<label for="region"></label>						
							<input type="hidden" name="region" id="region" readonly='readonly' style="width:350px; height:35px;" value="<?php echo $region; ?>"    class="validate[required] text-input"  placeholder="region"/></th>
							
						</tbody>
								<tbody>
							<label for="region"></label>						
							<input type="hidden" name="department" id="department" readonly='readonly' style="width:350px; height:35px;" value="<?php echo $depo; ?>"    class="validate[required] text-input"  placeholder="department"/></th>
							
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
	
	
	
		
   

