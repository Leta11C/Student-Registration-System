





 <html>
  <head>
 <link rel="stylesheet" type="text/css" href="css/de.css">
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
			
			    <div class="modal-header">
					
					<div class="modal-title">Delete Post Notice</div>
					
				</div>
				
				<div class="modal-body">
<?php


include("modalstyle.php");
?>
				 <div class="panel-body">
                            <div class="table-responsive">
					
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									
                                        <tr>
                                           <th>POST ID </th>  
										    <th>Date</th>   
                                           <th>Post Title</th>
                                                        
                                             <th>Action</th> 
											 
											 
										
                                        </tr>
                                    </thead>
                                    <tbody>
							 <?php
						$result = mysql_query("SELECT * FROM post_noticee order by post_id DESC");	
	
						while($row = mysql_fetch_array($result)){?>
							 <tr>
								 <td><?php echo $row["post_id"];?></td>
								 <td><?php echo $row["date"];?></td>
								 <td><?php echo $row["post_title"];?></td>
								
								<td>
									 <?php 
								// echo '<td>';
							  echo "<a rel='facebox' Onclick='return ConfirmDelete();' href='delete.php?id=".$row['post_id']."' class='btn btn-danger'><h2 style='background:red; color:black; border-radius:4px; height:20px; width:70px;' >&nbsp;&nbsp;Delete</h2></a></td>";
							
											
									
							}?>
							</td>
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
		




















