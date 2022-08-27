	<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>SGPA:</td> 
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
											  echo round($equal , 2);
									?>
						
                            <?php } }?>
								   
								   </td> 
								 
								</tr>