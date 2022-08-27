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
	<?php
include("config.php");

?>


<form method="post" action="" >
				
                 <?php


include("modalstyle.php");
?>
<body>
 
        
                           <div class="panel-body">
                            <div class="table-responsive">
					
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
						
                                <tr>
                                    <th></th>
                                    <th>Course Code</th>
									 <th>Course Name</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Download</th>
									<th>Delete</th>
									
							
								
                                </tr>
                                 </thead>
                                    <tbody>
							<?php
							$i=0;							
							
								$result = mysql_query("SELECT * FROM studentgrade") or die (mysql_error()); 
							
							
							
								while($row = mysql_fetch_array($result)){
										$i++;
									?>
									
						<tr>
										<td>
										<?php echo $i; ?></td>
										<td><?php echo $row['name'] ?></td>
											<td><?php echo $row['code'] ?></td>
										<td><?php echo $row['fname'] ?></td>
										<td><?php echo $row['fname'] ?></td>
										
										

							          <td><a href="student_assignment_files/<?php echo $row['grade'];?>"> <font  class="btn btn-info"style="background:#6495ED; color:black; border-radius:5px;"><h5 style="background:#6495ED; color:black; border-radius:5px; margin-left:5px; height:20px; width:100px;'">&nbsp;&nbsp;&nbsp;Download</h5> </font></a></td>
									 <?php 
								 echo '<td>';
								  echo "<a rel='facebox' Onclick='return ConfirmDelete();' href='deletegrade.php?id=".$row['grade_id']."' class='btn btn-danger' style='background:red; color:black; border-radius:4px;'><h5 style='background:red; color:black; border-radius:4px; height:20px;' >Delete</h5></a>";
							
								 
								echo '</td>';							?>
								
							</tr>
							

							<!--<button name="sort" onClick="window.print()";   class="btn btn-info" ><i class="icon-print"></i>&nbsp;Print</button>-->
								<?php
								}
								?>
								
							                </tbody>
                                </table>
                            </div>
                            
                      </div>
                   
              

    

</body>
								</form>