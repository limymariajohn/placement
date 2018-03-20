<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  
  <form name="abc" action="viewregisterdstudent1.php" method="post">
  <?php
  $s1=$_post["c1"];
  ?>

								<div>
								<center><label>Select cid</label>
								<select name="c1" id="c1">
<?php

include("connection.php");
$s=mysqli_query($con,"select * from userapply");
echo "<option>$s1</option>";
       
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[8]</option>" ;
		}
			
			?>

						   </select></center>
							
    
</div>
		
<?php
$s=mysqli_query($con,"select * from userapply where cid='$s1'");
while($row=mysql_fetch_array($s))
{
	
$name=$row[1];
$course=$row[2];
$classtenth=$row[3];
$twelve=$row[4];
$degree=$row[5];
$email=$row[6];
$mob=$row[7];
}
?>

<div>
<center>
<input type="Submit" value="continue"/></center>
</div>


                            
				
					
						

</form>
           
        
    
    
   

</body>
</html>