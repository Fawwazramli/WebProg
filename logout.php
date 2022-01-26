<html>
<head>
    <title>Successfully Logout</title>
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
session_start( );
if (isset($_SESSION["username"])) //userid replace with according to variable $_SESSION[xxx] at login page
{
session_destroy( );
echo '<div class="ui container" >'; 	
    echo'<h2 class="ui center aligned header">';
		echo "You have successfully logged out.";
	echo'</h2>';
echo'<div>';

}
else{
    echo '<div class="ui container" >'; 	
        echo'<h2 class="ui center aligned header">';
            echo " No session exists or session is expired. Please log in again";
        echo'</h2>';
    echo'<div>';
}


?>
</body>
</html>
