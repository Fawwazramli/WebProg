<html>
<body>
<?php
 echo "<table border='1'><tr>
 <td>Username</td>
 <td>FirstName</td>
 <td>LastName</td>
 <td>Category</td>
 <td>Password</td>
 </tr>";
$con=mysqli_connect("localhost", "root", "","WebProgAss") or die("Cannot connect to
server.".mysqli_error($con));
 $Username=@$_POST["Username"];
 $FirstName=@$_POST["FirstName"];
 $LastName=@$_POST["LastName"];
 $Category=@$_POST["Category"];
 $Password=@$_POST["Password"];

 $sql="SELECT * FROM participants WHERE Username LIKE '%$Username%'
 AND FirstName LIKE '%$FirstName%' AND LastName LIKE '%$LastName%' 
 AND Category LIKE '%$Category%' AND Password LIKE '%$Password%'";

 $result=mysqli_query($con,$sql) or die("Cannot execute sql.");
 while($row=mysqli_fetch_array($result,MYSQLI_NUM))
 {
 $Username=$row[0];
 $FirstName=$row[1];
 $LastName=$row[2];
 $Category=$row[3];
 $Password=$row[4];

 echo "<tr>
 <td>$Username</td>
 <td>$FirstName</td>
 <td>$LastName</td>
 <td>$Category</td>
 <td>$Password</td>
 </tr>";
 }
 echo "</table>";
?>
</body>
</html> 