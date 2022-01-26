<html>
<body>
<?php
 echo "<table border='1'><tr>
 <td>Username</td>
 <td>FirstName</td>
 <td>LastName</td>
 <td>Password</td>
 <td>Category</td>
 </tr>";
$con=mysqli_connect("localhost", "root", "","WebProgAss") or die("Cannot connect to server.".mysqli_error($con));
$sql='SELECT * FROM participant';
$result=mysqli_query($con,$sql) or die("Cannot execute sql.");
 while($ww=mysqli_fetch_array($result,MYSQLI_NUM))
 {
 $Username=$ww[0];
 $FirstName=$ww[1];
 $LastName=$ww[2];
 $Password=$ww[3];
 $Category=$ww[4];

 echo "<tr>
 <td>$Username</td>
 <td>$FirstName</td>
 <td>$LastName</td>
 <td>$Password</td>
 <td>$Category</td>
 </tr>";
 }
 echo "</table>";
?>
</body>
</html>