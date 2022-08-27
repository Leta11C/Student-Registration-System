				 <?php   
								 session_start();
								 include ('config.php');
								if (isset($_POST['submit'])){	
					
								
				$semi = $_SESSION['semister'];
				$yr = $_SESSION['year'];
				$dp = $_SESSION['dpt'];
				
	                          
            $query=mysql_query("select * from subject where term ='$semi' and year = '$yr' and course ='$dp' ")or die(mysql_error());
		$counter=0;
			                            
									while($row=mysql_fetch_array($query)){
									$counter++;	
								$yearr =$row['year'];
						        $term =$row['term'];
								$code=$row['code'];
								$title=$row['title'];
								$title="title_".$counter;
								$tit = $_POST[$title];
								$uid = $_POST['uid'];
								$sem = $_POST['semester'];
								$ye = $_POST['year'];
							    $dep = $_POST['department'];
								$unit=$row['unit'];
								$pre_requisites=$row['pre_requisites'];
								$course=$row['course'];
								$inst=$row['instructor'];
								$chid = 0;
								$folg = 0;
			 $ab=mysql_query("select * from subject where title='$tit'")or die(mysql_error());		
			  $usery=mysql_fetch_array($ab);
			  $mano=$usery['pre_requisites'];
			 $kb=mysql_query("select * from subject where title='$mano'")or die(mysql_error());
			  $useryy=mysql_fetch_array($kb);
			  $coda=$useryy['code'];
			  $A=0;
			    $user_query=mysql_query("select * from course")or die(mysql_error());
									while($rows=mysql_fetch_array($user_query)){
									
                 if(($uid == $rows['user_id']) && ($code == $rows['code']) && ($sem == $rows['term']) && ($ye == $rows['year']) && ($dep == $rows['course'] )){
				   
				   $chid = 1;
				   break;
							
						}
				
		     }	
			 if($chid == 1){
				  echo '<div class="alert alert-dismissable alert-danger">';
				echo"<script>alert('The course is already registered before')</script>";
				echo "<script>windows: location='student.php?regis='</script>";			
							echo '</div>';
			 }
			  else{
			 $user_query=mysql_query("select * from grade where uid = '$uid'")or die(mysql_error());
									while($rr=mysql_fetch_array($user_query)){
									$iduser=$rr['uid'];
									$sid=$rr['subject_id'];
									$cod=$rr['code'];
									$yer=$rr['school_year'];	
									$semist=$rr['semester'];
									$titi=$rr['title'];
									$gre=$rr['Grade'];
							if( $gre=="F" || $gre=="Fx" || $gre==" "){
								 if($coda==$cod ){
					echo '<div class="alert alert-dismissable alert-danger">';
				echo"<script>alert('$tit canot be taken because of Prerequest')</script>";		
							echo '</div>';
					 $A++;
				                      }
									  else{
										  $A=0;
									  }
							}
else if($gre!="F" || $gre!="Fx"){
	$A=0;
}}	if($A==0){
	mysql_query("insert into course (user_id,year,term,code,title,unit,pre_requisites,course,instname) 
	values('$uid','$yearr','$term','$code','$tit','$unit','$pre_requisites','$course','$inst')")or die(mysql_error());
	echo '<div class="alert alert-dismissable alert-danger">';
				echo"<script>alert('$tit Succesfully Inserted')</script>";
				echo "<script>windows: location='student.php?regis='</script>";			
							echo '</div>';
}	
			 
			}
			  
             
				 
								}}
						
			?>		