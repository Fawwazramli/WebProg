<html>
<head>
    <title>Welcome User</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<head>
    <style>
        body {
            background-image: url('user_bp.jpg');
        }
        
        .ui.container {
            margin-top: 100px;
            background-color: white;
            border-radius: 20px;
            padding-top: 10px;
            padding-bottom: 30px;
        }

        .positive.ui.button {
            padding: 10px 60px;
        }

        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        p.large{
            font-size:15px;
        }
      

    </style>
<body>
<?php
//call this function to check if session is exists or not
session_start();
$user=$_SESSION["username"]; //pass value $_SESSION variable to variable $user to display
//echo "Welcome $user";
//if session is exists
if(isset ($user))
{
?> 
<?php
$con=mysqli_connect("localhost", "root", "","WebProgAss") or die("Cannot connect to server.".mysqli_error($con));
$username=$user;

$sql="SELECT * FROM participant WHERE Username='$username'";
$result=mysqli_query($con,$sql) or die("Cannot execute sql.");

$row=mysqli_fetch_array($result,MYSQLI_BOTH);
$Username = $row[0];


?>
<div class="ui container">
        <h1 align="center" class="ui dividing header"><?php echo "Welcome $user" ?> </h1>
        <img  class="ui tiny image" src="user_pp.jpg" >
        
        <div class="field" align="center">
        <p class="large"><i class="edit icon"><a href="Process_user_edit.php">Edit</a></i></p>
        
            <h2 class="ui header"><?php echo " $row[1] " ;
            echo " $row[2] " ;
             ?></h2>
        <br> 
        <div class="ui label">
            DISTANCE CATEGORY
        </div>  
        <p><?php echo " $row[4] " ?></p>
        <br>
        <div class="ui label">
            NAME ON BIB
        </div>
        <p><?php echo " $row[1] " ?></p>
        <br>
        <div class="ui label">
        BIB NUMBER
        </div>
        <p> E1009</p>
        <br>
        <i class="sign out alternate icon"><a href="logout.php">Sign-Out</a></i>




              
        </div>   
    <div>

<?php //put right before close </body> tag
}
else
 echo "No session exist or session is expired. Please log in again";
?> 

</body>    
</html>