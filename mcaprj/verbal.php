<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Placement cell</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="site-logo">
						<a href="index.html" class="brand">SJC placement&Training cell</a>
					</div>
				</div>					  

				<div class="col-md-10">	 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
							   <li><a href="index.html">Home</a></li>
							   
							  <li><a href="aboutus.html">About us</a></li> 
							  <li><a href="contactus.html">Contact us</a></li>
                              <li><a href="index.html">Logout</a></li>							  
						</ul>
					</div>
					<!-- /.Navbar-collapse -->		 
				</div>
			</div>
		</div>		
	</nav>
   
    <!<div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>

					<!--<div class="carousel-inner">
						<div class="item active">
							<img src="images/6.jpg" class="img-responsive" alt=""> 
						</div>
					   <div class="item">
							<img src="images/7.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/5.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			<!--</div><!--/#about-slider-->
		</div>
	</div>
	</div>
	</div>
	<div class="main-container">
<br><br><br><br><br><br><br><br>
<style>
body{
	background-image:url("images/sat-subject-test2.jpg.");
	background-size:1500px,1500px;
}
</style>

<form method="post" action="">
<table border="2" width="70%" cellpadding="8" cellspacing="10" align="center">

				<tr><td colspan="30" align="center"><font color="blue" style="bold" size="10">Try out test!!</font></td></tr>
				
				<tr><td colspan="2" align="center"><font color="red">VERBAL REASONING</font></td></tr>
				<tr>
				<td><font color="red">Question</td><td><textarea name="question" rows="5" cols="40"></textarea></td>
</td>
				</tr>
				<tr>
				<td><font color="black"><b>Option A</b></td><td><input type="text" name="txta"></td>
				</tr>
				<tr>
				<td><font color="black"><b>Option B</b></td><td><input type="text" name="txtb"></td>
				</tr>
				<tr>
				<td><font color="black"><b>Option C</b></td><td><input type="text" name="txtc"></td>
				</tr>
				<tr>
				<td><font color="black"><b>Option D</b></td><td><input type="text" name="txtd"></td>
				</tr>
				
				
				<!--<tr>
				<td><font color="red"><b></b></td><td><input type="radio" name="gender" value="m" checked>Male<input type="radio" name="gender" value="f">Female</td>
				
				</tr>-->
   				        
    				
				  
				<tr>
				<td><font color="black"><b>Answer</b></td><td><input type="text" name="ans"></td></td>
				</tr>
				
				
				<tr>
                <td><input type="submit" name="submit" align="center">
				</td>
<tr>
				
			</table>
			</div>
		</form>
		
	
		
	
<?php
if(isset($_POST["submit"]))
{
	echo "hi";
include("connection.php");
$ques=$_POST["question"];
$optiona=$_POST["txta"];
$optionb=$_POST["txtb"];
$optionc=$_POST["txtc"];
$optiond=$_POST["txtd"];
$ans=$_POST["ans"];
//INSERT INTO `usertest`(`uid`, `ques`, `optiona`, `optionb`, `optionc`, `optiond`, `ans`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
$s= "INSERT INTO `usertest`( `ques`, `optiona`, `optionb`, `optionc`, `optiond`, `ans`) VALUES ('$ques','$optiona', '$optionb','$optionc','$optiond','$ans');";
 mysqli_query($con,$s);
echo "success";
echo $s;
}
?>
</body>
</html>
