<?php

include("config.php");
?>
<html>
<head>
   
  	<link href="css/main.css" rel="stylesheet" media="screen">
    <script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script> 

</head>

<body>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">
					
				</div>
			<div class="span10">
			   <div class ="ok">
			   <div class="alert alert-info">
                                 
                                </div>  
								<label><h4>SEARCH by:</h4></label>
								<?php
include("validation/header.php"); ?>	
								
									<form id="formID"  name="formID"  method="POST" action="sort_subject.php"  onsubmit="return validateForm()">
									<div class="uu">
									                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
									<th>
									Department 
										
										
									<select name="course" id="course" type="text" style="width:200px; height:40px;"  class="validate[required] text-input">
									<option></option>
									<?php 
									$course_query = mysql_query("select * from department") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option><?php echo $course_row['title']; ?></option>
									<?php  } ?>
									</select>
						</th>
						<th>
									&nbsp;&nbsp;&nbsp;&nbsp;
									Year 
									<select name="year" id="year" type="text" style="width:150px; height:40px;" class="validate[required] text-input">
									<option></option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Fourth Year</option>
									
									</select>
											&nbsp;&nbsp;&nbsp;&nbsp;</th>
											<th>
									Semester 
									<select name="term" id="term" type="text"  style="height:40px;" class="validate[required] text-input">
									<option></option>
									<option>1st</option>
									<option>2nd</option>
									<!-- <option>Third</option>
									<option>Fourth</option> -->
									</select>
								</th>
								</table>
									<button type="submit" name="sort_subject" class="btn"><i class="icon-check icon-large"></i>&nbsp;search</button>
								</form>
								
								
								
								
								
                           <?php


include("modalstyle.php");
?>
				 <div class="panel-body">
                            <div class="table-responsive">
					
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

								
								 <thead>
                                    <tr>
									   <th>Year </th>  
									    <th>Semester</th>      
                                         <th>Course code</th> 
                                        <th>Course Title</th>                                                                                                     
                                        <th>Department</th>  
									    <th>Delete</th>   
										 <th>Edit</th>  
														
                                                                   
                                                                    
                                                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from subject")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['subject_id'];  ?>
									
                                   <tr class="del<?php echo $id ?>">
									
                                    <td ><?php echo $row['year']; ?> </td> 
									 <td ><?php echo $row['term']; ?></td> 
									  <td><?php echo $row['code']; ?></td>   
									  <td><?php echo $row['title']; ?></td>                               
                               <td ><?php echo $row['course']; ?> </td> 
                              
                                
									<?php  
								 echo '<td>';
								  echo "<a rel='facebox' Onclick='return ConfirmDelete();'  href='delete_student.php?id=".$row['subject_id']."' class='btn btn-danger'><h5 style='background:red; color:black; border-radius:4px; height:20px;' >Delete</h5></a></td>";
								  
								echo '</td>';
						            ?>
									 <td >
                                      
										<a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="edit_course.php<?php echo '?id='.$id; ?>" class="btn btn-success" ><h5 style="background:#6495ED; color:black; border-radius:5px; margin-left:5px; height:20px; width:70px;">&nbsp;Edit</h5></a>
										
                                    </td>

									
                                    </td>
									
                                    </tr>
									<?php  }  ?>
								
                           
                                </tbody>
                            </table>
							</div>
							</div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							</div>
			</div>
			</div>		
			</div>
		</div>
    </div>
	</body>
	</html>
