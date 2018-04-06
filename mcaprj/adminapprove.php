<?php
include("connection.php");
$id=$_GET['sidd'];
$q="select * from userapply where sid=$id";
//$f=mysqli_query($con,$q);
//$rw=mysqli_fetch_assoc($f);
//$a=$rw['allot'];
//$n=$rw['nod'];
//$t=$a+$n;
//echo $t;
$s="UPDATE `userapply` SET `status`='CONFIRMED' WHERE sid=$id;";


mysqli_query($con,$s);
echo 
"<script>var confirm=confirm(\"Approved\");
if(confirm){
	window.location='approve.php';
           }
		   else{
			   window.location='approve.php';
		   }
          </script>"; 
		  header("location:approve.php");
?>