<?php
session_start();

$conn=mysqli_connect('localhost','root');


$db= mysqli_select_db($conn,'projectdatabase');

if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $sql="select * from admintable where user ='$username' and pass='$password' ";

    $query=mysqli_query($conn,$sql);

    $row= mysqli_num_rows($query);
        if($row == 1){
            $_SESSION['message'] = "Login Successfull";
            $_SESSION['user']= $username;
            header('location: adminapproval.php');
        }
        else{
            $_SESSION['message1'] = "Login Failed";
            header('location: admin.php');
        }
    
}


