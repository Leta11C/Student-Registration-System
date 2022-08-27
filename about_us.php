<head>

<style>

</style>
</head>
<html>
<body>
<div class="boxx">

<?php
$query=mysql_query("select * from about where status='on' ") or die( mysql_error());
							while($row=mysql_fetch_array($query)){
								$kaje=$row['image3'];

							}
							?>
				<h2>Welcome To CCI Online Registration System </h2>
					
						<img width="500" style="margin-left:150px;" height="600"  src="profile/<?php echo $kaje; ?>" />
		              
				
			</div>
			
			
			<br class="clearfix" />
			</body>
			</html>