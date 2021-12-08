<?php
session_start();
$user = 'aref';
$pass = 'aref';
if ( isset($_SESSION['logout']))
{
    echo "<h3><strong>شما از اکانت خارج شدید</strong></h3>";
    unset($_SESSION['logout']);
}
if(isset($_SESSION['Validation'])){
    header("Location: account.php");
}
if(isset($_POST['submit']))
{
    
    
    if ( $_POST['username'] == $user && $_POST['password'] == $pass)
    {
        $_SESSION['username']= $user;
        $_SESSION['password']= $_POST['password'];
        $_SESSION['Validation']= "true";
        header("Location: account.php");
    }else{
        echo "user name or password not correct";
        unset($_SESSION['Validation']);
    }
        

}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Login</title>
</head>
<body>
<h3>user pass is : aref</h3>
    <div class="main">
        
        <form action="" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" class="submit" name="submit" value="Login" >

        </form>
    </div>
</body>
</html>
<?php 
/* ---------------------------------------------------------------------------------
- login page      -
-  PHP      : 7.0                                                  -
-  This code was created on : 2021/12/08 at 18:28                                  -
-  Author                 : Aref Solaimany                    -
---------------------------------------------------------------------------------- */
