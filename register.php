<?php
   session_start();

   if(isset($_SESSION['errorMessage'])){
       echo "<script type='text/javascript'>
               alert('" . $_SESSION['errorMessage'] . "');
             </script>";
        session_unset();
   }

   if(isset($_SESSION['errorMessage2'])){
        echo "<script type='text/javascript'>
                alert('" . $_SESSION['errorMessage2'] . "');
            </script>";
        session_unset();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <header>
        <div class="text">
            <h4>REGISTER<h4>
        </div>
    </header>
    <main>
        <div class="text1">
            <h3><u>ENTER DETAILS</u></h3>
        </div>
        <form action="processreg.php" method="post">
            <div class="getemail">
                <div class="inputemail">
                    <input type="email" name="mail">    
                </div>
                <div class="text">
                    Email
                </div>
            </div>
            <div class="getpass">
                <div class="inputpass">
                    <input type="password" name="pass">    
                </div>
                <div class="text">
                    Password
                </div>
            </div>
            <div class="getpass1">
                <div class="inputpass">
                    <input type="password" name="pass1">    
                </div>
                <div class="text">
                    Confirm Password
                </div>
            </div>
            <div class="submitbutton">
                <input type="submit" value="SUBMIT">
            </div>
        </form>
        <div class="reg">
            Already a user ? <a href="index.php">Login</a>
        </div>
    </main>
</body>
</html>