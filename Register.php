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

<div class="form-div">
    <form action="server.php" method="POST">
    <!-- display validation errors here -->
      <div class="input-group">
         <label>Username: </label>
         <input type="text" id="user" name="username" value=""/>
      </div>
      <div class="input-group">
         <label>Email: </label>
         <input type="text" id="email" name="email" value=""/>
      </div>
      <div class="input-group">
         <label>Password: </label>
         <input type="password" id="pass" name="password_1"/>
      </div>
      <div class="input-group">
        <label>Confirm password: </label>
        <input type="password" id="pass" name="password_2"/>
      </div>
      <div class="input-group">
         <input type="submit" id="btn" value="register" name="reg_user"/>
      </div>
      <p>
         Already a member?<a href="login.php">login</a>
      </p>
    </form>
 </div>
 
</body>
</html>