<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
   <div>
  <ul>
							  
							  <li><a href="userhome.html">Logout</font></a></li>							  
						</ul>
					</div>
  <style>
body{
	background-image:url("images/abstract-purple-background-wallpaper-10354339.jpg");
	background-size:1500px,1500px;
}
</style>

 <form role="form" action="" method="POST" enctype="multipart/form-data">
				
							  <?php
                           include("connection.php");
						$sid=$_SESSION["sid"];
							$sel="SELECT * from userapply where sid=$sid;";
                            
                              
							$res=mysqli_query($con,$sel);
							
						    echo "<table id=example2 border='' cellspacing=3>
						    
							<tr><th>SID</th><th>cid</th><th>Name</th><th>Course</th><th>class10th%</th><th>class12th%</th><th>Degree%
							</th>
							<th>Email</th><th>mobileno</th><th>status</th>";
							
                            
							if(mysqli_num_rows($res)>0){
							while($row=$res->fetch_assoc()){
								
									//$sid=$_POST["sid"];
							
									echo "<tr><td>".$row["sid"]."</td><td>".$row["cid"]."</td><td>".$row["name"]."</td><td>" .$row["course"]. "</td><td>" .$row["classtenth"]. "</td><td>" .$row["twelve"]. "</td><td>" .$row["degree"]. "</td><td>".$row["email"]."</td><td>".$row["mob"]."</td><td>".$row["status"]."</td>;
									
									
									</form>
									</tr>";
								
							} 
						
							}
echo"</table>"							

                             ?>

						  
						
			 
			 							
