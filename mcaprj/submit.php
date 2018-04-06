<?php
session_start();
$sc=$_SESSION["count"];
?>
<html>
<head>
<title></title>
</head>

<body>
<ul>
<li><a href="userhome.html">logout</a></li>
<div>
<style>
body{
	background-image:url("images/OAI4ZV0.jpg.");
	background-size:1500px,1500px;
	}
	</style>
<form method="post" action="quizview.php">
<table border="1" width="50%" cellpadding="2" cellspacing="2" align="center">

				 <h1 align="left"><font color="blue" style="bold" size="1"></font><b>Submitted successfully</b></h1>
				<tr>
				<td><font color="yellow" size="5"><b>Your score is:&nbsp&nbsp&nbsp&nbsp<?php echo $sc; ?></b></td>
				</tr>
				<tr>
				<td><input align="center" style="color:red;"  type="submit" name="viewans" value="Viewanswer"/></td>
				</tr>
				</table>
				</form>
				</div>

</body>
</html>