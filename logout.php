 //logout
    if (isset($_GET['logout'])){
        session.destroy();
        unset($_session['username']);
        header('location: index.php');
    }