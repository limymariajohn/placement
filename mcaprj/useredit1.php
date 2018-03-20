<?php
session_start();
?>
<html>
<head>
</head>
<body>

<?php
include("connection.php");
$sid=$_SESSION['sid'];

$sql="select * from studentdetails where sid='$sid'";
 /*while($row=mysqli_fetch_array($sql))
	  {
	   
	  $name=$row[2];
	  $gender=$row[3];
	  $dob=$row[4];
	  $course=$row[5];
	  $address=$row[6];
	  $mob=$row[7]
	  $email=$row[8];
	  $pass=$row[9];
	  
	
		  }*/
		  //$name',$gender,'$dob','$course',$address,'$mob','$email',$pass,
$r=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($r);
?>
<form method="post" action="usereditt.php">
<table border="1" width="80%" height="70%"cellpadding="2" bgcolor="pink" cellspacing="2" align="center" style="margin-top:100px;">
				<tr><td colspan="4" align="center"><font color="blue" style="bold" size="20">View profile List</font></td></tr>
				<tr><td colspan="2" align="center"><font size=10 color=white>My profile</font></td>
				<tr>
				<td>sid:</td><td><input type="text" name="sid" value="<?php echo $result['sid']?>"></td>
				<tr>
				<td>Name:</td><td><input type="text" name="txtname" value="<?php echo $result['name']?>"></td>
				<td>Gender:</td><td><input type="text" name="gender" value="<?php echo $result['gender']?>"></td>
				</tr>
				<tr>
				<td>dob:</td><td><input type="text" name="datedob" value="<?php echo $result['dob']?>"></td>
				<td>course:</td><td><input type="text" name="txtcourse" value="<?php echo $result['course'] ?>"></td>
				</tr>
				<tr>
				<td>address:</td><td><input type="text" name="txtaddress" value="<?php echo $result['address']?>"></td>
				<td>mob:</td><td><input type="text" name="txtphn" value="<?php echo $result['mob'] ?>"></td>
				</tr>
				<tr><td>email:</td><td><input type="text" name="email" value="<?php echo $result['email']?>"></td>
				<tr><td>pass:</td><td><input type="text" name="pass" value="<?php echo $result['pass']?>"></td>
				</tr>
				
 <tr><td colspan="4" align="center"><input type="submit" name="Submit" value="Edit"></td></tr>
 </table>
			
		</form>
	
</body>
</html>
