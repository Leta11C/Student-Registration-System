	
	<?php
include("config.php");

?>
 <?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
						<?php 
if(isset($_POST["submit_assignment"])) {
		$video = addslashes(file_get_contents($_FILES['video']['tmp_name']));
		$video = addslashes(file_get_contents($_FILES['video']['tmp_name']));
		$image_name = addslashes($_FILES['video']['name']);
		$image_size = getimagesize($_FILES['video']['tmp_name']);
		$type = explode('.', $image_name);
		$type = end($type);
		if($type != 'doc' && $type != 'pdf' && $type != 'ppt' && $type != 'docx' && $type != 'pptx' && $type != 'txt' && $type != 'csv'  ){
			$message = "Invalid File Format Not Supported !";
			echo '<div class="alert alert-dismissable alert-danger">';
			echo '<button type="button" class="close" data-dismiss="alert">X</button>';
			echo '<strong>'.$message.'</strong>';
			echo '</div>';
			} 
		else{
			move_uploaded_file($_FILES["video"]["tmp_name"], "student_assignment_files/" . $_FILES["video"]["name"]);
			$grade = "student_assignment_files/" . $_FILES["video"]["name"];
			$code= $_POST['code'];
			$name= $_POST['name'];
			$fname= $_POST['fname'];
			$lname= $_POST['lname'];	
			
			$id =$row['user_type'];
			mysql_query("insert into studentgrade (name,code,fname,lname,grade,user_type) values
		('$name','$code','$fname','$fname','$grade','$id')")or die(mysql_error());
		echo '<div class="alert alert-dismissable alert-success">';
     echo "Assignment Successfulyy inserted !";
		echo '</div>';
	}
}	
?>
	
			<?php include("validation/header.php"); ?>
			
				<form  class="form-horizontal" id="formID"  name="formID"  action=""  method="POST"  onsubmit="return validateForm()"  enctype="multipart/form-data">
				<table border="0" cellpadding="4" cellspacing="0">
			<tr>
                	<td>Course Name</td>
                    <td>
					<input type="text" name="name" id="name" placeholder="course name" class="validate[required,custom[onlyLetterSp]] text-input"  title="course name" >
                    </td>
            	</tr>		
<tr>
                	<td>Course Code</td>
                    <td>
					<input type="text" name="code" id="code" placeholder="course code" class="validate[required,custom[onlyLetterSp]] text-input"   title="Course Code" >
                    </td>
            	</tr>
				
				
				
				
				 <tr>
               		<td>First Name</td>
                    <td>
                    	<input type="text" value="" name="fname" id="fname" class="validate[required,custom[onlyLetterSp]] text-input"  style="width:130px; height:30px;"  min="1" title="instructor" placeholder="First Name" />
                    </td>
               </tr>
			   	 <tr>
               		<td>Last Name</td>
                    <td>
                    	<input type="text" value="" name="lname" id="lname" class="validate[required,custom[onlyLetterSp]] text-input"  style="width:130px; height:30px;"  min="1" title="instructor" placeholder="last Name" />
                    </td>
               </tr>
				<tr>
                	<td>grade</td>
                    <td>
					<input type="file" size="1" name="video" id="video"  class="validate[required] text-input"  placeholder="Attaches(Upload) Pdf,Doc,PPt Assignment(Optional)" >
					</td>
            	</tr>
				
			   
			<tr>
				 <td></td>
            	<td >
				<input type="submit" name="submit_assignment" value="Submit Grade" class="btn" id="form_input_height_width"  />
                </td>
            </tr>
		
			
          	</table>

    </form>	
	
	
		<form method="post" action="" >
				
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" width="100%" id="">
                            <thead>
						
                                <tr>
                                    <th></th>
                                    <th>Course Code</th>
									 <th>Course Name</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Download</th>
							
								
                                </tr>
                            </thead>
							<?php
							$i=0;							
							$i++;
								$result = mysql_query("SELECT * FROM studentgrade") or die (mysql_error()); 
								while($row = mysql_fetch_array($result)){?>
						<tr>
										<td>
										<?php echo $i; ?></td>
										<td><?php echo $row['name'] ?></td>
											<td><?php echo $row['code'] ?></td>
										<td><?php echo $row['fname'] ?></td>
										<td><?php echo $row['fname'] ?></td>
										
							          <td><a href="<?php echo $row['grade'];?>"> <font  class="btn btn-info">Download </font></a></td></tr>
								<?php
								}
								?>
							</table>
								</form>
							
				<!----------------------------------------------------------------------------->			
							
							<?php
if(isset($_POST["Import"])){
		
										
		echo $filename=$_FILES["file"]["tmp_name"];
		  $image_name = $_FILES['file']['name'];
								$type = explode('.', $image_name);
								$type = end($type);
									if($type != 'CSV' && $type != 'csv'){
											$message = "Invalid File Format Not Supported File Formate Must Be *.CSV!";
										echo '<div class="alert alert-dismissable alert-danger">';
										  echo '<button type="button" class="close" data-dismiss="alert">X</button>';
										  die('<strong>'.$message.'</strong>');
										echo '</div>';
										} 
										
										
		 if($_FILES["file"]["size"] > 0 )
		 {
		  	$file = fopen($filename, "r");
	         while (($data=fgetcsv($file, 1000, ",")) !== FALSE)
	         {
	          //It wiil insert a row to our subject table from our csv file`
	           $sql = "INSERT into muke (id,name,lname) 
	            	values('$data[0]','$data[1]','$data[2]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          
		$result = mysql_query( $sql );
	        

			}
	         fclose($file);
	
			 
				echo '<div class="alert alert-dismissable alert-success"><strong>';
									echo "CSV File has been successfully Imported!";
								echo '</strong></div>';
				
		 	
			
		 }
	}	 
?>

							
			<table border="0" cellpadding="5" cellspacing="0" width="100%" >	
				<form class="form-horizontal well" action="" method="post" name="upload_excel" enctype="multipart/form-data">			
			<tr>
				<td>Select CSV/Excel File:</td>
				<td>				
				<input  type="file" name="file" id="file" class="btn" title="Please Choose Photo For News" required >
				</td>
				<td>	
						<input type="submit"  name="Import" class="btn" data-loading-text="Loading..." value="Import" title="Press To Import">
					</td>
				</tr>
				 </form>
			</table>
							
							
						