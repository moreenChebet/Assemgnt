<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
     <title>The login page</title>
     <link rel="stylesheet" type="text/css" href="style.css"/>
     
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>
  
    
    <form action="login.php" method="POST">
    <!-- display validation errors here -->
   <?php include 'errors.php';?>
        <div class="input-group">
            <label>Username: </label>
            <input type="text" id="user" name="username"/>
        </div>
       
        <div class="input-group">
            <label>Password: </label>
            <input type="password" id="pass" name="password"/>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
             Not yet a member?<a href="Register.php">Sign in</a>
        </p>
    </form>


</body>
</html>