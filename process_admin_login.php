<html>
<head>
</head>
<body>

<?php
    $con=mysqli_connect("localhost", "root", "","WebProgAss") or die("Cannot connect to server");
    $username=@$_POST["u_admin"];
    $pass=@$_POST["pwd_admin"];

    $sql="Select * from admin where username='$username'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 0)
        echo "Username does not exist";
    else
    {
        $row = mysqli_fetch_array($result,MYSQLI_BOTH);
        if($row["pass"] == $pass)
        {
            session_start();
            $_SESSION["username"]= $username;
            //go to admin.php page
            header("Location: admin.php");
        }
        else
        echo "Password wrong";
    }
?>


</body>
</html>