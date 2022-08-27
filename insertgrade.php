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
	           $sql = "INSERT into grade (uid,subject_id,code,title,gen_ave,school_year,semester,Grade,unit) 
	            	values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          
		$result = mysql_query( $sql );
	        

			}
	         fclose($file);
	
			 
				echo '<div class="alert alert-dismissable alert-success"><strong>';
				
				echo"<script>alert('CSV File has been successfully Imported')</script>";
				
									echo "<script>windows: location='registrar.php?ins='</script>";
									
									
									
				
								echo '</strong></div>';
				
		 	
			
		 }
	}	 
?>
<head>

<style>



.detailss
{

background:#00008B;
color:white;
width:790px;
margin-top:30px;
height:40px;
margin-left:0px;


}
</style>
</head>

				<div class="detailss">
				
				<center>Please Import The Student Grade</center>
				</div>							
<table border="0" cellpadding="10" cellspacing="0" width="100%" >	
				<form class="form-horizontal well" action="" method="post" name="upload_excel" enctype="multipart/form-data">			
			<tr>
				<td>Select CSV/Excel File:</td>
				<td>				
				<input  type="file" name="file" id="file" class="btn" title="Please Choose Photo For News" required >
				</td>
				<td>	
						<input type="submit"  name="Import" class="btn" data-loading-text="Loading..." value="Import"    style="background-color:red; width:100px; height:40px;" title="Press To Import">
					</td>
				</tr>
				 </form>
			</table>
						


