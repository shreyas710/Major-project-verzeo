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
    <?php include 'links.php'?>
</head>
<body>
    <header>
        <div class="text">
            <h4>LOGIN<h4>
        </div>
    </header>
    <main>
        <form name = "myform" action="process.php" method="post" onsubmit="return validateForm()">
            <div class="getemail">
                <div class="inputemail">
                    <input type="email" name="mail" class="form-control" autocomplete="off" placeholder = "Enter Email">    
                </div>
                <div class="text" style="position: relative;left: 12px;">
                    Email
                </div>
            </div>
            <div class="getpass">
                <div class="inputpass">
                    <input type="password" name="pass" class="form-control" autocomplete="off" placeholder = "Enter Password">    
                </div>
                <div class="text" style="position: relative;left: 12px;">
                    Password
                </div>
            </div>
            <div class="submitbutton">
                <input type="submit" value="SUBMIT" class="btn btn-success">
            </div>
        </form>

        <div class="reg">
            New Here ? <a href="register.php">Register</a>
        </div>
    </main>
    <script>
        function validateForm() {
            var x = document.forms["myform"]["mail"].value;
            var y = document.forms["myform"]["pass"].value;
            if (x == "" || y == "") {
                alert("Form not filled");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>