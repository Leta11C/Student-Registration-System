	
	
	
			<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>Status</td> 
								   <td>
								   						<?php
							
                           
							
							
							$test_count=mysql_query("select * from grade where gen_ave <> '' and uid = '$get_id' and school_year = '$school_year' and semester = '$term' ")or die(mysql_error());
							$count_gen = mysql_num_rows($test_count);
							

							$result = mysql_query("SELECT sum(gen_ave) FROM grade  where uid = '$get_id' and school_year = '$school_year' and semester = '$term'") or die(mysql_error());
                            
							
							while ($rows = mysql_fetch_array($result)) {
							
							
							
                                ?>
						
									<?php if ($count_gen  <= 0){ ?>
									
							<?php }else{ ?>
								 <?php $ave = $rows['sum(gen_ave)']; 
											  $equal = $ave / $count_gen;
											  $des = round($equal , 2);
											  
									?>
									
									
										<?php
	                                                                       if($des<=1.5){
																		   echo $des;
																			echo "Faired";
																		}else if($des<= 1.74444499 ){
																			echo "Readmission";
																		}else if($des<= 1.99999){
																			echo "Warning";
																		}else if($des>= 2 && $des<3){
																			echo "Satisfactory";
																		}else if($des>= 3 && $des<3.5){
																			echo"GS";
																		}else if($des>= 3.5 && $des<=3.7){
																			echo "GD";
																		}else if($des>= 3.7){
																			echo "VGD";
																		}
																		?>
						
                            <?php } }?>
								   
								   </td> 
								 
								</tr>
	
	
	
