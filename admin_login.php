<html>

<head>
    <title>Admin Login</title>
</head>
<style>
    #title {
        margin-top: 100px;
    }

    form{
        text-align: center;
    }
    #field {
    margin-left: 100px;
    margin-right: 100px;
    }
  

</style>

<body>
    <div id="title">
        <h1 align="center">ADMIN LOGIN</h1>
        <div id=field>
            <fieldset>
                <br>
                <br>
                <div id="login">
                    <form name="adminLogin" action="process_admin_login.php" method="POST">
                        USERNAME:
                        <input type="text" name="u_admin"></input>
                        <br>
                        <br>
                        PASSWORD:
                        <input padding-top="100px" type="password" name="pwd_admin">
                        <br>
                        <br>
                        <input type="submit" value="LOGIN">
                    </form>
                </div>
            </fieldset>
        </div>
        
        
    </div>
    

</body>
<html>