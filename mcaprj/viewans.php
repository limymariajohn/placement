<html>
<head>
<title></title>
</head>

<style>
	
body{
	background-image:url("images/4f6d052bb1b26150115888ea06d4c106.jpg");
	background-size:1500px,1500px;
}

</style>
<body>
<?php

include("connection.php");
$s=mysqli_query($con,"select ans from usertest");
echo "<table border ='0' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><th colspan=12><font size=15 color=white >View Answer</font></th></tr>
<tr><th>uid</th><th>Answer</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[4];
  echo "<tr><td>".$row["uid"]."</td><td>".$row["ans"]."</td></tr>";	 
   }
  echo"</table>"

  ?>
  </body>
  </html>