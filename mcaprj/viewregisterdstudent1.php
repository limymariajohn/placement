<!DOCTYPE html>
<html>
  <head>
  
  <body>
  <style>
body{
	background-image:url("images/220082059-solid-backgrounds-colors.jpg");
	background-size:1500px,1500px;
}
</style>

 <form role="form" action="" method="POST" enctype="multipart/form-data">
				
						  <table id="example2" class="table table-bordered table-hover">
						    
							<tr><th>Name</th><th>Course</th><th>class10th</th><th>class12th</th><th>Degree</th><th>Email</th><th>mobileno</th></tr>
							</head>
							  <?php
                           include("connection.php");
						
							$cid=$_POST["cid"];
                             
							
							$sel="SELECT `name`,`course`,`classtenth`,`twelve`,`degree`,`email`,`mob` FROM userapply WHERE cid = '$cid'";
                            
                              
							$res=mysqli_query($con,$sel);
                            
							if(mysqli_num_rows($res)>0){
							while($row=$res->fetch_assoc()){
								
							
									echo "<tr><td>".$row["name"]."</td><td>" .$row["course"]. "</td><td>" .$row["classtenth"]. "</td><td>" .$row["twelve"]. "</td><td>" .$row["degree"]. "</td><td>".$row["email"]."</td><td>".$row["mob"]."</td></tr>";
								
							} 
							echo "</table>";
							}
							else{
								echo "<tr><td colspan='11' align='center'>Not Available</td></tr>";
							}				

                             ?>

						  
						
			 </form>
     
											


<!--<script src="js/mainScript.js"></script>
<script src="js/rgbSlide.min.js"></script>


<!--team-->
<!--<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--team-->
<!-- //here ends scrolling icon -->
 
				<!--<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>
 <!-- start-smoth-scrolling -->
				<!--<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				
		<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<!--<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>