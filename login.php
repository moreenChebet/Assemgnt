<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
     <title>The login page</title>
     <link rel="stylesheet" type="text/css" href="register.php"/>
     <link rel="stylesheet" type="text/css" href="login.php"/>
     <link rel="stylesheet" type="text/css" href="style.css"/>
     <link rel="stylesheet" type="text/css" href="errors.php"/>
     <link rel="stylesheet" type="text/css" href="server.php"/>
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form action="login.php" method="POST">
        <div class="input-group">
            <label>Username: </label>
            <input type="text" id="user" name="user"/>
        </div>
       
        <div class="input-group">
            <label>Password: </label>
            <input type="password" id="pass" name="pass_1"/>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name"login">Login</button>
        </div>
        <p>
             Not yet a member?<a href="Register.php">Sign in</a>
        </p>
    </form>


</body>
</html>