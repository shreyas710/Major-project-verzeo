<?php
    include_once 'database.php';

    $ma = $_POST['mail'];
    $pa1 = $_POST['pass'];
    $pa2 = $_POST['pass1'];
    $sql1 = "SELECT * FROM users WHERE Email = '$ma';";
    $result1 = mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($result1);
    $f=0;
    if($pa1!=$pa2){
        session_start();
        $_SESSION['errorMessage'] = "Passwords do not match";
        header("Location: register.php");
        $f=1;
    } 
    if($f==0){
        if($count > 0){
            session_start();
            $_SESSION['errorMessage2'] = "Email already exists";
            header("Location: register.php");
        }else{
            $sql = "INSERT INTO users (Email, Password) VALUES ('$ma', '$pa1');";
            $result = mysqli_query($conn, $sql);
            session_start();
            $_SESSION['errorMessage1'] = "Registered successfully Please login";
            header("Location: index.php");
        }
    }
    
?>