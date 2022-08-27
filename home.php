<head>

<style>

</style>
</head>
<html>
<body>
<div class="boxx">

<?php
$query=mysql_query("select * from upload ") or die( mysql_error());
							while($row=mysql_fetch_array($query)){
								$image1=$row['news'];
								
								
								
							}
							?>
				<h2>Welcome To CCI  Registration System </h2>
					<img width="850" height="250" src="images/home.png" />
		              <?php
					  echo $image1;
					  
					  ?>
				
			</div>
			
			
			<br class="clearfix" />
			</body>
			</html>