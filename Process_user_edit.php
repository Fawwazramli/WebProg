<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
            body {
                background-image: url('user_bp.jpg');
            }
            .ui.container{
                margin-top:100px;
                background-color:white;
                border-radius: 20px;
                padding-top:10px;
                padding-bottom:25px;
            }
            .positive.ui.button{
                padding: 10px 60px;
            }
    </style>
</head>
<body>

<?php
session_start();
$user=$_SESSION["username"];

if(isset ($user))
{

$con=mysqli_connect("localhost", "root","","WebProgAss") or die("Cannot connect to server.".mysqli_error($con));

$Username=$user;

$sql="SELECT * FROM participant WHERE Username='$Username'";

$result=mysqli_query($con,$sql) or die("Cannot execute sql.");

$row=mysqli_fetch_array($result,MYSQLI_NUM);
?>

<div class="ui container">
        <h1 align="center" class="ui dividing header">EDIT PROFILE</h1>
        <form name="updateUserForm" action="Process_update_user.php" method="POST" class="ui form" align="center">
            <div class="field" align="center">
                <div class="six wide field"> <!--for USERNAME-->
                    <div class="required field">
                        <label align="left">Username:</label>
                        <div class="field">
                            <div class="field">
                                <input type="text" name="Username" value ="<?php echo"$row[0]";?>" readonly> </input>
                            </div>
                        </div>
                    </div>
                </div><!--end of div six side fields-->

                <div class="six wide field"><!--for first Name-->
                    <div class="required field">
                        <label align="left">First Name:</label>
                        <div class="field">
                            <div class="field">
                                <input type="text" name="f_name" value ="<?php echo"$row[1]";?>"> </input>
                            </div>
                        </div>
                    </div>
                </div><!--end of div six side fields-->

                <div class="six wide field"><!--for last Name-->
                    <div class="required field">
                        <label align="left">Last Name:</label>
                        <div class="field">
                            <div class="field">
                                <input type="text" name="l_name" value ="<?php echo"$row[2]";?>"> </input>
                            </div>
                        </div>
                    </div>
                </div><!--end of div six side fields-->

                 <div class="six wide field"><!--for last Name-->
                    <div class="required field">
                        <label align="left">Password:</label>
                        <div class="field">
                            <div class="field">
                                <input type="password" name="pwd" value ="<?php echo"$row[3]";?>"> </input>
                            </div>
                        </div>
                    </div>
                </div><!--end of div six side fields-->

                <div class="six wide field"> <!--for USERNAME-->
                    <div class="required field">
                        <label align="left">Category:</label>
                        <div class="field">
                            <div class="field">
                                <p align="left"><?php echo "$row[4]"; ?></p>
                            </div>
                        </div>
                    </div>
                </div><!--end of div six side fields-->

                <div class="ui buttons">
                    <button class="positive ui button" type="submit">Update</button>
                </div>
                <br>


            </div>
        </form>








<?php //put right before close </body> tag
}
else
 echo "No session exist or session is expired. Please log in again";
?>
</body>
</html>