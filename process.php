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
        $sql1 = "SELECT * FROM loan_application WHERE Email = '$ma';";
        $result1 = mysqli_query($conn, $sql1);
        $count1  = mysqli_num_rows($result1);
        if($count1 > 0){
            session_start();
            $row = $result1->fetch_assoc();
            $_SESSION['firstnameapp2'] = $row['firstname'];
            $_SESSION['lastnameapp2'] = $row['lastname'];
            $_SESSION['emailapp2'] = $row['email'];
            $_SESSION['ageapp2'] = $row['age'] ;
            $_SESSION['dateofbirthapp2'] = $row['dateofbirth'];
            $_SESSION['monthlyincomeapp2'] = $row['monthlyincome'];
            $_SESSION['loanamountneededapp2'] = $row['loanamountneeded']; 
            $_SESSION['purposeapp2'] = $row['purpose'];
            $_SESSION['tenureapp2'] = $row['tenure'];
            $_SESSION['errorMessage11'] = "Login successfull";
            header("Location: application2.php");
        }else{
            session_start();
            $_SESSION['errorMessage11'] = "Login successfull";
            $_SESSION['email'] = $ma;
            header("Location: application.php");
        }
    }
    mysqli_close($conn);
?>