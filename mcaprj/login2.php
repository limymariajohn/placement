<?php
session_start();
	include("connection.php");
	$user=$_POST["Name"];
	$pass=$_POST["Password"];
	$sq="select * from login where username='$user'and password='$pass';";
	
	//echo $sq;
	
	$result=mysqli_query($con,$sq);
	if(mysqli_num_rows($result)>0){
    // $num_row=mysqli_num_rows($result);
//if($num_row==1)
//{
	$row=mysqli_fetch_assoc($result);
	$sid=$row["sid"];
	$_SESSION['sid']=$sid;
	
	
	//$_SESSION['username']=$row['username'];
	if($row['usertype']=='0')
	{
		//$_SESSION['user']=$_POST["Username"];
		header('location:adminhome.html');
		exit();
	}
	
	else if($row['usertype']=='1')
	{
		//$_SESSION['user']=$_POST["Username"];
		header('location:userhome.html');
		//echo $sid;
	exit();
	}
}
else{	
		echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.history.back();
			  document.getElementsByName('password').value='';
           }
		   else{
			   window.history.back();
			   document.getElementsByName('password').value='';
		   }
          </script>";
}
	
?>