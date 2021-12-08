<?php
session_start();
if ( isset($_SESSION['Validation']))
{
    echo ("<h3>Hi ".($_SESSION['username'])."</h3>");
}else{
    header("Location: index.php");
}
if (isset($_POST['submit'])){
    session_destroy();
    session_start();
    $_SESSION['logout']="true";
    header("Location: index.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Account</title>
</head>
<body>
    <div class="main">
        <form action="" method="post">
            <input type="submit" name ="submit" value="خروج از سایت">

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
