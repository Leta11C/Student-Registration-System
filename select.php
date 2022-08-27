<?php

include("config.php");
?>
<html>
<head>
   
  	<link href="css/sel.css" rel="stylesheet" media="screen">
   
</head>

<body>
 
			   <div class ="ok">
		
								<label><h4>CHOOSE COURSE</h4></label>
									<?php
include("validation/header.php"); ?>			
	
						<form  class="form-horizontal" id="formID"  name="formID"  method = "POST" class="form-inline" action="register.php" onsubmit="return validateForm(2") >
					<?php
			$query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowss=mysql_fetch_array($query))
							{
							$department=$rowss['department'];
							//$mnamee=$rowss['mname'];
							
							}
							?>
				        user_id:
						<input  type="text" style="width:200px;" readonly id="uid" value="<?php echo $user_id; ?>" name="uid" placeholder="user_id"  onkeypress="return alpha(event,numbers)" class="validate[required,custom[number]] text-input">
							
									<div class="selam">	
						Department <input name="department" readonly type="text" value="<?php echo $department; ?>" id="department" style="width:200px;" class="validate[required] text-input" ></center>
									
									</div>
									&nbsp;&nbsp;&nbsp;&nbsp;
									Year 
									<select name="year" type="text"id="year" i style="width:200px;" class="validate[required] text-input" >
									<option></option>
								    <?php
							$query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowsss=mysql_fetch_array($query))
							{
							$uid=$rowsss['uid'];
							$year=$rowsss['year'];
							$semester=$rowsss['semester'];
							$controlstatus=$rowsss['controlstatus'];
							//$deadline =$rowsss['deadline'];
							
							
							  if($year == 'First year' && $semester == '1st' && $controlstatus == 'finish' ){	?>
							  
							   
									<option> First year</option>
									<?php
							  }
							  
							  
									 if($year == 'First year' && $semester == '2nd' && $controlstatus == 'finish'  ){	?>
									
									<option> First year</option>
									<?php	
									
								}
								
										 if($year == 'Second year' && $semester == '1st' && $controlstatus == 'finish'  ){	?>
									
									<option> Second year</option>
									<?php	
									
								}

										 if($year == 'Second year' && $semester == '2nd' && $controlstatus == 'finish'){	?>
									
									<option> Second year</option>
									<?php	
									
								}
								
											 if($year == 'Third year' && $semester == '1st' && $controlstatus == 'finish' ){	?>
									
									<option> Third year</option>
									<?php	
									
								}
								
									 if($year == 'Third year' && $semester == '2nd' && $controlstatus == 'finish' ){	?>
									
									<option> Third year</option>
									<?php	
									
								}
								
									 if($year == 'Fourth year' && $semester == '1st' && $controlstatus == 'finish' ){	?>
									
									<option> Fourth year</option>
									<?php	
									
								}
									 if($year == 'Fourth year' && $semester == '2nd' && $controlstatus == 'finish' ){	?>
									
									<option> Fourth year</option>
									<?php	
									
								}
								
							  	 }
	  
	
									
							  ?>
									
									</select>
											&nbsp;&nbsp;&nbsp;&nbsp;
									
									Semister <select name="semester" type="text" id="semester"  class="validate[required] text-input"  style="width:200px;">
									<option></option>
									          <?php
							$query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from studentt where uid ='$user_id'") or die( mysql_error());
							while($rowsss=mysql_fetch_array($query))
							{
								$uid=$rowsss['uid'];
							$year=$rowsss['year'];
							$semester=$rowsss['semester'];
							$controlstatus=$rowsss['controlstatus'];
							$deadline = $rowsss['deadline'];
							
							
						
							  if($year == 'First year' && $semester == '1st' && $controlstatus == 'finish' ){	?>
							  
							   
									<option>1st</option>
									<?php
							  }
							  
							  
									 if($year == 'First year' && $semester == '2nd' && $controlstatus == 'finish'  ){	?>
									
									<option>2nd</option>
									<?php	
									
								}
								
										 if($year == 'Second year' && $semester == '1st' && $controlstatus == 'finish'  ){	?>
									
									<option>1st</option>
									<?php	
									
								}

										 if($year == 'Second year' && $semester == '2nd' && $controlstatus == 'finish'){	?>
									
									<option>2nd</option>
									<?php	
									
								}
								
											 if($year == 'Third year' && $semester == '1st' && $controlstatus == 'finish' ){	?>
									
									<option>1st</option>
									<?php	
									
								}
								
									 if($year == 'Third year' && $semester == '2nd' && $controlstatus == 'finish' ){	?>
									
									<option>2nd</option>
									<?php	
									
								}
								
									 if($year == 'Fourth year' && $semester == '1st' && $controlstatus == 'finish' ){	?>
									
									<option>1st</option>
									<?php	
									
								}
									 if($year == 'Fourth year' && $semester == '2nd' && $controlstatus == 'finish' ){	?>
									
									<option>2nd</option>
									<?php	
									
								}
								
								
									}
							  ?>
									</select>
								
									<button type="submit" name="select_subject" class="btn"><i class="icon-check icon-large"></i>&nbsp;search</button>
								</form>
								
                            
							</div>
							
																	<script type="text/javascript">
<!--
var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
var numbers='1234567890'
var signs=',.:;@-\''
var mathsigns='+-=()*/'
var custom='<>#$%&?¿'

function alpha(e,allow) {
     var k;
     k=document.all?parseInt(e.keyCode): parseInt(e.which);
     return (allow.indexOf(String.fromCharCode(k))!=-1);
	 alert('letter only');
}
	</script>