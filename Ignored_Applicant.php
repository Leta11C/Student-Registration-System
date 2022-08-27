<head>
 <script>
    function Confirmaccept()
    {
      var x = confirm("Are you sure you want to Activate?");
      if (x)
          return true;
      else
        return false;
    }
</script> 
</head>
<?php


include("modalstyle.php");
?>
<div class="navbar-inner">
		<font  class="" id="up"> Ignored Applicant</font>
    </div>
	
<div class="navbar-inner">
		
		<?php
include('config.php');
if(isset($_POST["delete_member"])) {
$username=$_POST['username'];
mysql_query("delete from account WHERE username='$username'  ")or die(mysql_error());
echo '<div class="alert alert-dismissable alert-error"><strong>';
echo "Administrator Successfulyy Deleted !";
echo '</strong></div>';
	}
?>		

		<?php
include('config.php');
if(isset($_POST["Accept_Applicant"])) {
$username=$_POST['username'];
mysql_query("UPDATE  account SET request_status = 'Accepted'  WHERE username='$username' ");
echo '<div class="alert alert-dismissable alert-error"><strong>';
echo "Applicant Successfully Accepted !";
echo '</strong></div>';
	}
?> 
		<?php
include('config.php');
if(isset($_POST["Ignore_Applicant"])) {
$username=$_POST['username'];
mysql_query("UPDATE  username SET request_status = 'Ignored'  WHERE username='$username'");
echo '<div class="alert alert-dismissable alert-error"><strong>';
echo "Applicant Successfulyy Ignored !";
echo '</strong></div>';
	}
?>
					<body>
						 <div class="panel-body">
                            <div class="table-responsive">
					
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                 
                            <thead>
						
                                <tr>
                                    <th></th>
								     <th>user_id</th>
									<th>username</th>
                                    <th>passwords</th>
									<th>user_type</th>
									<th>email</th>								
									<th>Action</th>
                                </tr>
                            </thead>
							     <tbody>
					<?php
								
							$query=mysql_query("select * from  account where  request_status='Ignored' order by user_id DESC ")or die(mysql_error());
							
							$count = mysql_num_rows($query);
							if($count == 0){
								echo '<div class="alert alert-dismissable alert-error"><strong>';
									echo "Ignored Users Not Available !";
								echo '</strong></div>';
							} else {
							echo '<div class="alert alert-dismissable alert-success"><strong>';
								echo $count." "."Users"." "."Ignored";
							echo '</strong></div>';	
							}
							$i=0;
							while($row=mysql_fetch_array($query)){
							$i++;
							$member_id=$row['user_id'];
							
							?>
							
							
						
                       

										<tr>
									
                                      
										<td>
										<?php echo $i; ?>
										</td>
                                        
										<td><?php echo $row['user_id'] ?></td>
                                         <td><?php echo $row['username'] ?></td>
										 <td><?php echo $row['passwords'] ?></td>
										 <td><?php echo $row['user_type'] ?></td>
										 <td><?php echo $row['email'] ?></td>
										 <?php
						echo '<td>';
										 echo '<form action="" method="POST"  onclick="return confirmdelete();">';
										 echo '<input type="hidden"  name="username" value="'.$row['username'].'" >';
										 echo '<input type="submit" Onclick="return Confirmaccept();" style="background-color:green" value="Activate" name="Accept_Applicant" class="btn"  >';
										// echo '<input type="submit" value="Delete" name="delete_member" class="btn"  >';
										 echo '</form>';
							
								echo '</td>';
									
									 
						?> 
						</tr>
						<?php } ?>	
						  </tbody>
                        </table>
					
		</div>					
</div>
</body>
