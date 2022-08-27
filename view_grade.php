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
<link href="dess/boot.css" rel="stylesheet">
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
			  <li><a href="registrar.php?pagi=">view Grade</a></li>
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
		<head>
		<style>
		.last{
			margin-left:250px;
			margin-top:10px;
		}
		.lastt{
			margin-left:690px;
			margin-bottom:15px;
		}
		
		.modal button[type="submit"]
	{
  height:35px;
  width:100px;

  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
  margin-top:5px;
  margin-left:700px;
  background:blue;
  color:black;
}
		</style>
		</head>
			 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
	<div class="print"id="printablediv">
<?php


include("config.php");
?>
<?php $get_id = $_GET['id']; ?>
<?php
			$student_query=mysql_query("select * from studentt where uid = '$get_id'")or die(mysql_error());
			while($row = mysql_fetch_array($student_query)){
			$school_year = $row['year'];
			$term = $row['semester'];
			$student_status = $row['status'];
			
			?>
			<div class="name">
			<div class="last">
				HARAMAYA UNIVERSITY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				OFFICE OF REGISTRAR
				<br></div>
				<div class="lastt">
				<?php  echo date("d-m-Y");       ?>
				</div>
				
			
				<span>USER ID:<strong><?php echo $row['uid']; ?></strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<span>STUDENT NAME:<strong><?php echo $row['fname']." ".$row['mname']; ?></strong></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span>DEPARTMENT:<strong><?php echo $row['department']; ?></strong></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span id="print_right">
				<span><?php echo $row['year']; ?> :<strong> <?php echo $row['semester']; ?> &nbsp; Semister</strong></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span>Status:<strong><?php echo $row['status']; ?> </strong></span>
				
				</span>
			</div>
			




   <table cellpadding="0  cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr style="background:white;">
                                        <th style="background-color:white; color:black;" width="200">Course Code</th>
                                        <th style="background-color:white; color:black;" width="400">Course Name</th>
                                        <th style="background-color:white; color:black;">Credit Hour</th>                                 
                                         <th style="background-color:white; color:black;" >Grade</th>       
                                           
									
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from grade where uid = '$get_id' and school_year = '$school_year' and semester = '$term' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									//$id=$row['grade_id'];
									$grade = $row['Grade'];
									$subject_id = $row['subject_id'];
									/* subject */
									$subject_query = mysql_query("select * from subject where subject_id = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									<tr>
                                    <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
                                    <td><?php echo $subject_row['unit']; ?></td>                                 
                                  
								

	<?php if ($grade == 'A+'){ ?>
	              <td><span class="very_good"><?php echo $row['Grade']; ?></span></td>  
									<?php }else if($grade == 'A'){ ?>
									<td><span class="very_good"><?php echo $row['Grade']; ?></span></td>  
									<?php }else if($grade == 'A-'){ ?>
									<td><span class="very_good"><?php echo $row['Grade']; ?></span></td>  
									<?php }else if($grade == 'B+'){ ?>
									<td><span class="Excellent"><?php echo $row['Grade']; ?></span></td>   
									<?php }else if($grade == 'B'){ ?>
									<td><span class="very_good"><?php echo $row['Grade']; ?></span></td>  
									<?php }else if($grade == 'B-'){ ?>
									<td><span class="very_good"><?php echo $row['Grade']; ?></span></td>  
									<?php }else if($grade == 'C+'){ ?>
									<td><span class="Excellent"><?php echo $row['Grade']; ?></span></td>   
									<?php }else if($grade == 'C'){ ?> 
                                    <td><span class="very_good"><?php echo $row['Grade']; ?></span></td>  
									<?php }else if($grade == 'C-'){ ?>									
									<td><span class="sat"><?php echo $row['Grade']; ?></span></td> 
									<?php }else if($grade == 'D'){ ?>
									<td><span class="very_good"><?php echo $row['Grade']; ?></span></td>  
									<?php }else if($grade == 'Fx'){ ?>
									<td><span class="fair"><?php echo $row['Grade']; ?></span></td> 
									<?php }else if($grade == 'F'){ ?>
									<td><span class="failed"><?php echo $row['Grade']; ?></span></td> 
									<?php }else if($grade == 'INC'){ ?>
									<td><span class="failed"><?php echo $row['Grade']; ?></span></td> 
									<?php }else if($grade == ' DRP'){ ?>
									<td><span class="drop"><?php echo $row['Grade']; ?></span></td> 
									<?php }else if ($grade == ''){ ?> 
										<td><?php echo $row['Grade']; ?></td> 
									 <?php } ?>									
								
									<?php  }}  ?>
									
									</tbody>
								
									<?php include('units_table.php'); ?>
									<?php include('gwa_table.php'); ?>
						<?php include('cwa_table.php'); ?>
					<?php include('stu.php'); ?>
					
								
								
                            </table>
							<?php }?>
							</div>
							
							
							
							
							
							
							 <div class="modal">
                
				  <button name="submit" type="submit" onclick="javascript:printDiv('printablediv')"  ><i class="icon-print"></i>&nbsp;Print</button>
								
                                            
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