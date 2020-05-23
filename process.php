<?php
    include_once "database.php";

    $ma = $_POST['mail'];
    $pw = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE Email = '$ma' AND Password = '$pw';";
    $result = mysqli_query($conn, $sql);
    $count  = mysqli_num_rows($result);
	if($count==0) {
        session_start();
        $_SESSION['errorMessage'] = "Wrong email or password";
        header("Location: index.php");
	} else {
        session_start();
        $_SESSION['errorMessage'] = "Login successful";
        $_SESSION['email'] = $ma;
		header("Location: application.php");
    }
    mysqli_close($conn);
?>