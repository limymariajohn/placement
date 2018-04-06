<?php
include "connection.php";
	$id=$_GET['sidd'];
	
	//echo $id;
	$s="UPDATE `userapply` SET `status`='REJECTED' WHERE sid=$id;";
	//$ss="delete from userleave where loginid='$id';";
	mysqli_query($con,$s);
	//mysqli_query($con,$ss);
	//header("location:adminleave.php");
	
	 echo "<script>var confirm = confirm(\" Rejected\");
          if(confirm){ 
              window.location='approve.php';
           }
		   else{
			   window.location='approve.php';
		   }
          </script>"; 
?>
