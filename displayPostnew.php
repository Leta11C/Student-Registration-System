<?php include("config.php"); ?>


	  
<?php
	$statu="post";
									$dese = mysql_query("SELECT * FROM post_noticee WHERE statu='$statu'"); 
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
	$result=mysql_query("select *,UNIX_TIMESTAMP() - date AS TimeSpent from post_noticee  order by post_id DESC ") or die( mysql_error());

		 $array = array();					
	while($row = mysql_fetch_array($result)){
		 $array[] = $row;
		$string=$row["post_content"];
		 $news_id=$row['post_id'];
		
		 $string = strip_tags($string);

                                          if (strlen($string) > 250) {
										    $stringCut = substr($string, 0, 250);
                                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                                               }
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
			 <p class="search-desc"> <?php echo $string;?>...<a style="color:red;"href="readnews.php?ID=<?php echo $news_id;?>">Read More</a>  </p>
			
		</div>
		<br>
		
		
		
<?php
	}
?>
<?php
	}
?>
<?php

$sqls=mysql_query("select * from post_noticee where status ='posted'");
								while($no=mysql_fetch_array($sqls)){
									$deadline=$no['deadline'];
								$mysql=mysql_query("DELETE FROM post_noticee WHERE deadline < NOW()");	
								}
?>