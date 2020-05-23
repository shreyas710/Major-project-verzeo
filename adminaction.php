<?php
session_start();

$conn=mysqli_connect('localhost','root');

if($conn){
    echo "Connection Successful";

}
else{
echo "No Connection";
}


$db= mysqli_select_db($conn,'admin');

if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $sql="select * from admintable where user ='$username' and pass='$password' ";

    $query=mysqli_query($conn,$sql);

    $row= mysqli_num_rows($query);
        if($row == 1)
        {
            echo"login Successfull";
            $_SESSION['user']= $username;
            header('location:adminmainpage.php');
        }
        else{
            echo"login failed";
            header('location:admin.php');
        }
    
}


