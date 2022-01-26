<html>
<body>
<?php

echo "<table border='1'><tr>
 <td>Username</td>
 <td>First Name</td>
 <td>Last Name</td>
 <td>Category</td>
 </tr>";

$con=mysqli_connect("localhost", "root","","WebProgAss"); 

$Username =@$_POST["Username"];

$sql = "SELECT * FROM participant WHERE Username='$Username'";

$result = mysqli_query($con,$sql) or die("Cannot execute sql.");

while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
 $Username=$row[0];
 $f_name=$row[1];
 $l_name=$row[2];
 $category=$row[4];
 
 echo "<tr>
 <td>$Username</td>
 <td>$f_name</td>
 <td>$l_name</td>
 <td>$category</td>
 </tr>";
}
echo "</table>";

?>
</body>
</html> 

