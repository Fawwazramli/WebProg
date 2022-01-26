<html>
<head>
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<head>
<style>
    #title {
        margin-top: 100px;
    }

    form {
        text-align: center;
    }
    #field {
    margin-left: 100px;
    margin-right: 100px;
    }

   
</style>
<body>
<?php
//call this function to check if session is exists or not
session_start();
$user=$_SESSION["username"]; //pass value $_SESSION variable to variable $user to display
echo "Welcome $user";
//if session is exists
if(isset ($user))
{
?> 
<div id="title">
        <h1 align="center">ADMIN PAGE</h1>
        <div id=field>
            <fieldset>
                <br>
                <br>
                <div id="login">
                    <form class="dButton" name="registerForm" action="view.php" method="POST">
                        <input type="submit" value="View All">
                    </form>
                    <br>
                    <br>
                    <form class="dButton" name="registerForm" action="lookup.php" method="POST">
                        <input type="submit" value="Search & View">
                    </form>
                    <br>
                    <br>
                    <form class="dButton" name="registerForm" action="delete.php" method="POST">
                        <input type="submit" value="Delete">
                    </form>
                </div>
                <br>
                <br>
                <a href="logout.php">Sign-Out</a>
            </fieldset>
        </div>
        

    </div>





<?php //put right before close </body> tag
}
else
 echo "No session exist or session is expired. Please log in again";
?> 

</body>    
</html>