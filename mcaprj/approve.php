<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <style>
body{
	background-image:url("images/stock-vector-illustration-vector-of-cute-birds-holding-umbrella-with-raining-heart-in-pink-sky-background-design-759257740.jpg");
	background-size:1500px,1500px;
}
</style>

 <form role="form" action="" method="POST" enctype="multipart/form-data">
				
							  <?php
                           include("connection.php");
						
							$sel="SELECT * from userapply where status='0';";
                            
                              
							$res=mysqli_query($con,$sel);
							
						    echo "<table id=example2 border='' cellspacing=3>
						    
							<tr><th>CID</th><th>Name</th><th>Course</th><th>class10th%</th><th>class12th%</th><th>Degree%
							</th>
							<th>Email</th><th>mobileno</th><th>status</th>";
							
                            
							if(mysqli_num_rows($res)>0){
							while($row=$res->fetch_assoc()){
								
									//$sid=$_POST["sid"];
							
									echo "<tr><td>".$row["sid"]."</td><td>".$row["name"]."</td><td>" .$row["course"]. "</td><td>" .$row["classtenth"]. "</td><td>" .$row["twelve"]. "</td><td>" .$row["degree"]. "</td><td>".$row["email"]."</td><td>".$row["mob"]."</td>;
									<td>
									<a href='adminapprove.php?sidd=".$row["sid"]."'>APPROVE</a></td>
									<td>
									<a href='adminreject.php?sidd=".$row["sid"]."'>REJECT</a></td>
									</form>
									</tr>";
								
							} 
						
							}
echo"</table>"							

                             ?>

						  
						
			 
			 							
