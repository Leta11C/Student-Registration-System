
</html>
 <html>
 <head>
<link rel="stylesheet" type="text/css" href="css/dee.css">
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
 <div class="modal-content">	
			<form name="per_info" enctype="multipart/form-data" method="post">
			
			   
					
					<div class="modal-title">view Instructor</div>
					
			
				
				<div class="modal-body">
			
<?php
include("config.php");
 ?>
<?php
include("modalstyle.php");
?>
 <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									
                                        <tr style="background_color:red;">
                                           <th>UD </th>  
										    <th>First Name</th>   
                                           <th>Last Name</th>           
                                             <th>Department</th> 
											    <th>Position</th> 
											    <th>Action</th> 
										   <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>

<?php
$result = mysql_query("SELECT * FROM instructor order by user_id DESC");	
						
						while($row = mysql_fetch_array($result)){
													 		$id=$row['inst_id']; ?>
							
							 
							 

									
                                   <tr class="del<?php echo $id ?>">
								 <td><?php echo $row["user_id"];?></td>
								 <td><?php echo $row["fname"];?></td>
								 <td><?php echo $row["lname"];?></td>
								  <td><?php echo $row["department"];?></td>
								 <td><?php echo $row["qual"];?></td>
								
								
								 <td>
								 <?php 
								// echo '<td>';
								  echo "<a rel='facebox' Onclick='return ConfirmDelete();' href='deleteins.php?id=".$row['user_id']."' class='btn btn-danger'>Delete</a></td>";
							      
								 
							?>
								</td>
									 <td >
                                      
										<a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="updateinst.php<?php echo '?id='.$id; ?>" class="btn btn-success">Edit</a>
										
                                    </td>
								
									
							<?php
							
							}
							?>
	
	
								</tr>
				              </tbody>
                                </table>
                            </div>
                            
                      </div>

			</div>
			</form>
		</div>
		</div>
		</body>
		</html>
		

