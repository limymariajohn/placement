<html>
<head>
</head>
<body>
<div>
<form name="abc" action="viewregisterdstudent1.php" method="post">
<style>
body{
	background-image:url("images/12.jpg");
	background-size:1500px,1500px;
}
</style


<label><font color="red">select companyid</font></label>
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
												
      
    
    

</div>
<div>
<br><br><br>
<input type="Submit" value="continue"/>
</div>



                      
				
					
						

</form>
         
        
    
    
    
													



</body>
</html>