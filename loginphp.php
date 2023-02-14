<?php
// start the session
  session_start();
    $var_user = $_POST['name'];
    $var_pswuser = $_POST['password'];
    $_SESSION['name']=$var_user;
    $_SESSION['password']=$var_pswuser;
    echo "session variables are set.";
    if(($var_user == "sa" && $var_pswuser== "sa") || ($var_user =="user1" && $var_pswuser =="user1" )|| ($var_user =="user2" && $var_pswuser == "user2"))
    {
       header("location: pagehome.php");
    }
    else{

        header("location:login.html");
    }   
?>
 