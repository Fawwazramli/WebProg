<html>
    <head>
    <title>Successfully Updated</title>
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
<head>
<body>
<?php

$con=mysqli_connect("localhost", "root","","WebProgAss") or die("Cannot connect to server.".mysqli_error($con));

$Username =@$_POST["Username"];
$f_name=@$_POST["f_name"];
$l_name=@$_POST["l_name"];  
$pwd=@$_POST["pwd"];

// $idCustomer=$_POST["idCustomer"];
// $name=$_POST["name"];
// $password=$_POST["password"];
// $address=$_POST["address"];

$update_sql="UPDATE participant SET f_name ='$f_name', l_name = '$l_name', pwd = '$pwd' WHERE Username = '$Username'";

$sql_result=mysqli_query($con,$update_sql);

if($sql_result){
echo '<div class="ui container" >'; 	
    echo'<h2 class="ui center aligned header">';
        echo "Succesfully update the data.";
    echo'</h2>';
echo'<div>';

}
else{
echo '<div class="ui container" >'; 	
    echo'<h2 class="ui center aligned header">';
        echo "Error in updating the data";
      echo'</h2>';
echo'<div>';
}

?>
</body>
</html>