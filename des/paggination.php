      

	   <!-- /.navbar-static-top -->
	<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HU Save and Credit Association Management System</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
 
    <!-- Page-Level Plugin CSS - Dashboard -->
 
               

</head>

<body>
 
            <!-- /.row -->
                  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Members Data
                        </div>
						  
                        <!-- /.panel-heading -->
                           <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>FName</th>
											<th>MName</th>
											<th>LName</th>
                                            <th>Sex</th>
                                            <th>Email</th>
											 
											 
										
                                        </tr>
                                    </thead>
                                    <tbody>
       
                                                               <?php


include("config.php");
?>
                                 <?php  $user_query=mysql_query("select * from subject")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									 ?>
									
                                   <tr >
									
                                    <td ><?php echo $row['year']; ?> </td> 
									 <td ><?php echo $row['term']; ?></td> 
									  <td><?php echo $row['code']; ?></td>   
									  <td><?php echo $row['title']; ?></td>                               
                               <td ><?php echo $row['course']; ?> </td> 
                              
                                
								

									
                                  
								 </tr>
									<?php  }  ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                      </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

    <script src="js/jquery-1.10.2.js"></script>
  
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

   
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>


    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
