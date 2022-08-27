    <?php


include("modalstyle.php");
?>
<body>
 
        
                           <div class="panel-body">
                            <div class="table-responsive">
					
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    
                                       <tr>
									       <th>User id </th>  
										    <th>Semester</th>   
                                           <th>course code</th>
										<th>course title</th> 
                                        <th>Course code</th>                                 
                                         
                                           <th>pre_requisites</th>                     
                                             <th>department</th> 
											  <th>Instructor</th> 
											 
                                                                     
                                      
										
										
                                    </tr>
                                </thead>
                                <tbody>
								 
								<?php $query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
									$rows=mysql_fetch_array($query);
										$des = $rows['user_id'];
									?>
								
								 
                                <?php $user_query=mysql_query("select * from course where user_id = '$des' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									
									$id=$row['user_id'];  ?>
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['user_id']; ?> </td> 
									 <td width="80"><?php echo $row['term']; ?></td> 
									 	<td><?php echo $row['code']; ?></td> 
										 <td><?php echo $row['title']; ?></td>
										 <td><?php echo $row['unit']; ?></td>
                                          <td><?php echo $row['pre_requisites']; ?></td>  
										  <td><?php echo $row['course']; ?></td>  
										  
										    <td><?php echo $row['instname']; ?></td>  
									
										  
									
                                 </tr>
									<?php  }  ?>
								
                           
                                </tbody>
                            </table>
							
							</div>
							</div>