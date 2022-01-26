<html>
<body>
<?php
$con=mysqli_connect("localhost", "root", "","WebProgAss") or die("Cannot connect to server".mysqli_error($con));
$Username=$_POST["Username"];
$sqli_delete="DELETE FROM participant WHERE Username='$Username'";

$sqli_result=mysqli_query($con,$sqli_delete);//or die("Error in sql due to ".mysqli_error());
if(($sqli_result)==TRUE)
 echo "Succesfully deleted.";
 else
 echo "Error in deleting the data.";
?>
</body>
</html>