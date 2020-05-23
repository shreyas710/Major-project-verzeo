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
    
    $sql = "INSERT INTO Loan_application(firstname,lastname,email,age,dateofbirth,monthlyincome,loanamountneeded,purpose,tenure) VALUES('$firstname','$lastname','$email','$age','$dateofbirth','$monthlyincome','$loanamountneeded','$purpose','$tenure')";
    
    if(mysqli_query($conn,$sql))
    {
         echo ("New record created successfully !");
    }
    else{
         echo( "Error:" .$sql. " " .mysqli_error($conn));
        }
     mysqli_close($conn);
}
?>