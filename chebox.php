













<form action="chebox.php" method="post">
 
Which buildings do you want access to?<br />
<input type="checkbox" name="formDoor[]" value="Acorn Building" />Acorn Building<br />
<input type="checkbox" name="formDoor[]" value="Brown Hall" />Brown Hall<br />
<input type="checkbox" name="formDoor[]" value="Carnegie Complex" />Carnegie Complex<br />
<input type="checkbox" name="formDoor[]" value="Drake Commons" />Drake Commons<br />
<input type="checkbox" name="formDoor[]" value="Elliot House" />Elliot House<br />
 
 
 
<input type="submit" name="submit" value="Submit" />
 
</form>
<?php
include ('config.php');
if(isset($_POST['submit'])){
							$checkbox=$_POST['formDoor'];
						
						for($i=0; $i<sizeof($checkbox);$i++)
						{
							mysql_query("insert into ch (chek)
							values('".$checkbox[$i]."') ")or die(mysql_error());
						}
								
							echo"<script>alert('U data is successfully')</script>";
							
}
							
							
							?>
							
							
