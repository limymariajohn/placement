<html>
<head>
</head>
<body>

<form name="abc" action="viewregisterdstudent1.php" method="post">
<style>
body{
	background-image:url("images/images (7).jpg");
	background-size:1500px,1500px;
}
</style
<label>select companyid</label>
<select name="cid" id="c1">
<?php
include("connection.php");
$sel="select  cid from userapply";
						$det=mysqli_query($con,$sel);
						if($det->num_rows >0){
						$areaOptions = "";
							while($row=$det->fetch_assoc()){			
							
							$areaOptions .= '<option value="' . $row['cid'] . '">' . $row['cid'] . '</option>';
							
							}
							echo $areaOptions;
							}	
					?>	
						   </select>
												
      
    
    




<input type="Submit" value="continue"/>



                      
				
					
						

</form>
         
        
    
    
    
													



</body>
</html>