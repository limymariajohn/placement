<!DOCTYPE html>
<html>
  <head><Student Register>
  <title>Register here!!</title>
  <body>
  <div>
  <ul>
							  
							  <li><a href="userhome.html">Logout</font></a></li>							  
						</ul>
					</div>
<style>
body{
	background-image:url("images/images (9).jpg");
	background-size:1500px,1500px;
}
</style>
<form method="post" action="">
<table border="1" width="70%" cellpadding="4" cellspacing="5" align="center">

				<tr><td colspan="4" align="center"><font color="blue" style="bold" size="20">REGISTER!!</font></td></tr>
				
				<tr><td colspan="2" align="center" style="color:red;"><b>Fill Details</b></td></tr>
				<tr>
				<td><font color="red"> <b>Name</b></td><td><input type="text" name="txtname"></td>
				</tr>
				
				<tr>
				<td><font color="red"><b>Course</b></td><td><input type="text" name="course"</td>
				
				</tr>
				
				<tr>
				  <td><font color="red"><b>10thMark in%<b></td><td><input type="text" name="txttenmark"></td>
				</tr>
				<tr>
				<td><font color="red"><b>12thMark in %<b></td><td><input type="text" name="txttwelvemark"></td>
				
				<tr>
				<td><font color="red"><b>Degree Mark<b></td><td><input type="text" name="degree"></td>
		        </tr>
				<tr>
				<td><font color="red"><b><b>Email</td><td><input type="text" name="email"></td>
		
				</tr>
				
				<tr>
				<td><font color="red"><b><b>Mob</td><td><input type="text" name="mob"></td>
		
				</tr>
				<tr>
                <td><input type="submit" name="submit" align="center">
				</td>
<tr>
				
			</table>
			</div>
		</form>
		
		
	<?php
if (isset ($_POST["submit"]))
{
include("connection.php");
$name=$_POST["txtname"];
$course=$_POST["course"];
$classten=$_POST["txttenmark"];
$classtwelve=$_POST["txttwelvemark"];
$degree=$_POST["degree"];
$email=$_POST["email"];
$mob=$_POST["mob"];
$x=$_GET['x'];
//INSERT INTO `userapply`(`name`, `course`, `classtenth`, `twelve`, `degree`, `email`, `mob`)
$s= "insert into userapply (name, course,  classtenth, twelve, degree,email,mob,cid)values('$name','$course',$classten,$classtwelve,$degree,'$email','$mob',$x);";
  
 mysqli_query($con,$s);
echo "Your application submitted sucessfully";
echo $s;
}

?>
</body>
</html>