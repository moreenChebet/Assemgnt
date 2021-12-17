<?
    session_start();

    $username="";
    $email="";
    $errors=array();

   //connect to the database
   $db=mysqli_connect('localhost','root','','registration');

   //if the register button is clicked
   if (isset($_POST['register'])) {
      $username=mysql_real_escape_string($_POST['username']);
      $email=mysql_real_escape_string($POST['email']);
      $password_1=mysql_real_escape_string($_POST['password_1']);
      $password_2=mysql_real_escape_string($_POST['password_2']);

     //ensure that form fields are filled properly 
    if (empty($username)){
        array_push($errors, "Username is required"); //add error to errors
    }
    if (empty($email)){
        array_push($errors, "Email is required"); //add error to errors
    }
    if (empty($password_1)){
        array_push($errors, "Password is required"); //add error to errors
    }
    if($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
    }

    //if there are no errrors, save user to database
    if (count($errors)==0) {
        $password = md5($password_1);//encrypt password before storing in the database(security)
        $sql="INSERT INTO users (username, email, password)
                VALUES('$username','$email','$password')";
        
        mysqli_query($db, $sql);
       
    }
   }

    //log user from login page
    if(isset($_POST['login'])){
      $username=mysql_real_escape_string($_POST['username']);
      $password=mysql_real_escape_string($_POST['password']);
      
      if (empty($username)){
          array_push($errors, "Username is required"); 
      }
      if (empty($password)){
          array_push($errors, "Password is required"); 
      }
      if (count($errors)==0){
          $password=md5($password); //encrypt password before comparison with the one in the database
          $query="SELECT* FROM users WHERE username='$username' AND password='$password'";
          $result=mysqli_query($db, $query);
          if (mysqli_num_rows($result)==1){
              //log user in
               $_session['username']=$username;
               $_session['success']="You are now logged in";
               header('location:index.php'); //redirect to home page
          }else{
              array_push($errors, "Wrong username/password combination");
              header('location:index.php');
          }
      }
    }

   //logout
    if (isset($_GET['logout'])){
        session.destroy();
        unset($_session['username']);
        header('location: index.php');
    }

?>