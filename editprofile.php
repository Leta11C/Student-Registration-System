<?php
//include("modal_style.php"); 

include("config.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/viewprofile.css" />
	<link href="css/booot.css" rel="stylesheet">

</head>
<body>

<div class="content">
<h2> <div class="profil">
<br>
	<?php 
							$Je = mysql_query("SELECT image FROM account WHERE id='$session_id' ");
						    while($row=mysql_fetch_assoc($Je)){
							 if($row['image'] == ""){
								 echo"<img width='50'height='50' src='profile/0.13.jpg'alt='default profile pic'>";
							 }else{
								  echo"<img    class='img-circle profile_img' width='180'height='130' src='profile/".$row['image']."'alt='profile pic'>";
							 }
							 
						 }
					?>

<?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$result=mysql_fetch_array($query);
							$kaje=$result['username'];
							$dec=base64_decode($kaje);
							?><h4>
						<br><br>
							<span style="color:5454;">user_id :</span><span id="info" style="margin-left: 70px;"><?php echo $result['user_id'];?></span><br />
							<span style="color:5454; ">username :</span><span id="info" style="margin-left: 47px;"><?php echo $dec;?></span><br />
							<span style="color:5454;">email :</span><span id="info" style="margin-left: 85px;"><?php echo $result['email'];?></span><br />
					<span style="color:5454;">account type: </span><span id="uu" style="margin-left: 20px;"><?php echo $result['user_type']; ?></span><br />
			<h4>
</div>
</div>
		
 </body>
 </html>