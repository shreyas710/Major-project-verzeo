<?php
    include_once 'database.php';

    $ma = $_POST['mail'];
    $pa1 = $_POST['pass'];
    $pa2 = $_POST['pass1'];
    if($pa1!=$pa2){
        header("Location: register.php");
    }else{
        $sql = "INSERT INTO users (Email, Password) VALUES ('$ma', '$pa1');";
        $result = mysqli_query($conn, $sql);
        header("Location: index.php");
    }
?>