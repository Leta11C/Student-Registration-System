      

	
<html>


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
										    <th>First Name</th>   
                                           <th>Middle Name</th>
									                                 
                                         
                                           <th>Department</th>                     
                                             <th>Action</th> 
											 
											 
										
                                        </tr>
                                    </thead>
                                    <tbody>
       
                                                               <?php


                          include("config.php");?>
                      <?php $user_query=mysql_query("select * from studentt where year='First year' and semester='1st'  order by uid ASC")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
										
									
									$id=$row['uid'];  
									 
									?>
								
									<tr class="del<?php echo $id ?>">
									 <td ><?php echo $row['uid']; ?> </td> 
									 <td width="80"><?php echo $row['fname']; ?></td> 
									 	<td><?php echo $row['mname']; ?></td> 
										
                                          <td><?php echo $row['department']; ?></td>  
										  <td>
										  <a  rel="tooltip"  title="CalculateGrade" id="v<?php echo $id; ?>"  href="view_grade.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-list icon-large">View</i></a>
                                    </td>
										  </td>
									
                                 </tr>
									<?php  }  ?>
                                    </tbody>
                                </table>
                            </div>
                            
                      </div>
                   
              

    

</body>

</html>
