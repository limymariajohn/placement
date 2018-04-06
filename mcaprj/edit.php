
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
							  
							  <li><a href="studentview.php">listuser</a></li>
							    <li><a href="aboutus.html">About us</a></li> 
							  <li><a href="contactus.html">Contact us</a></li>
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
<style>
body{
	background-image:url("images/cX2jQu.jpg");
	background-size:1500px,1500px;
}
</style>
  <script>

</script>

</head>
<body>
<?php
	            include("connection.php");
                 $id=$_GET['s_id'];
                 $sql = "select *  from studentdetails where sid=$id;";
                 $r= mysqli_query($con, $sql);
				 $result=mysqli_fetch_assoc($r);
				 ?>
<form name="form1" onSubmit="" method="post" action="">
<table border="1" width="70%" cellpadding="4" cellspacing="5" align="center">

				<tr><td colspan="4" align="center"><font color="blue" style="bold" size="20">AddStudent</font></td></tr>
				
				<tr><td colspan="2" align="center" style="color:red;"><b>Student Details</b></td></tr>
				<tr>
				<td><font color="red"> <b>sid:</b></td><td><input type="text" name="sid" value="<?php echo $result['sid']?>"></td>
				</tr>
				<tr>
				
				<td><font color="red"> <b>Name:</b></td><td><input type="text" name="txtname" value="<?php echo $result['name']?>"></td>
				
				</tr>
				
				
				<tr>
				<td><font color="red"><b>Gender:</b></td><td><input type="radio" name="gender" value="m" checked>Male<input type="radio" name="gender" value="f">Female</td>
				
				</tr>
				<tr><td><font color="red"><b>DOB:</b></td>
				<td><input type="date" name="datedob" value="<?php echo $result['dob']?>"></td>
				</tr>
				<tr>
				<td><font color="red"><b>Course:<b></td>
				<td><select name="txtcourse" value="<?php echo $result['course']?>">
					<option>MCA</option>       
    					<option>MBA</option>       
				        <option>B-tech</option>       
				        <option>M-tech</option>       
   				        
    				
				   </select></td>
				</tr>
				<tr>
				<td><font color="red"><b>Address:<b></td><td><input type="textarea" name="txtaddress" value="<?php echo $result['address']?>"></td>
				</tr>
				<tr>
				<td><font color="red"><b>Mobile:<b></td><td><input type="number" name="txtphn" value="<?php echo $result['mob']?>"></td>
				
				<tr>
				<td><font color="red"><b>Email:<b></td><td><input type="email" name="email" value="<?php echo $result['email']?>"></td>
		
				</tr>
				
				<tr>
				<td><font color="red"><b>Pass<b></td><td><input type="text" name="pass" value="<?php echo $result['pass']?>"></td>
		
				</tr>
				
				
				<tr>
                <td><input type="submit" name="Edit" align="center">
				</td>
<tr>
				
			</table>
			</div>
		</form>
		
	
		
	
<?php
if (isset ($_POST["Edit"]))
{
include("connection.php");
$sid=$_POST["sid"];
$name=$_POST["txtname"];
$gender=$_POST["gender"];
$dob=$_POST["datedob"];
$course=$_POST["txtcourse"];
$address=$_POST["txtaddress"];
$mob=$_POST["txtphn"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$s="update studentdetails set sid='$sid',name ='$name',gender='$gender',dob='$dob',course='$course',address='$address',mob='$mob',email='$email',pass='$pass'where sid=$sid";
mysqli_query($con,$s);
// echo $s;
}


?>

</body>
</html>
