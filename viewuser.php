 <head>
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>	
 
			<form name="per_info" enctype="multipart/form-data" method="post">
			
			<?php
	$statu="Accepted";
									$dese = mysql_query("SELECT * FROM account WHERE request_status='$statu'"); 
										  $X=0;
										  while($de = mysql_fetch_array($dese)){
											$statu=$de['request_status'];
											if($statu=="Accepted"){
											$X++;
											}
											else{
											$X=0;
											}}?>
							<?php 
							echo"";
		                  echo"<font face='times new roman' size='5px' color='green' margin-left:5px>";
			           echo'There are &nbsp;'.$X.'&nbsp; users available.';
			          echo"</font>";
			              echo"</script>";
			   
			   echo"";?>   
			  
<?php


include("modalstyle.php");
?>
 <br></br>
				 <div class="panel-body">
                            <div class="table-responsive">
					
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									
                                        <tr>
                                           <th>User id </th>  
										    <th>First Name</th>   
                                           <th>Middle Name</th>
                                           <th>User type</th>                     
                                             <th>email</th> 
											 
											 
										
                                        </tr>
                                    </thead>
                                    <tbody>
							 <?php
						$result = mysql_query("SELECT * FROM account order by user_id DESC");	
	
						while($row = mysql_fetch_array($result)){?>
							 <tr>
								 <td><?php echo $row["user_id"];?></td>
								 <td><?php echo $row["fname"];?></td>
								 <td><?php echo $row["mname"];?></td>
								  <td><?php echo $row["user_type"];?></td>
								    <td><?php echo $row["email"];?></td>
							
								
											
									
							<?php
							}
							?>
						
								</tr>
				              </tbody>
                                </table>
                            </div>
                            
                      </div>
</form>

<script type="text/javascript">
				function confirmation_r(ID) {
						var answer = confirm("Are you sure to deactivate the account?")
						if (answer){							
							window.location = "deactivate_acc.php?username="+ID;
						}
					}
			</script>
			</div>
			</form>
		</div>
		</div>