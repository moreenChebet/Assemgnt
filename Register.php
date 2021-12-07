<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
   <title>Login page</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
 <div id="form">
   <form action="process.php" method="POST">
    <p>
       <label>Username: </label>
       <input type="text" id="user" name="user"/>
    </p>
    <p>
       <label>Password: </label>
       <input type="password" id="pass" name="pass"/>
    </p>
    <p>
       <input type="submit" id="btn" value="login"/>
    </p>
   </form>
 </div>
 
</body>
</html>