     <table cellpadding="3" cellspacing="3" border="1" class="table  table-bordered" id="example">							
                                <thead>
                                    <tr>
                                       <tr>
									       <th>User id </th>  
										    <th>First Name</th>   
                                           <th>Middle Name</th>
										<th>Semester</th> 
                                        <th>Year</th>                                 
                                         
                                           <th>Department</th>                     
                                             <th>Action</th>                        
                                                                     
                                      
										
										
                                    </tr>
                                </thead>
                                <tbody>
								 
								<?php $query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
									$rows=mysql_fetch_array($query);
										$des = $rows['user_id'];
									?>
								
								 
								 
								  <?php 
								  $dess = "2nd";
								  $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'First year' and semester =' $dess ' ")or die(mysql_error());
									while($rows=mysql_fetch_array($user_query)){
										
										
									}?>
								 
                                <?php $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'First year' and semester ='1st' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									
									$id=$row['uid']; 


                                   $year=$row['year']; 
									$semester=$row['semester'];									?>
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['uid']; ?> </td> 
									 <td width="80"><?php echo $row['fname']; ?></td> 
									 	<td><?php echo $row['mname']; ?></td> 
										 <td><?php echo $row['semester']; ?> and <?php echo $dess; ?>  </td>
										 <td><?php echo $row['year']; ?></td>
                                          <td><?php echo $row['department']; ?></td>  
										  <td>
										  <a  rel="tooltip"  title="CalculateGrade" id="v<?php echo $id; ?>"  href="viewgradee.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-list icon-large">view</i></a>
										  
                                    </td>
										  </td>
									
                                 </tr>
									<?php  }  ?>
								
                           
                                </tbody>
                            </table>
							
							   <table cellpadding="3" cellspacing="3" border="1" class="table  table-bordered" id="example">							
                              
                                <tbody>
								 
								<?php $query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
									$rows=mysql_fetch_array($query);
										$des = $rows['user_id'];
									?>
								
								 
								 
								  <?php 
								  $dess = "2nd";
								  $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'Second year' and semester =' $dess ' ")or die(mysql_error());
									while($rows=mysql_fetch_array($user_query)){
										
										
									}?>
								 
                                <?php $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'Second year' and semester ='1st' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									
									$id=$row['uid']; 


                                   $year=$row['year']; 
									$semester=$row['semester'];									?>
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['uid']; ?> </td> 
									 <td width="80"><?php echo $row['fname']; ?></td> 
									 	<td><?php echo $row['mname']; ?></td> 
										 <td><?php echo $row['semester']; ?> and <?php echo $dess; ?>  </td>
										 <td><?php echo $row['year']; ?></td>
                                          <td><?php echo $row['department']; ?></td>  
										  <td>
										  <a  rel="tooltip"  title="CalculateGrade" id="v<?php echo $id; ?>"  href="viewgradeee.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-list icon-large">view</i></a>
										  
                                    </td>
										  </td>
									
                                 </tr>
									<?php  }  ?>
								
                           
                                </tbody>
                            </table>
							
							   <table cellpadding="3" cellspacing="3" border="1" class="table  table-bordered" id="example">							
                              
                                <tbody>
								 
								<?php $query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
									$rows=mysql_fetch_array($query);
										$des = $rows['user_id'];
									?>
								
								 
								 
								  <?php 
								  $dess = "2nd";
								  $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'Third year' and semester =' $dess ' ")or die(mysql_error());
									while($rows=mysql_fetch_array($user_query)){
										
										
									}?>
								 
                                <?php $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'Third year' and semester ='1st' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									
									$id=$row['uid']; 


                                   $year=$row['year']; 
									$semester=$row['semester'];									?>
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['uid']; ?> </td> 
									 <td width="80"><?php echo $row['fname']; ?></td> 
									 	<td><?php echo $row['mname']; ?></td> 
										 <td><?php echo $row['semester']; ?> and <?php echo $dess; ?>  </td>
										 <td><?php echo $row['year']; ?></td>
                                          <td><?php echo $row['department']; ?></td>  
										  <td>
										  <a  rel="tooltip"  title="CalculateGrade" id="v<?php echo $id; ?>"  href="viewgrad.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-list icon-large">view</i></a>
										  
                                    </td>
										  </td>
									
                                 </tr>
									<?php  }  ?>
								
                           
                                </tbody>
                            </table>
							 <table cellpadding="3" cellspacing="3" border="1" class="table  table-bordered" id="example">							
                              
                                <tbody>
								 
								<?php $query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
									$rows=mysql_fetch_array($query);
										$des = $rows['user_id'];
									?>
								
								 
								 
								  <?php 
								  $dess = "2nd";
								  $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'Fourth year' and semester =' $dess ' ")or die(mysql_error());
									while($rows=mysql_fetch_array($user_query)){
										
										
									}?>
								 
                                <?php $user_query=mysql_query("select * from studentt where uid = '$des' and year = 'Fourth year' and semester ='1st' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									
									$id=$row['uid']; 


                                   $year=$row['year']; 
									$semester=$row['semester'];									?>
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['uid']; ?> </td> 
									 <td width="80"><?php echo $row['fname']; ?></td> 
									 	<td><?php echo $row['mname']; ?></td> 
										 <td><?php echo $row['semester']; ?> and <?php echo $dess; ?>  </td>
										 <td><?php echo $row['year']; ?></td>
                                          <td><?php echo $row['department']; ?></td>  
										  <td>
										  <a  rel="tooltip"  title="CalculateGrade" id="v<?php echo $id; ?>"  href="viewgradlast.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-list icon-large">view</i></a>
										  
                                    </td>
										  </td>
									
                                 </tr>
									<?php  }  ?>
								
                           
                                </tbody>
                            </table>