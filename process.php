<?php
    include_once "database.php";

    $ma = $_POST['mail'];
    $pw = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE Email = '$ma' AND Password = '$pw';";
    $result = mysqli_query($conn, $sql);
    $count  = mysqli_num_rows($result);
	if($count==0) {
        header("Location: index.php");
	} else {
		header("Location: loan.php");
	}
?>

