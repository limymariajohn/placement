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
   
    <div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>
		</div>
	</div>
	</div>
	</div>
	<div class="main-container">
<br><br><br><br><br><br><br><br>
<form id="form1" name="form1" method="post" action="">


 <?php
    include("connection.php");
if (!isset($_SESSION["count"]))
	{ 
$_SESSION["count"] = 0;
}

	if(empty($_SESSION["qno"]))
	{
		$smin="select min(uid) muid from usertest ";
		$rmin=mysqli_query($con,$smin);
		if(mysqli_num_rows($rmin)>0)
		{
			$rowmin = mysqli_fetch_assoc($rmin);
			$_SESSION["qno"]=$rowmin["muid"];
		}
	}
	
	
	$qs="select * from usertest where uid=$_SESSION[qno]";
	echo $qs;
	$qst=mysqli_query($con,$qs);
	$r=mysqli_fetch_assoc($qst);
	//$rid=$r['uid'];
?>


<div style="margin-left:60px">
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
              <input name="opt" type="radio" value="a" />
                </div></td>
        <td><?php echo $r['optiona']; ?></td>
      </tr>
      <tr>
        <td>B</td>
        <td><div align="center">
            <input name="opt" type="radio" value="b" />
                </div></td>
        <td><?php echo $r['optionb']; ?></td>
      </tr>
      <tr>
        <td>C</td>
        <td><div align="center">
            <input name="opt" type="radio" value="c" />
                </div></td>
        <td><?php echo $r['optionc']; ?></td>
      </tr>
      <tr>
        <td>D</td>
        <td><div align="center">
            <input name="opt" type="radio" value="d" />
                </div></td>
        <td><?php echo $r['optiond']; ?></td>
      </tr>
	  <tr>
	  <td></td>
	  <td>
		<div align="center">
			<input type="hidden" name="hdnAns" value='<?php echo $r['ans'];?>' >		
		</div></td>
		</td>
		</tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
	</tr>
	

  </table>
  </div>
  <div style="margin-left:60px">
  <input type="submit" value="Next" name="btnNext">
  <input type="submit" value="Back" name="btnBack">
  </form>
  <?php
  
  
  if(isset($_POST["btnNext"]))
	{
		
		$qnochk='30';
		$opp=$_POST["opt"];
		echo $opp;
		$qno=$_SESSION["qno"];
		
		

		
		
		
		$s="select * from usertest where uid='$qno' ";
		
		$rm=mysqli_query($con,$s);
		$ans=mysqli_fetch_assoc($rm);
		$ans1=$ans['ans'];
		echo $ans1;
		if($opp==$ans1)
		{
			$_SESSION["count"]=$_SESSION["count"]+1;
			echo $_SESSION["count"];
		}
		
		$_SESSION["qno"]=$_SESSION["qno"]+1;
		
		if($_SESSION["qno"]>=$qnochk)
		{
			?>
			<script>
			 window.location ="submit.html";
			</script>
			<?php
		}
		
		
	}
	

	if(isset($_POST["btnBack"]))
	{
		
		$_SESSION["qno"]=$_SESSION["qno"]-1;
	}
  
  ?>

</body>
</html>




