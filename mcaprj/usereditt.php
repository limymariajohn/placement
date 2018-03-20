<html>
<head>
</head>
<body>
<?php
if(isset($_POST["Submit"]))
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
 $s="update studentdetails set sid='$sid',name ='$name',gender='$gender',dob='$dob',course='$course',address='$address',mob='$mob',email='$email',pass='$pass'";
	  
	  mysqli_query($con,$s);
	   echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Data edited successfully...!</font></marquee>";
			  echo "</div>";
}			  
	  
?>
</body>
</html>