<?php 
    session_start();
    // require_once() function can be used to include a PHP file in another one, when you may need to include the called file more than once. If it is found that the file has already been included, calling script is going to ignore further inclusions.
    require_once("CONFIG-DB.php");
    
    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

    if(mysqli_connect_errno($con))
        die("Fail to connect to database :" . mysqli_connect_error());

    $em = $_POST['email'];
    $pw = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$em' AND password='$pw'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $em;
        mysqli_close();
        header("Location: mypage.php");
    }
    else {
        mysqli_close();
        header("Location: index.php?error=Wrong Username/Password");
    }
?>