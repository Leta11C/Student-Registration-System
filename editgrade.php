<?php

include("config.php");
?>
<html>
<head>
   
  	<link href="css/grad.css" rel="stylesheet" media="screen">
   
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
								
									<form id="formID"  name="formID"  method="POST"   onsubmit="return validateForm()">
									<div class="uu">
									                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
									<th  style="background-color:white; color:black;" >
									User_ID 
										
										
									<input name="userid" id="userid" type="text" style="width:200px;" class="validate[required] text-input"/>
								
									</select>
						</th>
						<th style="background-color:white;color:black;">
									&nbsp;&nbsp;&nbsp;&nbsp;
									Subject_id 
									<input type="text"  name="subject_id" id="subject_id" type="text" style="width:150px;" class="validate[required] text-input"/>
									
											&nbsp;&nbsp;&nbsp;&nbsp;</th>
								
								</table>
									<button type="submit" name="grade" class="btn"><i class="icon-check icon-large"></i>&nbsp;search</button>
								</form>
						
                        
							</div>
							  <table cellpadding="3" cellspacing="3" border="1" class="table  table-bordered" id="example">							
                                <thead>
                                    <tr>
                                       <tr>
									       <th>user_id </th>  
										  <th>subject_id</th>   
										  <th>Grade value</th>
                                           <th>school_year</th>
										
                                           <th> semester</th>
										  <th>Grade</th> 
                                            <th>Credit Hour</th>  
											 <th>Edit</th>  
                                                            
                                   
										
                                    </tr>
                                </thead>
                                <tbody>
								 
													 <?php if (isset($_POST['grade'])){
								$userid = $_POST['userid'];
									$subject_id = $_POST['subject_id'];
									
								 ?>
								 
								 
                                <?php $user_query=mysql_query("select * from grade where uid = '$userid' and subject_id = '$subject_id'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									$id=$row['grade_id'];  ?>
									
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['uid']; ?> </td> 
									 <td width="80"><?php echo $row['subject_id']; ?></td>
									  <td width="80"><?php echo $row['gen_ave']; ?></td>
									 	<td><?php echo $row['school_year']; ?></td> 
										 <td><?php echo $row['semester']; ?></td>
                                          <td><?php echo $row['Grade']; ?></td>  
									 <td width="80"><?php echo $row['unit']; ?></td> 
									 
									  <td >
                                      
										<a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="grade_update.php<?php echo '?id='.$id; ?>" class="btn btn-success">Edit</a>
										
                                    </td>
									 
									
									
							
                                 </tr>
									<?php  }  ?>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
			</div>
			</div>		
			</div>
		</div>
    </div>
	</body>
	</html>
