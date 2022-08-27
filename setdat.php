<?php
include("config.php");
?>
<html>
<head>
<style>
.setdate
{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5);
 border-top-left-radius:10px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  margin-left:80px;
  margin-top:20px;
  width:570px;
}
.set{
	
	 margin-left:200px;
  margin-top:20px;
}
button[type="submit"]{
	width:110px;
	height:40px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
}
.date{
margin-right:30px;

}

</style>
</head>
<body>

<div class="setdate">
<div class="set">
<?php 
$daa = date('Y-m-d');

?>
<h4>Set Deadline Date</h4>
<?php include("validation/header.php"); ?>
	<form id="formID"  name="formID"  method="post"  onsubmit="return validateForm()">
				
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <h5>For Registration</h5>
					
					<div class="date">  Start Date </div>
				
				<input type="text" style="width:150px; margin-left:-20px;"   readonly id="regdate" name="regdate"  value="<?php  echo $daa ; ?>"class="validate[required,custom[date]] text-input" placeholder="Date of Birth" /> 
				<br>
				<div class="date">  End Date </div>
					<input type="date" style="width:200px; margin-left:-20px;"  id="deaddate" name="deaddate" class="validate[required,custom[date]] text-input" placeholder="Date of Birth" /> 
					<br>
					<button type="submit" style="width:140px; " name="date" class="btn btn-primary btn-lg">Set Date</button>	
						</form><br><br><br></div>
												<?php
									
	
	if(isset($_POST['date'])){
		
		$rdate = $_POST['regdate'];
		$deaddate = $_POST['deaddate'];
								$error = 0;
								$datee = date('y-m-d');
								$date = date("Y-m-d");
								   $da = date('Y-m-d', strtotime($date. ' + 1 days'));

			if($rdate  != $date) {
							 echo '<div class="alert alert-dismissable alert-danger">';
							 echo '<strong>'.$rdate . " "."The Date You inserted does not match with current day !".'</strong>';
							 echo '</div>';
							 $error=1;
							}
	if($deaddate  != $da) {
							 echo '<div class="alert alert-dismissable alert-danger">';
							 echo '<strong>'.$deaddate . " "."The Date You inserted does not match with next day !".'</strong>';
							 echo '</div>';
							 $error=1;
							}
	
		
		
		
		if ($error == 0){
		mysql_query("delete from datecontrol")or die(mysql_error());
		mysql_query("insert into datecontrol(reg_date,deadline) values('$rdate','$deaddate') ");
		$stu="Active";
	    mysql_query("update studentt  set deadline='$stu'")or die(mysql_error());
		 echo '<div class="alert alert-dismissable alert-danger" style="margin-left:80px; color:green;">';
		       echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date successfully set";
			    echo '</div>';
	}
	}
	?>

	</div>
	</body>
	</html>