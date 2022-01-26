<html>
<head>
<title>user login process</title>
</head>
<body>

<?php
    $con=mysqli_connect("localhost", "root", "","WebProgAss") or die("Cannot connect to server");
    $Username=@$_POST["uName"];
    $pwd=@$_POST["password"];

    $sql="Select * from participant where Username='$Username'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 0)
        echo "Username does not exist";
    else
    {
        $row=mysqli_fetch_array($result,MYSQLI_BOTH);
        if($row["pwd"] == $pwd)
        {
            session_start();
            $_SESSION["username"]= $Username;
            //go to admin.php page
            header("Location:userPage.php");
        }
        else
        echo "Password wrong";
    }
?>


</body>
</html>