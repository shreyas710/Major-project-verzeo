<?php
   session_start();

   if(isset($_SESSION['errorMessage'])){
       echo "<script type='text/javascript'>
               alert('" . $_SESSION['errorMessage'] . "');
             </script>";
        session_unset();
   }
   if(isset($_SESSION['errorMessage1'])){
        echo "<script type='text/javascript'>
        alert('" . $_SESSION['errorMessage1'] . "');
        </script>";
        session_unset();
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="text">
            <h4>LOGIN<h4>
        </div>
    </header>
    <main>
        <div class="text1">
            <h3><u>ENTER DETAILS</u></h3>
        </div>
        <form action="process.php" method="post">
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
            <div class="submitbutton">
                <input type="submit" value="SUBMIT">
            </div>
        </form>
        <div class="reg">
            New Here ? <a href="register.php">Register</a>
        </div>
    </main>
</body>
</html>
