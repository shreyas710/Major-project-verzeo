<?php
    $conn=mysqli_connect('localhost','root');
    session_start();
    if(isset($_SESSION['message1'])){
        echo "<script type='text/javascript'>
                alert('" . $_SESSION['message1'] . "');
              </script>";
         session_unset();
    }
?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="admin.css">
        <?php include 'links.php'?>
    </head>
    <body>
        <header>
            <div class="container center-div shadow ">
            
                <div class="heading text-center mb-5 text-uppercase text-white">
                 ADMIN LOGIN PAGE 
                 </div>

                 <div class="container row d-flex flex-row justify-content-center mb-5">
                 <div class="admin-form shadow p-2">
                 <form name = "myform" action="processadmin.php" method="POST" onsubmit="return validateForm()">
                 <div class="form-group">
                 <label >Email ID</label>
                 <input type="text" name="user" value="" class="form-control" autocomplete="off">
                 </div>
                 
                 <div class="form-group">
                 <label >Password</label>
                 <input type="password" name="pass" value="" class="form-control" autocomplete="off" >
                 </div>
                 <input type="submit" class="btn btn-success" name="submit">
                 </form>
                 </div>
                 </div>
            </div>
            <script>
                function validateForm() {
                    var x = document.forms["myform"]["user"].value;
                    var y = document.forms["myform"]["pass"].value;
                    if (x == "" || y == "") {
                        alert("Form not filled");
                        return false;
                    }
                    return true;
                }
            </script>
        </header>
    </body>
</html>

