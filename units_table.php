		<tr>
								   <td></td> 
								   <td class="numberu">Total Credit Hour:</td> 
								   <td> 					
								   <?php
                            $result = mysql_query("SELECT sum(unit) FROM grade  where uid = '$get_id' and school_year = '$school_year' and semester = '$term'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
							
									</td> 
									<td></td>
								  </tr>
							