<?php
include_once 'database.php';
if(isset($_POST['save']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $dateofbirth = $_POST['dateofbirth'];
    $monthlyincome = $_POST['monthlyincome'];
    $loanamountneeded = $_POST['loanamountneeded'];
    $purpose = $_POST['purpose'];
    $tenure = $_POST['tenure'];
    $approval = "PENDING";
    
    $sql = "INSERT INTO Loan_application(firstname,lastname,email,age,dateofbirth,monthlyincome,loanamountneeded,purpose,tenure,approval) VALUES('$firstname','$lastname','$email','$age','$dateofbirth','$monthlyincome','$loanamountneeded','$purpose','$tenure','$approval')";
     if(mysqli_query($conn,$sql)){
          session_start();
          $_SESSION['firstnameapp2'] = $_POST['firstname'];
          $_SESSION['lastnameapp2'] = $_POST['lastname'];
          $_SESSION['emailapp2'] = $_POST['email'];
          $_SESSION['ageapp2'] = $_POST['age'];
          $_SESSION['dateofbirthapp2'] = $_POST['dateofbirth'];
          $_SESSION['monthlyincomeapp2'] = $_POST['monthlyincome'];
          $_SESSION['loanamountneededapp2'] = $_POST['loanamountneeded'];
          $_SESSION['purposeapp2'] = $_POST['purpose'];
          $_SESSION['tenureapp2'] = $_POST['tenure'];
          $_SESSION['message'] = "New Application created successfully";
          header("Location: application2.php");
     }
     mysqli_close($conn);
}
?>