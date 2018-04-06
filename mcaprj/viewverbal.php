
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

<form id="form1" name="form1" method="post" action="quizsubmit.php">
<?php
	include("connection.php");
	$qs="select * from usertest";
	$qst=mysqli_query($con,$qs);
	
	while($r=mysqli_fetch_assoc($qst))
	{
?>
<div style="margin-left:10px">
  <table width="30%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="3">Quiz ID : <?php echo $r['uid']; ?></td>
    </tr>
    <tr>
      <td colspan="3"></td>
    </tr>
    
      <tr>
        <td colspan="3" align="center">Question : <?php echo $r['ques']; ?></td>
      </tr>
      <tr>
        <td>A </td>
        <td > 
            <div align="center">
              <input name="opt[<?php echo $r['uid']; ?>]" type="radio" value="a" />
                </div></td>
        <td><?php echo $r['optiona']; ?></td>
      </tr>
      <tr>
        <td>B</td>
        <td><div align="center">
            <input name="opt[<?php echo $r['uid']; ?>]" type="radio" value="b" />
                </div></td>
        <td><?php echo $r['optionb']; ?></td>
      </tr>
      <tr>
        <td>C</td>
        <td><div align="center">
            <input name="opt[<?php echo $r['uid']; ?>]" type="radio" value="c" />
                </div></td>
        <td><?php echo $r['optionc']; ?></td>
      </tr>
      <tr>
        <td>D</td>
        <td><div align="center">
            <input name="opt[<?php echo $r['uid']; ?>]" type="radio" value="d" />
                </div></td>
        <td><?php echo $r['optiond']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
	</tr>
	<?php }
	  
	  ?>

  </table>
  </div>
  <input type="submit" value="submit" name="submit" >
 </form>
</body>
</html>