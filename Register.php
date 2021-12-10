<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
   <title>Login page</title>
   <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
 
<body>
    <div class="Header">
       <h2>Register</h2>
    </div>
 
    <form action="Register.php" method="POST">
      <div class="input-group">
         <label>Username: </label>
         <input type="text" id="user" name="user"/>
      </div>
      <div class="input-group">
         <label>Email: </label>
         <input type="text" id="email" name="email"/>
      </div>
      <div class="input-group">
         <label>Password: </label>
         <input type="password" id="pass" name="pass_1"/>
      </div>
      <div class="input-group">
        <label>Confirm password: </label>
        <input type="passsword" id="pass" name="pass_2"/>
      </div>
      <div class="input-group">
         <input type="submit" id="btn" value="Register"/>
      </div>
      <p>
         Already a member?<a href="login.php">login</a>
      </p>
    </form>
 
 
</body>
</html>