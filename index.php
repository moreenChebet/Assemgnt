<?php include ('server.php') 
    //if user is not logged in they cannot acccess this page
    if(empty($_session['username'])){
        header("location:login.php");
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
     <title>Home page</title>
     <link rel="stylesheet" type="text/css" href="style.css"/>
     
</head>

<body>
    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="Content">
        <?php if(isset($_session['success'])): ?>
                 <div class="error success">
                        <h3>
                            <?php
                                echo $_session['success'];
                                unset($_session['success']);
                            ?>
                        </h3>
                 </div>
        <?php endif ?>

        <?php if(isset($_session["username"]))?>
            <P>Welcome<strong><?php echo $_session["username"]; ?></strong></P>
            <p><a href="index.php?logout='1'" style="color:red; ">Logout</a></p>
        <?php endif ?> 
        
    </div>
    


</body>
</html>