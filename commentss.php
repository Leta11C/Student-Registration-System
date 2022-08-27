
			<head>				
	<link href="./layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">		</head>
  	
   
      <div class="clear"></div>
  


 <head>

</head>	
 <div class="modalcontent">	
			<form name="per_info" enctype="multipart/form-data" method="post">
			
			    <div class="modal-header">
					
					<div class="modal-title">View comment</div>
					
				</div>
				
				<div class="modal-body">
				<table>

							
							
			
			
			
			<?php


include("modalstyle.php");
?>
<body>
 
        
                           <div class="panel-body">
                            <div class="table-responsive">
					
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									
                                        <tr>
                                           <th>Name </th>  
										    <th>Email</th>   
                                           <th>Comment</th>
									                                 
     		
                                        </tr>
                                    </thead>
                                    <tbody>
       
                                                               <?php


                          include("config.php");?>
                      <?php $user_query=mysql_query("select * from comment   order by date ASC")or die(mysql_error());
					  $rowcolor=0;
			              $intt=mysql_num_rows($user_query);
						  
			echo"<font face='times new roman' size='2px' color='red'>";
			echo'There are &nbsp;'.$intt.'&nbsp; new Comment.';
			echo"</font>";
			echo"</script>";
			echo"<br><br>";
									while($row=mysql_fetch_array($user_query)){
										$ctrl = $row['comment_id'];?>
										<tr>
									 <td ><?php echo $row['name']; ?> </td> 
									 <td ><?php echo $row['email']; ?></td> 
									  <td><?php echo $row['content']; ?></td> </tr>
								
									<?php  }  ?>
                                    </tbody>
                                </table>
                            </div>
                            
                      </div>
			
			
	
	</tbody>
</table>
</form>


			</div>
			</form>
		</div>
		</div>