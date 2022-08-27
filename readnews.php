<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">




<?php
include("config.php");
$run = mysql_query("select * from datecontrol");
$row = mysql_fetch_array($run);
$varr = $row['reg_date'];
$deadline_reg ="$varr";
$var = $row['deadline'];
$enddate ="$var";
?>

<html>
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Bigbusiness by TEMPLATED</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
 <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>
<body>
<div id="wrapper">
	<div class="head">
	<img width="1250px" height="100" src="images/banner3.png" alt="&quot;Enter your caption here&quot;" />
	</div>
	<div id="menu">
		<ul>
			<li><a href='index.php'>Home</a></li>
			<li><a href="index.php?about=">About-Us</a></li>
			
			<li><a href="index.php?dis=">News</a></li>
			<li><a href="index.php?fe=">Contact-Us</a></li>
				<li><a href="help.docx">Help</a></li>
		
			
			<li ><a href="index.php?log=">Log In</a></li>
		
		</ul>
		<br class="clearfix" />
	</div>
	<div id="splash">
	<?php
							$query=mysql_query("select * from upload ") or die( mysql_error());
							while($row=mysql_fetch_array($query)){
								$image1=$row['image1'];
								$image2=$row['image2'];
								$image3=$row['image3'];
								$image4=$row['image4'];
								
								
							}
							?>
                            <h3>
		 <ul class="slideshow">
        <li class="show"><img width="1200" height="250" src="profile/<?php echo $image1; ?>" alt="&quot;online student registration&quot;" /></li>
        <li><img width="1200" height="250" src="profile/<?php echo $image2; ?>" alt="&quot;online student registration&quot;" /></li>
		<li><img width="1200" height="250" src="profile/<?php echo $image3; ?>" alt="&quot;online student registration&quot;" /></li>
		<li><img width="1200" height="250" src="profile/<?php echo $image4; ?>" alt="&quot;online student registration&quot;"/></li>
      </ul>  
	</div>
	<div id="page">
		<div id="content">
		<?php
									
									$id=$_GET['ID'];
									?>
<?php
	$statu="post";
									$dese = mysql_query("SELECT * FROM post_noticee WHERE statu='$statu' "); 
										  $X=0;
										  while($de = mysql_fetch_array($dese)){
											$statu=$de['statu'];
											if($statu=="post"){
											$X++;
											}
											else{
											$X=0;
											}}?>
							<?php 
							echo"";
		                  echo"<font face='times new roman' size='5px' color='blue'>";
			           echo'There are &nbsp;'.$X.'&nbsp; new News.';
			          echo"</font>";
			              echo"</script>";
			                 echo"";?>
	<br>
	
		<?php
		
	$result=mysql_query("SELECT * FROM post_noticee WHERE post_id='$id' order by post_id DESC ") or die( mysql_error());

		// $array = array();					
	while($row = mysql_fetch_array($result)){
		// $array[] = $row;
		$string=$row["post_content"];

		?>

 	<?php
			 $username =$row["username"];
		if($username == 'admin' || $username == 'department')
		{									
		 
	 
?>

		<div class="postTitle">
			<div class="innerTitle"> 
			<img style="width:50px; height:50px;" alt='Unable to View' src="images/users.png">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
					
					echo $row["post_title"];
					
				?>
				
			<hr>
			</div>
			<div class="postBasicInfo">
				<?php
					echo "<i><b>Post by</b> <b>".$row["username"]."</b> <b>on</b> <b> ".$row["date"]."</b> </i>";
					
				?>
				<hr>
				
			</div>
		</div>
		<div class="postPost">
			 <?php echo $string;?>
		</div>
		<br>
		
		
		
<?php
	}
	}
?>

<?php

$sqls=mysql_query("select * from post_noticee where status ='posted'");
								while($no=mysql_fetch_array($sqls)){
									$deadline=$no['deadline'];
								$mysql=mysql_query("DELETE FROM post_noticee WHERE deadline < NOW()");	
								}
?>




	</div>
		<div id="sidebar">
			<div class="box">
				<div style="margin-left:40px">	
				<br><br>
			<h5>Dead Line Date for Regstration</h5>
			<?php 
			echo'<p> ';
			echo 'Start Date --  '. $deadline_reg.'<br>';
					echo 'End Date --  '. $enddate.'<br>';
			
			
			echo'</p>';
			?>
			</div> 
			</div>
			</br>
			<div class="box">
				<div class="date-list">
							
        <h4>Time:</h4>
							<script src="css/time.js" language="javascript" type="text/javascript"></script>
							<body  onLoad="yourClock()", onUnload="stopClock(); return true"> 
					       <form name="the_clock">
						   <table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr align="left"><td> System Time:&nbsp;&nbsp;<input type="textt" name="the_time" size="15" style="padding-bottom:5px;" align = "top"></a></td></tr>
							<tr align="left"><td><br/></td></tr></body>
	                    </table>
	                 </form>  
     
	 <h4>Calender</h4>
	  <script src="css/calander.js" language="jav<ascript" type="text/javascript"></script> 
				</div>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/fb.png" />
				<img  src="images/tw.png" />
				<img  src="images/g.png" />
				<img  src="images/y.png" />
			</div>
		</div>
		<br class="clearfix" />
	</div>
	
</div>
<div id="footer">
	Copyright &copy; <?php echo date("Y"); ?> All rights reserved. Design by Is 4th year student</a>.
</div>
</body>
</html>