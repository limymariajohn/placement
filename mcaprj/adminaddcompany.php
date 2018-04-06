<?php
session_start();
?>
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
							   <li><a href="companyview.php">viewcompany</a></li>
                              <li><a href="adminhome.html">Logout</a></li>							  
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
<img src="images/recruiters2017.jpg" width="1000" height="200">

<form method="post" action="">
<table border="2" width="70%" cellpadding="8" cellspacing="10" align="center">

				<tr><td colspan="30" align="center"><font color="red" style="bold" size="10">ADDCOMPANY</font></td></tr>
				
				<tr><td colspan="2" align="center">Company Details</td></tr>
				
				<tr>
				<td><font color="red"><b>Company Name</b></td><td><input type="text" name="txtcname" required></td>
				
				</tr>
				
				
				<tr>
				<td><font color="red"><b>Industry</b></td><td><input type="text" name="txtindus" required></td>
				</tr>
				
				<tr><td><font color="red"><b>Website</b></td>
				<td><input type="text" name="txtwebsite" required></td>
				</tr>
				<tr>
				<td><font color="red"><b>Current recruitent</b></td>
				<td><select name="txtre" required>
					<option>salesofficer</option>       
    					<option>Trainee</option>       
				        <option>Softwaredeveloper</option>       
				        <option>Anylyst</option>       
   				        
    				
				   </select></td>
				</tr>
				<tr>
				<td><font color="red"><b>Date of recruitment</b></td><td><input type="date" name="date" required></td></td>
				</tr>
				<tr>
				<td><font color="red"><b>Place of recruitment</b></td><td><input type="text" name="place" required></td>
				
				
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

$cname=$_POST["txtcname"];
$industry=$_POST["txtindus"];
$website=$_POST["txtwebsite"];
$currentre=$_POST["txtre"];
$dateofre=$_POST["date"];
$place=$_POST["place"];
$s= "INSERT INTO `companydetails`( `companyname`, `industry`, `website`, `currentrecruitment`, `dateofre`, `place`) VALUES ('$cname','$industry', '$website','$currentre','$dateofre','$place');";
 mysqli_query($con,$s);
echo "success";
echo $s;

$p="insert into job (companyname,dateofre,place) values ('$cname','$dateofre','$place');";
mysqli_query($con,$p);
echo $p;
}
?>
</body>
</html>
