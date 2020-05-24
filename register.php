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
    <?php include 'links.php'?>
</head>
<body>
    <header>
        <div class="text">
            <h4>REGISTER<h4>
        </div>
    </header>
    <main>
        <form name = "myform" action="processreg.php" method="post" onsubmit="return validateForm()">
            <div class="getemail">
                <div class="inputemail">
                    <input type="email" name="mail" class="form-control" autocomplete="off">    
                </div>
                <div class="text">
                    Email
                </div>
            </div>
            <div class="getpass">
                <div class="inputpass">
                    <input type="password" name="pass" class="form-control" autocomplete="off">    
                </div>
                <div class="text">
                    Password
                </div>
            </div>
            <div class="getpass1">
                <div class="inputpass">
                    <input type="password" name="pass1" class="form-control" autocomplete="off">    
                </div>
                <div class="text">
                    Confirm Password
                </div>
            </div>
            <div class="submitbutton">
                <input type="submit" value="SUBMIT" class="btn btn-success">
            </div>
        </form>
        <br>
        <div class="reg">
            Already a user ? <a href="index.php">Login</a>
        </div>
    </main>
    <script>
        function validateForm() {
            var x = document.forms["myform"]["mail"].value;
            var y = document.forms["myform"]["pass"].value;
            var z = document.forms["myform"]["pass1"].value;
            if (x == "" || y == "" || z == "") {
                alert("Form not filled");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>