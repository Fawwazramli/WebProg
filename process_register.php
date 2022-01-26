<html>
<head>
<title>Successfully Registered</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<style>
            body {
                background-image: url('webAss.jpg');
            }
            .ui.container{
                margin-top:100px;
                background-color:white;
                border-radius: 20px;
                padding-top:10px;
                padding-bottom:25px;
            }
            .ui.center.aligned.header{
                padding: 100px;
            }
        </style>
</head>
<body>
<?php

$con=mysqli_connect("localhost", "root", "","WebProgAss")  or die("Cannot connect to server.".mysqli_error($con));

$Username=@$_POST["uName"];
$f_name=@$_POST["fName"];
$l_name=@$_POST["lName"];  
$pwd=@$_POST["password"];
$category=@$_POST["category"];

$query = "select * from participant where Username='$Username' ";
$result = mysqli_query($con , $query);

//this is to check the quota;
// $query_quota = "select count(category) from participant";
// $result_quota=mysqli_query($con,$query_quota);

// $ww = mysqli_fetch_array($result_quota,MYSQLI_NUM);
// $Category=$ww[0];




if (mysqli_num_rows($result)>0)
{
    echo '<div class="ui container" >'; 
		
    echo'<h2 class="ui center aligned header">';
		die("Username is taken. Please Choose another Username");
		echo'</h2>';
    	echo'<div>';
 
}
else
{
    
    $insert_sql="INSERT INTO participant VALUES('$Username', '$f_name', '$l_name', '$pwd','$category')";

	$sql_result =mysqli_query($con,$insert_sql) or die("Error in inserting data due to".mysql_error());

	echo '<div class="ui container" >'; 
		
    echo'<h2 class="ui center aligned header">';
		if($sql_result){
             echo "Succesfully registered. Please login back";
        }
 		else{
             echo "Error in registration.Please try again";
        }
		echo'</h2>';
    	echo'<div>';
    
	
}
  
?>


</body>
</html>